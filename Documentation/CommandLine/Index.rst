..  include:: /Includes.rst.txt

..  _command-line:

============
Command line
============

Synchronizations are run with the console command ``hisconnector:sync``. The
command reads a synchronization configuration file, fetches the configured
data from HIS and writes it into the mapped TYPO3 tables.

..  tabs::

    ..  group-tab:: Composer mode

        ..  code-block:: bash

            vendor/bin/typo3 hisconnector:sync \
                EXT:his_connector/Configuration/HisConnector/academic_persons.yaml

    ..  group-tab:: Classic mode

        ..  code-block:: bash

            typo3/sysext/core/bin/typo3 hisconnector:sync \
                EXT:his_connector/Configuration/HisConnector/academic_persons.yaml

The command can also be executed regularly with the scheduler task
:guilabel:`Execute console commands` provided by the TYPO3 system extension
``typo3/cms-scheduler``.

..  contents::
    :local:
    :depth: 1

..  _command-line-synopsis:

Synopsis
========

..  code-block:: text

    hisconnector:sync [options] [--] <config>

..  _command-line-arguments:

Arguments
=========

..  confval:: config
    :name: hisconnector-sync-config
    :type: string
    :required: true

    Synchronization configuration file to process.

    ..  important::

        The configuration file has to be passed using the extension syntax
        ``EXT:<extension_key>/Configuration/HisConnector/<file>.yaml``, for
        example:

        ..  code-block:: text

            EXT:his_connector/Configuration/HisConnector/academic_persons.yaml

        Absolute or relative file system paths are not accepted.

    Only :file:`*.yaml` files located directly in the folder
    :file:`Configuration/HisConnector/` of an active extension are
    available. Configuration files of project specific synchronizations are
    therefore placed in that folder of a site package or another custom
    extension.

    The command stops with the message
    ``Specified configuration file does not exist.`` if the passed value does
    not address such a file. A file which cannot be parsed or does not contain
    a valid configuration is reported with
    ``Specified configuration file is invalid:`` followed by the reason.

..  _command-line-options:

Options
=======

..  confval:: --offset
    :name: hisconnector-sync-offset
    :type: integer
    :default: 0

    Zero-based index of the first record to synchronize from the list of
    records fetched from HIS.

..  confval:: --limit
    :name: hisconnector-sync-limit
    :type: integer
    :default: all records

    Maximum number of records to synchronize, starting at
    :confval:`--offset <hisconnector-sync-offset>`.

    Together with :confval:`--offset <hisconnector-sync-offset>` a large
    synchronization can be split into several smaller runs:

    ..  code-block:: bash

        vendor/bin/typo3 hisconnector:sync --offset=0 --limit=100 \
            EXT:his_connector/Configuration/HisConnector/academic_persons.yaml
        vendor/bin/typo3 hisconnector:sync --offset=100 --limit=100 \
            EXT:his_connector/Configuration/HisConnector/academic_persons.yaml

    If the configured data source returns a single record instead of a list,
    this record is only synchronized with an offset of ``0`` and a limit
    greater than ``0``.

..  confval:: --storagePage
    :name: hisconnector-sync-storagepage
    :type: integer

    Uid of the page the synchronized records are stored on. Overrides the
    ``storagePage`` setting of the configuration file.

    A storage page is mandatory. It has to be set either in the configuration
    file or with this option, otherwise every record is reported with the
    error ``Storage page not specified in sync configuration.``

..  confval:: --fileStorageFolder
    :name: hisconnector-sync-filestoragefolder
    :type: string

    Folder the synchronized files are stored in, given as combined identifier
    of storage uid and folder path, for example ``1:/user_upload/his_connector/``.
    Overrides the ``fileStorageFolder`` setting of the configuration file.

    A file storage folder is only required if the mapping contains fields
    with files, for example person pictures.

..  _command-line-example:

Example
=======

The example configuration
:file:`EXT:his_connector/Configuration/HisConnector/academic_persons.yaml`
neither defines a storage page nor a file storage folder, both have to be
passed as options:

..  code-block:: bash

    vendor/bin/typo3 hisconnector:sync \
        --storagePage=42 \
        --fileStorageFolder=1:/user_upload/his_connector/ \
        EXT:his_connector/Configuration/HisConnector/academic_persons.yaml

..  _command-line-output:

Output and exit code
====================

The command prints one line per record fetched from HIS, containing the
entity class, the HIS identifier and the number of synchronized TYPO3
records, followed by a summary:

..  code-block:: text

    Processing 2 of total 2 records...

    FGTCLB\HisClientFacade\Model\Person:person-1 (3 record(s) synchronized)
    FGTCLB\HisClientFacade\Model\Person:person-2 (2 record(s) synchronized)

    Processed: 2

An error while fetching the details of a record from HIS or while
synchronizing it is printed for that record and the command continues with
the next one. The summary then reports the number of records with errors.

..  note::

    The command only returns a non-zero exit code if the configuration file
    does not exist or is invalid. Errors of single records are reported in
    the output, but do not change the exit code.
