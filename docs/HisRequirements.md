# HIS Requirements

## SOAP Webservices

The following SOAP Webservices are used by HIS Connector and need to be enabled in the
HIS instance:

* AccountService
* AddressService
* FacilityService
* KeyvalueService
* MimedataService
* OrgUnitService
* PersonAddressService
* PersonOrgunitService
* PersonService

## Permissions

A separate service user should be created which will be used to access the mentioned
webservices. This user needs to be provided to the HIS Connector via the extension
configuration.

It is recommended to create a separate role for this user in HIS to limit its permissions:

* cs.psv.facility.room.VIEW_ROOM
* cs.psv.orgtree.VIEW_ORGUNIT_TREE
* cs.psv.orgunit.VIEW_ORGUNIT
* cs.psv.person.LIST_PERSON
* cs.psv.person.SEARCH_PERSON
* cs.psv.person.VIEW_ADDRESSES
* cs.psv.person.VIEW_PERSON_ACCOUNT
* cs.psv.person.VIEW_PERSON_ATTRIBUTE
* cs.psv.person.VIEW_PERSON_CONTACTDATA
* cs.psv.person.VIEW_PERSON_CONTACTDATA_BUSINESS
* cs.psv.person.VIEW_PERSON_EMPLOYEEDATA
* cs.psv.person.VIEW_PERSON_FUNCTIONS
* cs.psv.person.VIEW_PERSON_IDENTIFIER
* cs.psv.person.VIEW_PERSON_MAINDATA
* cs.psv.person.VIEW_PERSON_MAINDATA_BUSINESS
* cs.psv.person.VIEW_PERSON_PICTURE
* cs.psv.person.VIEW_PERSON_RIGHTSROLES
* cs.sys.core.VIEW_KEYTABLE
* cs.sys.ws.USE

The role should also be limited to webservice access, it should not be possible to login
to the web interface with the service user.
