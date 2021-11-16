<?php

require_once 'credentials.php';
require_once 'bootstrap.php';

use FedEx\ShipService;
use FedEx\ShipService\ComplexType;
use FedEx\ShipService\SimpleType;

$userCredential = new ComplexType\WebAuthenticationCredential();
$userCredential
    ->setKey(FEDEX_KEY)
    ->setPassword(FEDEX_PASSWORD);

$webAuthenticationDetail = new ComplexType\WebAuthenticationDetail();
$webAuthenticationDetail->setUserCredential($userCredential);

$clientDetail = new ComplexType\ClientDetail();
$clientDetail
    ->setAccountNumber(FEDEX_ACCOUNT_NUMBER)
    ->setMeterNumber(FEDEX_METER_NUMBER);

$version = new ComplexType\VersionId();
$version
    ->setServiceId('ship')
    ->setMajor(28)
    ->setIntermediate(0)
    ->setMinor(0);

$trackingId = new ComplexType\TrackingId();
$trackingId
    ->setTrackingNumber('12345')
    ->setTrackingIdType(SimpleType\TrackingIdType::_FEDEX);


$deleteShipmentRequest = new ComplexType\DeleteShipmentRequest();
$deleteShipmentRequest->setWebAuthenticationDetail($webAuthenticationDetail);
$deleteShipmentRequest->setClientDetail($clientDetail);
$deleteShipmentRequest->setVersion($version);
$deleteShipmentRequest->setTrackingId($trackingId);
$deleteShipmentRequest->setDeletionControl(SimpleType\DeletionControlType::_DELETE_ALL_PACKAGES);

$request = new ShipService\Request();
try {
    $deleteShipmentReply = $request->getDeleteShipmentReply($deleteShipmentRequest);
    var_dump($deleteShipmentReply);
} catch (\Exception $e) {
    echo $e->getMessage();
    echo $request->getSoapClient()->__getLastResponse();
}
