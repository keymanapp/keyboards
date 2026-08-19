/*
 * Keyman is copyright (C) SIL Global. MIT License.
 */

import * as fs from 'fs';
import 'mocha';
import sinon from 'sinon';
import { assert } from 'chai';
import { makePathToFixture } from "./helpers.js";
import { teamcity, teamcityGetBuildChanges } from '../src/teamcity-get-build-changes.js';

describe('teamcityGetBuildChanges', function() {

  afterEach(function() {
    sinon.restore();
  });

  it(`should return a set of changes for a given build`, async function() {
    const data = JSON.parse(fs.readFileSync(makePathToFixture(`teamcity.json`), 'utf-8'));
    sinon.replace(teamcity, 'fetch', sinon.fake.returns(data));
    const sha = await teamcityGetBuildChanges('');
    assert.deepEqual(sha, [
      "0dcf816dd359ebd18f30eaa6ac3a471e5367cec2",
      "68318eb289e0a3b43ceaadd69e930679b429f723"
    ]);
  });
});
