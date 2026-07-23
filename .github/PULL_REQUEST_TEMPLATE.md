## What does this change?

A short description of the change and, more importantly, why it is needed.

## Related issue

<!-- For example: Resolves: #123 — remove the section if there is no issue. -->

## Type of change

- [ ] Bugfix (`[BUGFIX]`)
- [ ] Feature (`[FEATURE]`)
- [ ] Task: maintenance, refactoring, tooling, tests (`[TASK]`)
- [ ] Documentation (`[DOCS]`)
- [ ] Breaking change (additionally prefixed with `[!!!]`)

## Checklist

- [ ] The commit messages follow the
      [commit message rules](../CONTRIBUTING.md#commit-messages).
- [ ] `Build/Scripts/runTests.sh -s cgl -n` passes.
- [ ] `Build/Scripts/runTests.sh -s phpstan` passes.
- [ ] `Build/Scripts/runTests.sh -s unit` passes.
- [ ] `Build/Scripts/runTests.sh -s functional -d sqlite` passes.
- [ ] The documentation has been updated where needed and
      `Build/Scripts/runTests.sh -s renderDocumentation` passes.
- [ ] A changelog entry has been added below `Documentation/Changelog/`
      for user facing changes.
