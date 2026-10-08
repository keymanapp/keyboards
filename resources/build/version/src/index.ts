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
  .command(['run'], 'Add announcments to all PRs included in build identified by build-id')
  .command(['last-commit'], 'Get commit hash from the last successful build')
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

    const shasCurrent = await teamcityGetBuildChanges(require_arg('teamcity-token'), argv['build-id']);
    if(!shasCurrent) {
      console.error(`Could not retrieve SHAs for current build ${argv['build-id']} from TeamCity`);
      process.exit(1);
    }

    const shasPrevious = await teamcityGetBuildChanges(require_arg('teamcity-token'));
    if(!shasPrevious) {
      console.error('Could not retrieve SHAs for last successful build from TeamCity');
      process.exit(1);
    }

    const octokit: GitHub = getOctokit(require_arg('github-token'));
    const commentCount = await findAndReportOnNewPullRequests(octokit, shasPrevious[1], shasCurrent[1], true);
    logInfo(`# ${commentCount} comment(s) added\n`);

    process.exit(0);
  }

  // Teamcity commands

  if(is_command('last-commit')) {
    const shasCurrent = await teamcityGetBuildChanges(require_arg('teamcity-token'), argv['build-id']);
    const shasPrevious = await teamcityGetBuildChanges(require_arg('teamcity-token'));
    if(!shasCurrent || !shasPrevious) {
      console.error('Could not retrieve SHAs');
      process.exit(1);
    }

    // we need the last commit from the resulting queries
    console.log(shasCurrent[1]);
    console.log(shasPrevious[1]);

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
    const commentCount = await findAndReportOnNewPullRequests(octokit, argv.from!, argv.to, true);
    logInfo(`# ${commentCount} comment(s) added\n`);
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
