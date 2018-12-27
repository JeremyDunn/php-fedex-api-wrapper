<?php
//remember to copy example.credentials.php as credentials.php replace 'FEDEX_KEY', 'FEDEX_PASSWORD', 'FEDEX_ACCOUNT_NUMBER', and 'FEDEX_METER_NUMBER'
require_once 'credentials.php';
require_once 'bootstrap.php';

use FedEx\CountryService\Request;
use FedEx\CountryService\ComplexType;
use FedEx\CountryService\SimpleType;

$validatePostalRequest = new ComplexType\ValidatePostalRequest();

// Authentication and client details.
$validatePostalRequest->WebAuthenticationDetail->UserCredential->Key = FEDEX_KEY;
$validatePostalRequest->WebAuthenticationDetail->UserCredential->Password = FEDEX_PASSWORD;
$validatePostalRequest->ClientDetail->AccountNumber = FEDEX_ACCOUNT_NUMBER;
$validatePostalRequest->ClientDetail->MeterNumber = FEDEX_METER_NUMBER;

// Version.
$validatePostalRequest->Version->ServiceId = 'cnty';
$validatePostalRequest->Version->Major = 8;
$validatePostalRequest->Version->Intermediate = 0;
$validatePostalRequest->Version->Minor = 0;

// Address.
$validatePostalRequest->Address->PostalCode = 96813;
$validatePostalRequest->Address->CountryCode = 'US';

$validatePostalRequest->CarrierCode = SimpleType\CarrierCodeType::_FDXE;

// Get Validate Postal reply.
$countryServiceRequest = new Request();
$validatePostalReply = $countryServiceRequest->getValidatePostalReply($validatePostalRequest);

echo '<h1>Postal Detail</h1>';
echo "<h2>Country Code: {$validatePostalReply->PostalDetail->CountryCode}</h2>";
echo "<h2>State or Province Code: {$validatePostalReply->PostalDetail->StateOrProvinceCode}</h2>";
echo "<h2>City First Initials: {$validatePostalReply->PostalDetail->CityFirstInitials}</h2>";
echo "<h2>Cleaned Postal Code: {$validatePostalReply->PostalDetail->CleanedPostalCode}</h2>";
echo '<h2> Location Descriptions: </h2>';
if (!empty($validatePostalReply->PostalDetail->LocationDescriptions)) {
    foreach ($validatePostalReply->PostalDetail->LocationDescriptions as $locationDescription) {
        var_dump($locationDescription->toArray());
    }
}
