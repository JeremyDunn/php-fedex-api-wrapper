<?php
/**
 * This test will send the same test data as in FedEx's documentation:
 * /php/RateAvailableServices/RateAvailableServices.php5
 */

//remember to update credentials.php or replace 'FEDEX_KEY', 'FEDEX_PASSWORD', 'FEDEX_ACCOUNT_NUMBER', and 'FEDEX_METER_NUMBER'
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
    ->setMajor(10)
    ->setIntermediate(0)
    ->setMinor(0)
    ->setServiceId('ship');

$shipperAddress = new ComplexType\Address();
$shipperAddress
    ->setStreetLines(array(
        '12345 Main Street',
        'STE 810'
    ))
    ->setCity('Anytown')
    ->setStateOrProvinceCode('NY')
    ->setPostalCode('12345')
    ->setCountryCode('US');

$shipperContact = new ComplexType\Contact();
$shipperContact
    ->setCompanyName('Company Name')
    ->setEMailAddress('test@example.com')
    ->setPersonName('Person Name')
    ->setPhoneNumber(('123-123-1234'));

$shipper = new ComplexType\Party();
$shipper
    ->setAccountNumber(FEDEX_ACCOUNT_NUMBER)
    ->setAddress($shipperAddress)
    ->setContact($shipperContact);

$recipientAddress = new ComplexType\Address();
$recipientAddress
    ->setStreetLines(array('54312 1st Ave'))
    ->setCity('Anytown')
    ->setStateOrProvinceCode('NY')
    ->setPostalCode('12345')
    ->setCountryCode('US');

$recipientContact = new ComplexType\Contact();
$recipientContact
    ->setPersonName('Contact Name');

$recipient = new ComplexType\Party();
$recipient
    ->setAddress($recipientAddress)
    ->setContact($recipientContact);

$labelSpecification = new ComplexType\LabelSpecification();
$labelSpecification
    ->setLabelStockType(new SimpleType\LabelStockType(SimpleType\LabelStockType::_PAPER_7X4point75))
    ->setImageType(new SimpleType\ShippingDocumentImageType(SimpleType\ShippingDocumentImageType::_PDF))
    ->setLabelFormatType(new SimpleType\LabelFormatType(SimpleType\LabelFormatType::_COMMON2D));


$requestedShipment = new ComplexType\RequestedShipment();
$requestedShipment->setShipTimestamp(date('c'));
$requestedShipment->setDropoffType(new SimpleType\DropoffType(SimpleType\DropoffType::_REGULAR_PICKUP));
$requestedShipment->setServiceType(new SimpleType\ServiceType(SimpleType\ServiceType::_FEDEX_GROUND));
$requestedShipment->setPackagingType(new SimpleType\PackagingType(SimpleType\PackagingType::_YOUR_PACKAGING));
$requestedShipment->setShipper($shipper);
$requestedShipment->setRecipient($recipient);
$requestedShipment->setLabelSpecification($labelSpecification);
$requestedShipment->setRateRequestTypes(array(new SimpleType\RateRequestType(SimpleType\RateRequestType::_ACCOUNT)));
$requestedShipment->setPackageCount(1);




$createPendingShipmentRequest = new ComplexType\CreatePendingShipmentRequest();
$createPendingShipmentRequest->setWebAuthenticationDetail($webAuthenticationDetail);
$createPendingShipmentRequest->setClientDetail($clientDetail);
$createPendingShipmentRequest->setVersion($version);
$createPendingShipmentRequest->setRequestedShipment($requestedShipment);




$shipService = new ShipService\Request();
$shipService->getSoapClient()->__setLocation('https://ws.fedex.com:443/web-services/ship');
$result = $shipService->getCreatePendingShipmentReply($createPendingShipmentRequest);

var_dump($result);