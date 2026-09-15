# Releasing

Two scripts in [`Build/Scripts/`](../Build/Scripts) drive a release. Both always
operate on the repository root, no matter from where they are called, and both
show all options with `--help`.

## `setVersion.sh` — apply a version

Applies a version and its derived variants to every file carrying one:

| File                                                       | Value                                                  |
|------------------------------------------------------------|--------------------------------------------------------|
| `Build/Scripts/runTests.sh`                                | `COMPOSER_ROOT_VERSION`                                |
| `composer.json`                                            | `extra.typo3/cms.version` and `extra.branch-alias`     |
| `ext_emconf.php`                                           | `version`                                              |
| `VERSION`                                                  | the plain version                                      |
| `Tests/Functional/**/Fixtures/Extensions/*/ext_emconf.php` | `version`                                              |
| `Tests/Functional/**/Fixtures/Extensions/*/composer.json`  | the requirement on `fgtclb/his-connector`, if present  |

The fixture extensions are discovered dynamically, a new fixture extension does
not need to be registered anywhere.

The second argument selects which variant of the version is applied:

| Type           | Applied version                                   | Use                                              |
|----------------|---------------------------------------------------|--------------------------------------------------|
| `release`      | `X.Y.Z`, branch alias unchanged                   | The commit that is tagged.                       |
| `post-release` | `X.Y.W-dev`, branch alias `X.Y.x-dev`             | The next development version after a release.   |
| `dev`          | `X.Y.Z-dev`, branch alias `X.Y.x-dev`             | Forced minor or major bumps, new branches.       |

The passed version is applied as it is, the script never increments it.
`ext_emconf.php` receives the plain `X.Y.Z` version for every type.

```bash
# Release version 1.2.0.
Build/Scripts/setVersion.sh 1.2.0 release

# Next development version after it.
Build/Scripts/setVersion.sh 1.2.1 post-release

# Start the development of the next minor version.
Build/Scripts/setVersion.sh 1.3.0 dev

# Show every change without touching a file.
Build/Scripts/setVersion.sh 1.2.0 release --dry-run
```

The script only edits working tree files, it performs no git or network
operations. It reads and writes the `composer.json` files with `php` rather
than `jq`, so it can be run through the container wrapper on a host having
neither:

```bash
Build/Scripts/runTests.sh -s setVersion -- 1.2.0 release --dry-run
```

Everything after `--` is passed to the script unchanged.

## `release.sh` — orchestrate the release

Drives the complete two-phase workflow for one release version `X.Y.Z`:

1. **Release** — branch `release-X.Y.Z` off `main`, apply the version with
   `setVersion.sh X.Y.Z release`, commit `[RELEASE] X.Y.Z`, push, open the pull
   request, wait for the checks, rebase merge it with admin rights and delete
   the branch. Afterwards `main` is refreshed, tagged with `X.Y.Z` and the tag
   is pushed.
2. **Post-release** — branch `set-version-X.Y.W` (with `W = Z + 1`) off the
   merged `main`, apply `setVersion.sh X.Y.W post-release`, commit
   `[TASK] Set version X.Y.W` and merge it the same way.

The script has two independent safety gates:

```bash
# Print the whole plan, change nothing at all.
Build/Scripts/release.sh 1.2.0 --dry-run

# Run the local steps (branches, commits) for real, but only PRINT every
# remote operation.
Build/Scripts/release.sh 1.2.0

# Actually publish: push, pull requests, merges, tag.
Build/Scripts/release.sh 1.2.0 --execute
```

Without `--execute` no push, no pull request, no merge and no tag happens, so a
release can be rehearsed safely. Delete the local `release-*` and
`set-version-*` branches of a rehearsal afterwards.

The script refuses to run when the tag already exists locally, and an
`--execute` run additionally refuses a dirty working tree. It needs `git` and an
authenticated GitHub CLI (`gh`) with the permission to merge pull requests with
admin rights.

`--source-branch=<name>` releases from another branch than `main`, for example
a maintenance branch.

## The publish workflow

Pushing the tag triggers the [`publish`](../.github/workflows/publish.yml)
workflow. It verifies the tag is a bare `MAJOR.MINOR.PATCH` version without a
`v` prefix, installs the [bundled libraries](../README.md#bundled-libraries-ter-release)
into `contrib/Libraries/`, builds the TER artefact with `tailor` and creates the
GitHub release with the artefact attached.

`tailor create-artefact` fails if the tag does not match the `version` in
`ext_emconf.php`. Releasing through `release.sh` guarantees they match.

> **Note**
> Publishing to the TYPO3 Extension Repository is not enabled yet. The step is
> prepared in the workflow and needs the extension key registered in the TER
> and the `TYPO3_API_TOKEN` repository secret.

## Before releasing

- The pipelines on `main` are green for TYPO3 v13 and v14.
- The changelog entries of the version are in place below
  `Documentation/Changelog/<version>/`.
- `Build/Scripts/runTests.sh -s renderDocumentation` passes.
- The extension metadata is consistent: the `description` in `composer.json`
  is composed from the `ext_emconf.php` values as `<title> - <description>`.
- A rehearsal with `--dry-run` shows the expected versions.
