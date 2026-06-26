/*
 * Keyman is copyright (C) SIL Global. MIT License.
 */

import * as fs from 'fs';
import 'mocha';
import sinon from 'sinon';
import { assert } from 'chai';
import { makePathToFixture, octokit } from "./helpers.js";
import { graphql } from '../src/graphql/queries.js';
import { preparePullComment } from '../src/prepare-pull-comment.js';

const pull_comments = [3860, 3932];

describe('preparePullComment', function() {

  afterEach(function() {
    sinon.restore();
  });

  pull_comments.forEach( id =>
    it(`should generate a comment for pull request ${id}`, async function() {

      const data = JSON.parse(fs.readFileSync(makePathToFixture('pull-requests', `${id}.json`), 'utf-8'));
      sinon.replace(graphql, 'call', sinon.fake.returns(data));

      const comment = fs.readFileSync(makePathToFixture('pull-requests', `${id}.comment.txt`), 'utf-8').replace(/\r\n/g, '\n').trim();
      const result = await preparePullComment(octokit, {number: id, title: ''});
      assert.isObject(result);
      assert.equal(result?.title, '');
      assert.equal(result?.number, id);
      assert.equal(result?.comment.trim(), comment);
    })
  );
});
