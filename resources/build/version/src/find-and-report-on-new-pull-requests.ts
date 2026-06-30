/*
 * Keyman is copyright (C) SIL Global. MIT License.
 */

import { getOctokit } from '@actions/github';
import { warning as logWarning } from '@actions/core';
export type GitHub = ReturnType<typeof getOctokit>;

import { getPullRequestsFromCommitRange, PRInformation } from './get-pull-requests-from-commit-range.js';
import { sendCommentToPullRequest } from './send-comment-to-pull-request.js';
import { preparePullComment } from './prepare-pull-comment.js';

export interface PullComment {
  number: number;
  title: string;
  comment: string;
};

/**
 * Adds any outstanding pull request titles to HISTORY.md for the current
 * version. Retrieves pull request details from GitHub.
 * @returns number of history entries for the current version,
 *          0 if no pulls associated with the current version, or
 *          -1 on error.
 */

export const findAndReportOnNewPullRequests = async (
  octokit: GitHub, from: string, to?: string, omitFirstCommit?: boolean
): Promise<number> => {

  //
  // Get pull request details
  //

  let pulls: PRInformation[] = [];

  try {
    pulls = await getPullRequestsFromCommitRange(octokit, from, to, omitFirstCommit);
  } catch(e) {
    logWarning(String(e));
    return -1;
  }

  if(pulls == undefined) {
    return -1;
  }

  //
  // Build a comment for each pull
  //
  let pullComments = await Promise.all(pulls.map(async pull => await preparePullComment(octokit, pull)));
  pullComments = pullComments.filter(pull => pull !== null);

  //
  // Write a comment to GitHub for each of the pulls
  //

  for(let pull of pullComments) {
    await sendCommentToPullRequest(octokit, pull!);

    if(pullComments.length > 1) {
      // Potentially creating many comments, we need to respect GitHub rate limits
      // https://docs.github.com/en/rest/guides/best-practices-for-integrators#dealing-with-abuse-rate-limits
      // At least 1 second delay between requests
      await new Promise(resolve => setTimeout(() => resolve(null), 1000));
    }
  }

  return pulls.length;
};
