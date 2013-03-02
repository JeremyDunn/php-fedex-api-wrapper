<?php

require_once 'credentials.php';
require_once 'bootstrap.php';

use FedEx\ShipService,
    FedEx\ShipService\ComplexType,
    FedEx\ShipService\SimpleType;

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
    ->setMajor(10)
    ->setIntermediate(0)
    ->setMinor(0);

$trackingId = new ComplexType\TrackingId();
$trackingId
    ->setTrackingNumber('12345')
    ->setTrackingIdType(SimpleType\TrackingIdType::_FEDEX);

$cancelPendingShipmentRequest = new ComplexType\CancelPendingShipmentRequest();
$cancelPendingShipmentRequest->setWebAuthenticationDetail($webAuthenticationDetail);
$cancelPendingShipmentRequest->setClientDetail($clientDetail);
$cancelPendingShipmentRequest->setVersion($version);
$cancelPendingShipmentRequest->setTrackingId($trackingId);

var_dump($cancelPendingShipmentRequest->toArray());



$validateShipmentRequest = new ShipService\Request();
$validateShipmentRequest->getSoapClient()->__setLocation('https://ws.fedex.com:443/web-services/ship');
$response = $validateShipmentRequest->getCancelPendingShipmentReply($cancelPendingShipmentRequest);

var_dump($response);
