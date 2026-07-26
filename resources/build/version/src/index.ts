/*
 * Keyman is copyright (C) SIL Global. MIT License.
 */

import { info as logInfo } from '@actions/core';
import { getOctokit } from '@actions/github';
type GitHub = ReturnType<typeof getOctokit>;
import yargs from 'yargs';
import { hideBin } from 'yargs/helpers';

import { findAndReportOnNewPullRequests } from './find-and-report-on-new-pull-requests.js';
import { getPullRequestsFromCommitRange } from './get-pull-requests-from-commit-range.js';
import { teamcityGetBuildChanges } from './teamcity-get-build-changes.js';

const argv = await yargs(hideBin(process.argv))
  .command(['last-commit'], 'Get last commit hash from the last successful build')
  .command(['report'], 'Print list of outstanding PRs waiting for the next release')
  .command(['pr'], 'Get list of outstanding PRs and add a comment to each one')
  .demandCommand(1, 1)
  .options({
    'github-token': {
      description: 'GitHub oauth token',
      type: 'string'
    },

    'teamcity-token': {
      description: 'Teamcity oauth token',
      type: 'string'
    },

    'build-id': {
      description: 'Teamcity build id to retrieve, defaults to last successful build',
      type: 'number'
    },

    'from': {
      description: 'Version tag or commit for starting version to report after (excludes this commit)',
      type: 'string'
    },

    'to': {
      description: 'Version tag or commit for finishing version to report to, defaults to HEAD',
      type: 'string'
    }
  })
  .help()
  .alias('help', 'h')
  .argv;

function require_arg(arg: string): string|never {
  if(!argv[arg]) {
    console.error(`--${arg} is required for this command`);
    process.exit(1);
  }
  return argv[arg] as string;
}

function is_command(cmd: string): boolean {
  return argv._.includes(cmd);
}

const main = async (): Promise<never> => {

  if(is_command('run')) {
    const shas = await teamcityGetBuildChanges(require_arg('teamcity-token'), argv['build-id']);
    if(!shas) {
      console.error('Could not retrieve SHAs from TeamCity');
      process.exit(1);
    }

    const octokit: GitHub = getOctokit(require_arg('github-token'));
    let changeCount = await findAndReportOnNewPullRequests(octokit, shas[0], shas[1], false);
    logInfo(`# ${changeCount} change(s)\n`);

    process.exit(0);
  }

  // Teamcity commands

  if(is_command('last-commit')) {
    const shas = await teamcityGetBuildChanges(require_arg('teamcity-token'), argv['build-id']);
    if(!shas) {
      console.error('Could not retrieve SHAs');
      process.exit(1);
    }
    console.log(shas[0]);
    console.log(shas[1]);
    process.exit(0);
  }

  // GitHub commands

  if(is_command('report')) {
    logInfo(`# Reporting on merged pull requests`);
    const octokit: GitHub = getOctokit(require_arg('github-token'));
    let pulls = await getPullRequestsFromCommitRange(octokit, argv.from!, argv.to);
    for(const pull of pulls) {
      logInfo(`* ${pull.title} (#${pull.number})`);
    }
    process.exit(0);
  }

  if(is_command('pr')) {
    logInfo(`# Writing announcements to pull requests`);
    const octokit: GitHub = getOctokit(require_arg('github-token'));
    let changeCount = await findAndReportOnNewPullRequests(octokit, argv.from!, argv.to);
    logInfo(`# ${changeCount} change(s)\n`);
    process.exit(0);
  }

  process.exit(50); // No command found
};

try {
  await main();
  console.log('Unexpected exit');
} catch(error: any) {
  console.error(`An unexpected error occurred: ${error.message}, ${error.stack ?? 'no stack trace'}.`);
  process.exit(1);
};
