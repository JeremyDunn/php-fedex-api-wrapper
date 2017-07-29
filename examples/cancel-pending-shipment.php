<?php

require_once 'credentials.php';
require_once 'bootstrap.php';

use FedEx\ShipService\Request;
use FedEx\ShipService\ComplexType;
use FedEx\ShipService\SimpleType;

$trackingNumber = '12345';

$cancelPendingShipmentRequest = new ComplexType\CancelPendingShipmentRequest();
$cancelPendingShipmentRequest->WebAuthenticationDetail->UserCredential->Key = FEDEX_KEY;
$cancelPendingShipmentRequest->WebAuthenticationDetail->UserCredential->Password = FEDEX_PASSWORD;
$cancelPendingShipmentRequest->ClientDetail->AccountNumber = FEDEX_ACCOUNT_NUMBER;
$cancelPendingShipmentRequest->ClientDetail->MeterNumber = FEDEX_METER_NUMBER;
$cancelPendingShipmentRequest->Version->ServiceId = 'ship';
$cancelPendingShipmentRequest->Version->Major = 12;
$cancelPendingShipmentRequest->Version->Intermediate = 1;
$cancelPendingShipmentRequest->Version->Minor = 0;
$cancelPendingShipmentRequest->TrackingId->TrackingNumber = $trackingNumber;


$shipServiceRequest = new Request();
$cancelPendingShipmentReply = $shipServiceRequest->getCancelPendingShipmentReply($cancelPendingShipmentRequest);

var_dump($cancelPendingShipmentReply);
