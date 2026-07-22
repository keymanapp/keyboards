/*
 * Keyman is copyright (C) SIL Global. MIT License.
 */

let teamcityToken: string = null;

export const teamcity = {
  fetch: async (path: string) =>
    await (await fetch(path, {
      headers: [
        ['Accept', 'application/json'],
        ['Authorization', `Bearer ${teamcityToken}`],
      ],
    })).json(),
};

const FETCH_LATEST_BUILD_CHANGES =
  'https://build.palaso.org/app/rest/builds'+
  '?locator=buildType:(Keyboards_Upload),state:finished,count:1,status:SUCCESS'+
  '&fields=build(id,status,state,number,finishOnAgentDate,webUrl,changes(change(version,vcsRootInstance)))';
const FETCH_BUILD_CHANGES = (id: number) =>
  'https://build.palaso.org/app/rest/builds'+
  `?locator=buildId:${id}`+
  '&fields=build(id,status,state,number,finishOnAgentDate,webUrl,changes(change(version,vcsRootInstance)))';
const REPO = 'keymanapp/keyboards';

export const teamcityGetBuildChanges = async (token: string, buildId?: number): Promise<string[] | null> => {
  teamcityToken = token;
  const data = await teamcity.fetch(buildId ? FETCH_BUILD_CHANGES(buildId) : FETCH_LATEST_BUILD_CHANGES);
  const changes = data?.build?.[0]?.changes?.change?.filter((change:any) => change?.vcsRootInstance?.name == REPO);
  return changes && changes.length > 0 ?
    [changes[changes.length-1].version, changes[0].version] : null;
}
