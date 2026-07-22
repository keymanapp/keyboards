/*
 * Keyman is copyright (C) SIL Global. MIT License.
 */

import { GitHub, PullComment } from './find-and-report-on-new-pull-requests.js';
import { getListOfKeyboardsForPullRequest } from './get-list-of-keyboards-for-pull-request.js';
import { PRInformation } from './get-pull-requests-from-commit-range.js';

export const preparePullComment = async (octokit: GitHub, pull: PRInformation): Promise<PullComment | null> => {
  const ids = await getListOfKeyboardsForPullRequest(octokit, pull.number);
  if (ids.length == 0) {
    // skip comment
    return null;
  }

  return preparePullCommentWithIds(pull, ids);
}

export const preparePullCommentWithIds = (pull: PRInformation, ids: string[]): PullComment => {
  let comment: string;

  if (ids.length == 1) {
    comment = `
Thank you for your contribution!

This keyboard has now been published and will shortly be available at: https://keyman.com/keyboards/${ids[0]}.

(There may be a delay of a few minutes for deployment of the keyboard to run across multiple services.)
  `;
  } else {
    comment = `
Thank you for your contribution!

The following keyboards have been published:
${ids.map(id => `* https://keyman.com/keyboards/${id}\n`).join('')}
(There may be a delay of a few minutes for deployment of the keyboard to run across multiple services.)
  `;
  }

  return {
    number: pull.number,
    title: pull.title,
    comment
  };
};
