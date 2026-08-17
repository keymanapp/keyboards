/*
 * Keyman is copyright (C) SIL Global. MIT License.
 */

import * as fs from 'fs';
import 'mocha';
import sinon from 'sinon';
import { assert } from 'chai';
import { getListOfKeyboardsForPullRequest } from '../src/get-list-of-keyboards-for-pull-request.js';
import { makePathToFixture, octokit } from "./helpers.js";
import { graphql } from '../src/graphql/queries.js';

const pull_responses = new Map([
  [3860, ['ladino'] ],
  [4029, []],
  [4023, ['shughni']],
  [3967, []],
  [3932, ['baybayin','slp1_deva']],
]);

describe('getListOfKeyboardsForPullRequest', function() {

  afterEach(function() {
    sinon.restore();
  });

  pull_responses.forEach( (keyboardIds, pullRequestNumber) =>
    it(`should report a list of keyboards IDs for pull request ${pullRequestNumber}`, async function() {

      const data = JSON.parse(fs.readFileSync(makePathToFixture('pull-requests', `${pullRequestNumber}.json`), 'utf-8'));
      sinon.replace(graphql, 'call', sinon.fake.returns(data));

      const ids = await getListOfKeyboardsForPullRequest(octokit, pullRequestNumber);
      assert.deepEqual(ids, keyboardIds);
    })
  );
});
