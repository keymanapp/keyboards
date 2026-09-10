/*
 * Keyman is copyright (C) SIL Global. MIT License.
 */

import { GitHub, PullComment } from './find-and-report-on-new-pull-requests.js';

/**
 * Creates a comment on each pull request found to point users to a relevant
 * build.
*/
export const sendCommentToPullRequest = async (
  octokit: GitHub,
  pull: PullComment
): Promise<void> => {
  console.log(`Creating comment on Pull Request #${pull.number}: ${pull.title}`);
  await octokit.rest.issues.createComment({
    owner: 'keymanapp',
    repo: 'keyboards',
    issue_number: pull.number,
    body: pull.comment,
  });
};
