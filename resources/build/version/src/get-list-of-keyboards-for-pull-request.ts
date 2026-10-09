/*
 * Keyman is copyright (C) SIL Global. MIT License.
 */

import { GitHub } from './find-and-report-on-new-pull-requests.js';
import { graphql, getPullRequestFiles } from './graphql/queries.js';

export const getListOfKeyboardsForPullRequest = async (octokit: GitHub, pullRequest: number): Promise<string[]> => {
  const response = await graphql.call(octokit,
    getPullRequestFiles,
    { pullRequest }
  );

  if (response === null || (<any>response).repository.pullRequest === null) {
    return [];
  }

  const {
    repository: {
      pullRequest: {
        files: {
          nodes: nodes
        }
      }
    }
  }: any = response;

  const ids = [
    // unique list of ids
    ...new Set<string>(nodes
      // remove non-keyboard-related files
      .filter((node:{path:string}) => node.path.match(/^(?:release|experimental|legacy)\/[^/]+\/[^/]+/) && !node.path.match(/^([^/]+)\/(shared|template)\//))
      // get the ids
      .map((node:{path:string}) => node.path.match(/^(?:release|experimental|legacy)\/(?:[^/]+)\/([^/]+)/)![1])
    )
  ];

  return ids;
};
