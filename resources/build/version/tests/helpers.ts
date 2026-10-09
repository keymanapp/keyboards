/*
 * Keyman is copyright (C) SIL Global. MIT License.
 */

import * as path from 'node:path';
import { fileURLToPath } from 'node:url';

import { getOctokit } from '@actions/github';
type GitHub = ReturnType<typeof getOctokit>;

export const octokit: GitHub = getOctokit(process.env['GITHUB_TOKEN']!);


/**
 * Builds a path to the fixture with the given path components.
 *
 * e.g., makePathToFixture('example.qaa.trivial')
 * e.g., makePathToFixture('example.qaa.trivial', 'model.ts')
 *
 * @param components One or more path components.
 */
 export function makePathToFixture(...components: string[]): string {
  return fileURLToPath(new URL(path.join('..', '..', 'tests', 'fixtures', ...components), import.meta.url));
}
