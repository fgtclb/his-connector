# TYPO3 extension `his_connector`

TYPO3 CMS extension providing the connector to HIS
(Hochschul-Informations-System) for TYPO3 based university and academic
websites.

> **Note**
> This extension is in an early development stage. The public API is not stable
> yet and may change without a deprecation phase until the first stable release.

| Name          | Value                                   |
|---------------|-----------------------------------------|
| Package name  | `fgtclb/his-connector`                  |
| Extension key | `his_connector`                         |
| Repository    | https://github.com/fgtclb/his-connector |
| License       | GPL-2.0-or-later                        |

## Compatibility

| Branch | Extension | TYPO3     | PHP       |
|--------|-----------|-----------|-----------|
| main   | 1.x       | v13 / v14 | 8.2 - 8.5 |

## Installation

```bash
composer require fgtclb/his-connector
```

As long as no stable version has been released, require the development version
of the main branch explicitly:

```bash
composer require fgtclb/his-connector:^1.0@dev
```

This additionally requires `minimum-stability: "dev"` together with
`prefer-stable: true` in the root `composer.json` file.

## Documentation

The extension documentation lives in the [`Documentation/`](Documentation)
directory and can be rendered locally:

```bash
Build/Scripts/runTests.sh -s renderDocumentation
```

The rendered output is written to the git-ignored `Documentation-GENERATED-temp/`
directory.

## Development

All tests and quality tools run in containers through the
[`Build/Scripts/runTests.sh`](Build/Scripts/runTests.sh) wrapper. The only
requirement on the host is a container runtime — **podman** (preferred) or
**docker**.

```bash
# Install dependencies for TYPO3 v13 on PHP 8.2 (default matrix).
Build/Scripts/runTests.sh -t 13 -p 8.2 -s composerUpdate

# Quality gates.
Build/Scripts/runTests.sh -s cgl -n
Build/Scripts/runTests.sh -s phpstan
Build/Scripts/runTests.sh -s lintPhp

# Tests.
Build/Scripts/runTests.sh -s unit
Build/Scripts/runTests.sh -s functional -d sqlite

# All available options.
Build/Scripts/runTests.sh -h
```

See [`CONTRIBUTING.md`](CONTRIBUTING.md) for the full development setup, the
quality gates and the commit message rules.

## License

This extension is published under the [GPL-2.0-or-later](LICENSE) license.

## Supported Versions

| Version | Supported          | End of Support |
|---------|--------------------|----------------|
| 1.x     | :white_check_mark: | 2029-06-30     |

The newest line listed above is under development on the default branch and has not been released yet.

## Security

Found a vulnerability? Please report it privately via our
[security report form](https://security.fgtclb.com) — **do not** open a public issue.
See [SECURITY.md](SECURITY.md) for the full vulnerability disclosure policy,
including what to expect and our safe harbor statement.

## Simplified EU Declaration of Conformity (Annex VI)

> Hereby, web-vision GmbH declares that the product with digital elements
> type FGTCLB: HIS Connector is in compliance with Regulation (EU) 2024/2847.
>
> The full text of the EU declaration of conformity is available at the
> following internet address:
> https://security.fgtclb.com/conformity/fgtclb/his-connector/1.0.0/en/

The full declarations are also included in this repository:
[English](EU-Declaration-of-Conformity.md) ·
[Deutsch](EU-Konformitaetserklaerung.md).
