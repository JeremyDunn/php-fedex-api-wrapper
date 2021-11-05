<?php
//remember to copy example.credentials.php as credentials.php replace 'FEDEX_KEY', 'FEDEX_PASSWORD', 'FEDEX_ACCOUNT_NUMBER', and 'FEDEX_METER_NUMBER'
require_once 'credentials.php';
require_once 'bootstrap.php';

use FedEx\ValidationAvailabilityAndCommitmentService\Request;
use FedEx\ValidationAvailabilityAndCommitmentService\ComplexType;
use FedEx\ValidationAvailabilityAndCommitmentService\SimpleType;

$shipDate = new \DateTime();

$serviceAvailabilityRequest = new ComplexType\ServiceAvailabilityRequest();
//web authentication detail
$serviceAvailabilityRequest->WebAuthenticationDetail->UserCredential->Key = FEDEX_KEY;
$serviceAvailabilityRequest->WebAuthenticationDetail->UserCredential->Password = FEDEX_PASSWORD;
//client detail
$serviceAvailabilityRequest->ClientDetail->AccountNumber = FEDEX_ACCOUNT_NUMBER;
$serviceAvailabilityRequest->ClientDetail->MeterNumber = FEDEX_METER_NUMBER;
//version
$serviceAvailabilityRequest->Version->ServiceId = 'vacs';
$serviceAvailabilityRequest->Version->Major = 17;
$serviceAvailabilityRequest->Version->Intermediate = 0;
$serviceAvailabilityRequest->Version->Minor = 0;
//origin
$serviceAvailabilityRequest->Origin->PostalCode = '38115';
$serviceAvailabilityRequest->Origin->CountryCode = 'US';
//destination
$serviceAvailabilityRequest->Destination->PostalCode = '20171';
$serviceAvailabilityRequest->Destination->CountryCode = 'US';
//ship date
$serviceAvailabilityRequest->ShipDate = $shipDate->format('Y-m-d');

$request = new Request();

try {
    $serviceAvailabilityReply = $request->getServiceAvailabilityReply($serviceAvailabilityRequest);
    var_dump($serviceAvailabilityReply);
} catch (\Exception $e) {
    echo $e->getMessage();
    var_dump($request->getSoapClient()->__getLastResponse());
}
