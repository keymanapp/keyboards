/*
 * Keyman is copyright (C) SIL Global. MIT License.
 */

import { warning as logWarning, info as logInfo } from '@actions/core';

import { getOctokit } from '@actions/github';
type GitHub = ReturnType<typeof getOctokit>;

import { getAssociatedPR } from './graphql/queries.js';
import { spawnChild } from './util/spawnAwait.js';

export interface PRInformation {
  title: string;
  number: number;
}

const getAssociatedPRInformation = async (
  octokit: GitHub,
  commit_id: string
): Promise<PRInformation | undefined> => {
  const response = await octokit.graphql(
    getAssociatedPR,
    { sha: commit_id }
  );

  if (response === null || (<any>response).repository.commit === null) {
    return undefined;
  }

  const {
    repository: {
      commit: {
        parents: {
          nodes: [
            {
              associatedPullRequests: {
                nodes: nodes
              }
            }
          ]
        }
      }
    }
  }: any = response;

  const node = nodes.find((node:any) => node.state == 'MERGED');
  return node ? { title: node.title, number: node.number } : undefined;
};

/**
 * Retrieves any  outstanding pull request titles to HISTORY.md for the
 * current version. Retrieves pull request details from GitHub.
 * @returns array of pull requests
 */

export const getPullRequestsFromCommitRange = async (
  octokit: GitHub, fromVersion: string, toVersion?: string,
  omitFirstCommit?: boolean
): Promise<PRInformation[]> => {

  //
  // Use git log to retrieve list of merge commit refs in from -- to
  //

  const args = ['log', '--merges', '--first-parent', '--format=%H', fromVersion + '..' + (toVersion ?? 'HEAD')];
  const gitResult = (await spawnChild('git', args)).trim();
  if(gitResult.length == 0) {
    // We won't throw on this
    logWarning('No pull requests found since previous increment');
    return [];
  }

  logInfo('Found commits for '+JSON.stringify(args)+': \n'+gitResult);

  let newCommits = gitResult.split(/\r?\n/g);

  if(omitFirstCommit) {
    // We exclude the first commit, because it comes from the previous build in TeamCity
    newCommits = newCommits.filter(commit => commit != fromVersion);
  }

  //
  // Retrieve the pull requests associated with each merge
  //
  let pulls: PRInformation[] = [];

  for(const commit of newCommits) {
    const pr = await getAssociatedPRInformation(octokit, commit);
    if(pr === undefined) {
      logWarning(`commit ref ${commit} has no associated pull request.`);
      continue;
    }
    if(pulls.find(p => p.number == pr.number) == undefined) {
      pulls.push(pr);
    }
  }
  return pulls;
};
