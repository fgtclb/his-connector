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

## Releasing

Releases are created with [`Build/Scripts/release.sh`](Build/Scripts/release.sh),
which applies the version with [`Build/Scripts/setVersion.sh`](Build/Scripts/setVersion.sh),
merges the release pull request and pushes the tag triggering the publish
workflow. See [`docs/Releasing.md`](docs/Releasing.md) for the release process.

## Bundled libraries (TER release)

Composer mode installations resolve third-party dependencies with composer.
Classic mode installations from the TYPO3 Extension Repository (TER) cannot,
so the TER artefact ships them:

* [`contrib/composer.json`](contrib/composer.json) and the committed
  `contrib/composer.lock` define the bundled libraries. They are installed into
  the git-ignored `contrib/Libraries/` directory.
* The [publish workflow](.github/workflows/publish.yml) runs
  `composer install -d contrib` before `tailor create-artefact`, which packs
  `contrib/Libraries/` into the TER artefact.
* TYPO3 v14.3 and newer include `contrib/Libraries/autoload.php` in classic
  mode, because `extra.typo3/cms.Package.providesPackages` in `composer.json`
  declares the bundled packages and points to `contrib/Libraries`.
  `ext_emconf.php` is not evaluated then.
* TYPO3 v13 uses the `autoload` section in [`ext_emconf.php`](ext_emconf.php),
  which replaces the `composer.json` autoload section in classic mode and
  registers the bundled libraries. As fallback, for example for a git checkout
  in `typo3conf/ext/`, [`ext_localconf.php`](ext_localconf.php) requires
  `contrib/Libraries/autoload.php` if
  `WsdlToPhp\PackageBase\AbstractSoapClientBase` cannot be loaded.

| Package                 | Version | Bundled |
|-------------------------|---------|---------|
| `wsdltophp/packagebase` | 5.0.5   | yes     |

`wsdltophp/packagebase` requires the PHP extensions `soap`, `dom` and `json`,
but no further composer packages.

Rules for the bundled libraries:

* Require a bundled library with the **exact** version in
  `contrib/composer.json` and with the same version on patch level (`~`) in
  the root `composer.json`, so classic mode and composer mode installations
  use the same version. `composer validate --strict` rejects exact versions
  in the root `composer.json`.
* Transient dependencies shipped by the TYPO3 system extensions of a classic
  mode installation (for example `psr/log`) are **not** bundled. Add them to
  the `replace` section of `contrib/composer.json` (`"psr/log": "*"`) by hand,
  `composer config` does not support that section, and update the lock file
  with `composer update -d contrib --lock`.
* All other transient dependencies are bundled: require them in the root
  `composer.json` and in `contrib/composer.json` following the version rule
  above.
* Add the PSR-4 namespaces of every bundled package to the `autoload` section
  in `ext_emconf.php` and keep the `class_exists()` guard in
  `ext_localconf.php` pointing to a class of a bundled package.

Update a bundled library with composer, for example through the
`runTests.sh` wrapper:

```bash
PACKAGE_VERSION='5.0.5' ; \
  Build/Scripts/runTests.sh -s composer -- \
    require --no-update "wsdltophp/packagebase:~${PACKAGE_VERSION}" && \
  Build/Scripts/runTests.sh -s composer -- \
    require -d contrib "wsdltophp/packagebase:${PACKAGE_VERSION}"
```

Adjust the version in the table above and commit `composer.json`,
`contrib/composer.json` and `contrib/composer.lock` together.

Before tagging a release, verify the TER artefact contains the bundled
libraries:

```bash
composer install -d contrib --no-dev
tailor create-artefact <version>
unzip -l tailor-version-artefact/his_connector_<version>.zip | grep contrib/Libraries
```

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
