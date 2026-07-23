# Contributing

Contributions are welcome. This document describes how to set up a development
environment, how to run the quality gates and the tests, and which commit
message and pull request rules apply in this repository.

Source code and issue tracker are hosted on GitHub:
[fgtclb/his-connector](https://github.com/fgtclb/his-connector).

## Table of contents

- [Development environment](#development-environment)
- [Quality gates](#quality-gates)
- [Running tests](#running-tests)
- [Documentation](#documentation)
- [Commit messages](#commit-messages)
- [Pull request workflow](#pull-request-workflow)

## Development environment

All tests and quality tools run in containers through the
[`Build/Scripts/runTests.sh`](Build/Scripts/runTests.sh) wrapper. The only
requirement on the host is a container runtime — **podman** (preferred) or
**docker**. The wrapper pulls the required TYPO3 testing images on first use;
neither PHP nor Composer needs to be installed on the host.

Dependencies are installed into the git-ignored `.Build/` directory. The
wrapper installs them for a specific TYPO3 core and PHP version:

```bash
# Install dependencies for TYPO3 v13 on PHP 8.2 (default matrix).
Build/Scripts/runTests.sh -t 13 -p 8.2 -s composerUpdate

# Switch the working copy to the TYPO3 v14 dependency set.
Build/Scripts/runTests.sh -t 14 -p 8.2 -s composerUpdate
```

> **Note**
> Only `composerUpdate` installs the dependencies for the core version given
> with `-t`, `composerInstall` does not. To run a suite against a specific TYPO3
> core version, run `composerUpdate -t <version>` **first** and pass the same
> `-t <version>` to the suite afterwards. Suites executed with a different core
> version installed than selected report false positives. `composerUpdate`
> removes and reinstalls `.Build/` and `composer.lock` (both git-ignored).

Run `Build/Scripts/runTests.sh -h` to see all suites and options.

## Quality gates

The same gates run locally and in the GitHub Actions workflows for TYPO3 v13
and v14:

```bash
# Coding guidelines: fix in place ...
Build/Scripts/runTests.sh -s cgl

# ... or check only, without changing files, as CI does.
Build/Scripts/runTests.sh -s cgl -n

# Static analysis (PHPStan, level 8).
Build/Scripts/runTests.sh -s phpstan

# PHP linting.
Build/Scripts/runTests.sh -s lintPhp

# Validate the root composer.json.
Build/Scripts/runTests.sh -s composerValidate

# Ensure UTF-8 files do not contain a BOM.
Build/Scripts/runTests.sh -s checkBom

# Find duplicate or missing exception codes.
Build/Scripts/runTests.sh -s checkExceptionCodes

# Ensure test methods do not start with "test".
Build/Scripts/runTests.sh -s checkTestMethodsPrefix
```

When PHPStan reports pre-existing findings that cannot be fixed right away, the
baseline can be regenerated per core version — but prefer fixing the finding:

```bash
Build/Scripts/runTests.sh -t 13 -s phpstanGenerateBaseline
Build/Scripts/runTests.sh -t 14 -s phpstanGenerateBaseline
```

## Running tests

```bash
# Unit tests.
Build/Scripts/runTests.sh -s unit

# Unit tests in random order (add "-o <seed>" to replay a specific order).
Build/Scripts/runTests.sh -s unitRandom

# Functional tests on SQLite (no database container required).
Build/Scripts/runTests.sh -s functional -d sqlite

# Functional tests against other database management systems.
Build/Scripts/runTests.sh -s functional -d mariadb -i 10.6
Build/Scripts/runTests.sh -s functional -d mysql -i 8.0
Build/Scripts/runTests.sh -s functional -d postgres -i 10
```

To run a single test class or method, append phpunit arguments **after a `--`
separator** — the wrapper parses its own options with `getopts`, so phpunit
flags must follow `--`:

```bash
Build/Scripts/runTests.sh -s functional -d sqlite -- --filter DummyTest
```

Test methods must **not** be prefixed with `test`; use the PHPUnit `#[Test]`
attribute and a descriptive method name instead:

```php
#[Test]
public function getExtensionKeyReturnsExtensionKey(): void
{
    // ...
}
```

## Documentation

The documentation sources live in [`Documentation/`](Documentation) and are
rendered with the official TYPO3 rendering container:

```bash
Build/Scripts/runTests.sh -s renderDocumentation
```

The rendered output is written to the git-ignored `Documentation-GENERATED-temp/`
directory. Rendering must pass without errors; the documentation workflow runs
the same command on every pull request.

User facing changes need a changelog entry below
`Documentation/Changelog/<version>/`, named by change type — `Feature-*.rst`,
`Breaking-*.rst`, `Deprecation-*.rst` or `Important-*.rst`.

## Commit messages

This repository follows the **TYPO3 core commit message conventions**.

### Format

```
[TAG] Short imperative summary

A wrapped body (around 72 characters per line) that explains what the
change does and, more importantly, why it is needed. Describe the
behaviour change and the motivation, not the line-by-line diff.
```

Rules:

- The subject line starts with a **tag** in square brackets, followed by a
  short summary in **imperative mood** ("Add", "Fix", "Rename"), capitalized
  and **without** a trailing period.
- Keep the subject concise — aim for **~52 characters**, ~72 at most.
- Separate subject and body with a single blank line.
- Wrap the body at around **72 characters** and explain the *what* and *why*.
- An issue reference is **not required**. When a change relates to a GitHub
  issue, reference it in the footer, for example `Resolves: #123`.

### Tags

| Tag         | Use for                                                            |
|-------------|--------------------------------------------------------------------|
| `[FEATURE]` | A new feature or capability.                                       |
| `[TASK]`    | Maintenance, refactoring, tooling, tests and other non-functional changes. |
| `[BUGFIX]`  | A bug fix.                                                         |
| `[DOCS]`    | Documentation-only changes.                                        |

Breaking changes are additionally prefixed with `[!!!]` in front of the tag, so
reviewers and users spot them immediately:

```
[!!!][TASK] Remove deprecated connector accessor

Explain what breaks and how to migrate.
```

### Examples

```
[FEATURE] Add HIS course import command

[TASK] Raise minimum TYPO3 version to v13.4

[BUGFIX] Handle empty HIS response payloads

[DOCS] Document the installation for classic mode
```

## Pull request workflow

1. Create a topic branch off `main` — for example `feature/course-import` or
   `bugfix/empty-response`.
2. Keep commits focused; one logical change per commit, following the commit
   message rules above.
3. Make sure the quality gates and both test suites pass locally before opening
   the pull request:

   ```bash
   Build/Scripts/runTests.sh -s cgl -n
   Build/Scripts/runTests.sh -s phpstan
   Build/Scripts/runTests.sh -s lintPhp
   Build/Scripts/runTests.sh -s unit
   Build/Scripts/runTests.sh -s functional -d sqlite
   Build/Scripts/runTests.sh -s renderDocumentation
   ```

   Repeat the core-version dependent gates for both supported TYPO3 versions
   (`-t 13` and `-t 14`, each after the matching `composerUpdate`).
4. Open the pull request against `main` and fill in the pull request template.
   The GitHub Actions workflows run the full matrix for TYPO3 v13 and v14.
5. Address review feedback by amending or adding commits; keep the history
   readable — squash fixup commits before the pull request is merged.
