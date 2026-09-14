..  include:: /Includes.rst.txt

..  _important-bundled-libraries-for-classic-mode:

====================================================
Important: Third-party libraries bundled for the TER
====================================================

Description
===========

The extension requires the composer package ``wsdltophp/packagebase``.
Classic mode installations cannot install composer packages, therefore the
extension package released to the TYPO3 Extension Repository (TER) ships the
library in :file:`contrib/Libraries/` and registers it for class loading.

To ensure composer mode and classic mode installations use the same library
version, the requirement in :file:`composer.json` is restricted to the patch
level releases of the bundled version ``5.0.5`` (``~5.0.5``).

Impact
======

Classic mode installations do not need to provide ``wsdltophp/packagebase``
on their own. The PHP extensions ``soap``, ``dom`` and ``json`` are still
required.

Composer mode installations resolve ``wsdltophp/packagebase`` in version
``5.0.5`` or a newer ``5.0.x`` patch release only. Projects requiring another
version of the package in their root :file:`composer.json` need to align
their requirement.
