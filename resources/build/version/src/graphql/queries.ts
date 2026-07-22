/*
 * Keyman is copyright (C) SIL Global. MIT License.
 */

export const graphql = {
  call: (octokit: any, query: any, parameters: any) => octokit.graphql(query, parameters)
}

export const getAssociatedPR = `
  query associatedPRs($sha: String!) {
    repository(name: "keyboards", owner: "keymanapp") {
      commit: object(expression: $sha) {
        ... on Commit {
          parents(last: 1) {
            nodes {
              associatedPullRequests(last: 10) {
                nodes {
                  state
                  title
                  number
                }
              }
            }
          }
        }
      }
    }
  }
`;

export const getPullRequestFiles = `
  query pullRequstFiles($pr: Int!) {
    repository(name: "keyboards", owner: "keymanapp") {
      pullRequest(number: $pr) {
        files(first: 100) {
          nodes {
            path
          }
        }
      }
    }
  }
`;
