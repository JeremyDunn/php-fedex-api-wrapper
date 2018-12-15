<?php

require_once 'credentials.php';
require_once 'bootstrap.php';

use FedEx\AddressValidationService\Request;
use FedEx\AddressValidationService\ComplexType;
use FedEx\AddressValidationService\SimpleType;

$addressValidationRequest = new ComplexType\AddressValidationRequest();

// User Credentials
$addressValidationRequest->WebAuthenticationDetail->UserCredential->Key = FEDEX_KEY;
$addressValidationRequest->WebAuthenticationDetail->UserCredential->Password = FEDEX_PASSWORD;

// Client Detail
$addressValidationRequest->ClientDetail->AccountNumber = FEDEX_ACCOUNT_NUMBER;
$addressValidationRequest->ClientDetail->MeterNumber = FEDEX_METER_NUMBER;

// Version
$addressValidationRequest->Version->ServiceId = 'aval';
$addressValidationRequest->Version->Major = 4;
$addressValidationRequest->Version->Intermediate = 0;
$addressValidationRequest->Version->Minor = 0;

// Address(es) to validate.
$addressValidationRequest->AddressesToValidate = [new ComplexType\AddressToValidate()]; // just validating 1 address in this example.
$addressValidationRequest->AddressesToValidate[0]->Address->StreetLines = ['12345 Main Street'];
$addressValidationRequest->AddressesToValidate[0]->Address->City = 'Anytown';
$addressValidationRequest->AddressesToValidate[0]->Address->StateOrProvinceCode = 'NY';
$addressValidationRequest->AddressesToValidate[0]->Address->PostalCode = 47711;
$addressValidationRequest->AddressesToValidate[0]->Address->CountryCode = 'US';

$request = new Request();
$addressValidationReply = $request->getAddressValidationReply($addressValidationRequest);

var_dump($addressValidationReply);
