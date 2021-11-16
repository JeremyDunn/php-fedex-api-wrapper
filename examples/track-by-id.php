<?php
//remember to copy example.credentials.php as credentials.php replace 'FEDEX_KEY', 'FEDEX_PASSWORD', 'FEDEX_ACCOUNT_NUMBER', and 'FEDEX_METER_NUMBER'
require_once 'credentials.php';
require_once 'bootstrap.php';

use FedEx\TrackService\Request;
use FedEx\TrackService\ComplexType;
use FedEx\TrackService\SimpleType;

$trackingId1 = 123456789012;
$trackingId2 = 123456789012;

$trackRequest = new ComplexType\TrackRequest();

// User Credential
$trackRequest->WebAuthenticationDetail->UserCredential->Key = FEDEX_KEY;
$trackRequest->WebAuthenticationDetail->UserCredential->Password = FEDEX_PASSWORD;

// Client Detail
$trackRequest->ClientDetail->AccountNumber = FEDEX_ACCOUNT_NUMBER;
$trackRequest->ClientDetail->MeterNumber = FEDEX_METER_NUMBER;

// Version
$trackRequest->Version->ServiceId = 'trck';
$trackRequest->Version->Major = 20;
$trackRequest->Version->Intermediate = 0;
$trackRequest->Version->Minor = 0;

// Track 2 shipments
$trackRequest->SelectionDetails = [new ComplexType\TrackSelectionDetail(), new ComplexType\TrackSelectionDetail()];

// For get all events
$trackRequest->ProcessingOptions = [SimpleType\TrackRequestProcessingOptionType::_INCLUDE_DETAILED_SCANS];

// Track shipment 1
$trackRequest->SelectionDetails[0]->PackageIdentifier->Value = $trackingId1;
$trackRequest->SelectionDetails[0]->PackageIdentifier->Type = SimpleType\TrackIdentifierType::_TRACKING_NUMBER_OR_DOORTAG;

// Track shipment 2
$trackRequest->SelectionDetails[1]->PackageIdentifier->Value = $trackingId2;
$trackRequest->SelectionDetails[1]->PackageIdentifier->Type = SimpleType\TrackIdentifierType::_TRACKING_NUMBER_OR_DOORTAG;

$request = new Request();
try {
    $trackReply = $request->getTrackReply($trackRequest);
    var_dump($trackReply);
} catch (\Exception $e) {
    echo $e->getMessage();
    echo $request->getSoapClient()->__getLastResponse();
}
