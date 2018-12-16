<?php
//remember to copy example.credentials.php as credentials.php replace 'FEDEX_KEY', 'FEDEX_PASSWORD', 'FEDEX_ACCOUNT_NUMBER', and 'FEDEX_METER_NUMBER'
require_once 'credentials.php';
require_once 'bootstrap.php';

use FedEx\LocationsService\Request;
use FedEx\LocationsService\ComplexType;
use FedEx\LocationsService\SimpleType;

$searchLocationsRequest = new ComplexType\SearchLocationsRequest();

// Authentication & client details.
$searchLocationsRequest->WebAuthenticationDetail->UserCredential->Key = FEDEX_KEY;
$searchLocationsRequest->WebAuthenticationDetail->UserCredential->Password = FEDEX_PASSWORD;
$searchLocationsRequest->ClientDetail->AccountNumber = FEDEX_ACCOUNT_NUMBER;
$searchLocationsRequest->ClientDetail->MeterNumber = FEDEX_METER_NUMBER;

$searchLocationsRequest->TransactionDetail->CustomerTransactionId = 'test locations service request';

// Version.
$searchLocationsRequest->Version->ServiceId = 'locs';
$searchLocationsRequest->Version->Major = 9;
$searchLocationsRequest->Version->Intermediate = 0;
$searchLocationsRequest->Version->Minor = 0;

// Locations search criterion.
$searchLocationsRequest->LocationsSearchCriterion = SimpleType\LocationsSearchCriteriaType::_ADDRESS;

// Address
$searchLocationsRequest->Address->StreetLines = ['13450 Farmcrest Ct'];
$searchLocationsRequest->Address->City = 'Herndon';
$searchLocationsRequest->Address->StateOrProvinceCode = 'VA';
$searchLocationsRequest->Address->PostalCode = 20171;
$searchLocationsRequest->Address->CountryCode = 'US';

// Multiple matches action.
$searchLocationsRequest->MultipleMatchesAction = SimpleType\MultipleMatchesActionType::_RETURN_ALL;

// Get Search Locations reply.
$locationServiceRequest = new Request();
$searchLocationsReply = $locationServiceRequest->getSearchLocationsReply($searchLocationsRequest);

echo "<h1>Results Returned: {$searchLocationsReply->ResultsReturned} </h1>";
echo '<hr>';

if (empty($searchLocationsReply->AddressToLocationRelationships[0]->DistanceAndLocationDetails)) {
    return;
}

foreach ($searchLocationsReply->AddressToLocationRelationships[0]->DistanceAndLocationDetails as $distanceAndLocationDetails) {
    echo "<h2>Address (distance: {$distanceAndLocationDetails->Distance->Value} {$distanceAndLocationDetails->Distance->Units})</h2>";
    var_dump($distanceAndLocationDetails->LocationDetail->LocationContactAndAddress->Address->toArray());
    echo "<h2>Address Ancillary Details</h2>";
    var_dump($distanceAndLocationDetails->LocationDetail->LocationContactAndAddress->AddressAncillaryDetail->toArray());

    echo '<h2>Location Capabilities</h2>';
    if (!empty($distanceAndLocationDetails->LocationDetail->LocationCapabilities)) {
        foreach ($distanceAndLocationDetails->LocationDetail->LocationCapabilities as $locationCapability) {
            var_dump($locationCapability->toArray());
        }
    }

    echo '<h2>Normal Hours</h2>';
    if (!empty($distanceAndLocationDetails->LocationDetail->NormalHours)) {
        foreach ($distanceAndLocationDetails->LocationDetail->NormalHours as $locationHours) {
            var_dump($locationHours->toArray());
        }
    }

    echo '<h2>Hours For Effective Date</h2>';
    if (!empty($distanceAndLocationDetails->LocationDetail->HoursForEffectiveDate)) {
        foreach ($distanceAndLocationDetails->LocationDetail->HoursForEffectiveDate as $locationHours) {
            var_dump($locationHours->toArray());
        }
    }

    echo '<h2>Carrier Details</h2>';
    if (!empty($distanceAndLocationDetails->LocationDetail->CarrierDetails)) {
        foreach ($distanceAndLocationDetails->LocationDetail->CarrierDetails as $carrierDetail) {
            echo "<h3>{$carrierDetail->Carrier}</h3>";
            if (!empty($carrierDetail->NormalLatestDropOffDetails)) {
                foreach ($carrierDetail->NormalLatestDropOffDetails as $normalLatestDropOffDetail) {
                    var_dump($normalLatestDropOffDetail->toArray());
                }
            }
        }
    }

    echo '<hr>';
}
