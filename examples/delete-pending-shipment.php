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
    ->setMajor(12)
    ->setIntermediate(1)
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


$validateShipmentRequest = new ShipService\Request();
$validateShipmentRequest->getSoapClient()->__setLocation('https://ws.fedex.com:443/web-services/ship');
$response = $validateShipmentRequest->getDeleteShipmentReply($deleteShipmentRequest);

var_dump($response);