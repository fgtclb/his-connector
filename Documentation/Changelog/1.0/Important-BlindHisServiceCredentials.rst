..  include:: /Includes.rst.txt

..  _important-blind-his-service-credentials:

=============================================================
Important: HIS service credentials are blinded in the backend
=============================================================

Description
===========

The HIS SOAP service URL, username and password configured in the extension
configuration (:php:`$GLOBALS['TYPO3_CONF_VARS']['EXTENSIONS']['his_connector']['soap']`)
are no longer displayed in clear text in the :guilabel:`System > Configuration`
backend module provided by the TYPO3 system extension ``typo3/cms-lowlevel``.

The options ``urlPrefix``, ``username`` and ``password`` are displayed as
``******`` instead, like TYPO3 does for the database connection credentials.
The ``timeout`` option is not security sensitive and stays visible.

Impact
======

The HIS service credentials can no longer be read by backend administrators
through the configuration module. System maintainers can still view and change
them in the extension configuration of the :guilabel:`Settings` module.
