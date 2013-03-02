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

$shipTimestamp = new DateTime();

$shipperAddress = new ComplexType\Address();
$shipperAddress
    ->setStreetLines(array(
        '1234 Main Street',
        'STE 810'
    ))
    ->setCity('Anytown')
    ->setStateOrProvinceCode('NY')
    ->setPostalCode('12345')
    ->setCountryCode('US');

$shipperContact = new ComplexType\Contact();
$shipperContact
    ->setCompanyName('Company name')
    ->setPersonName('Person Name')
    ->setEMailAddress('info@example.com')
    ->setPhoneNumber('1-123-123-1234');

$shipper = new ComplexType\Party();
$shipper
    ->setAccountNumber(FEDEX_ACCOUNT_NUMBER)
    ->setAddress($shipperAddress)
    ->setContact($shipperContact);

$recipientContact = new ComplexType\Contact();
$recipientContact
    ->setPersonName('John Doe')
    ->setEMailAddress('test@example.com');

$recipientAddress = new ComplexType\Address();
$recipientAddress
    ->setStreetLines(array('54321 1st Ave'))
    ->setCity('Anytown')
    ->setStateOrProvinceCode('NY')
    ->setPostalCode('12345')
    ->setCountryCode('US');

$recipient = new ComplexType\Party();
$recipient
    ->setContact($recipientContact)
    ->setAddress($recipientAddress);

$labelSpecification = new ComplexType\LabelSpecification();
$labelSpecification
    ->setImageType(SimpleType\ShippingDocumentImageType::_PDF)
    ->setLabelFormatType(SimpleType\LabelFormatType::_COMMON2D)
    ->setLabelStockType(SimpleType\LabelStockType::_PAPER_4X6);

$packageLineItem1 = new ComplexType\RequestedPackageLineItem();
$packageLineItem1
    ->setSequenceNumber(1)
    ->setItemDescription('Product description')
    ->setDimensions(new ComplexType\Dimensions(array(
        'Width' => 10,
        'Height' => 10,
        'Length' => 25,
        'Units' => SimpleType\LinearUnits::_IN
    )))
    ->setWeight(new ComplexType\Weight(array(
        'Value' => 2,
        'Units' => SimpleType\WeightUnits::_LB
    )));

$shippingChargesPayor = new ComplexType\Payor();
$shippingChargesPayor->setResponsibleParty($shipper);


$shippingChargesPayment = new ComplexType\Payment();
$shippingChargesPayment
    ->setPaymentType(SimpleType\PaymentType::_SENDER)
    ->setPayor($shippingChargesPayor);

$pendingShipmentDetail = new ComplexType\PendingShipmentDetail();
$pendingShipmentDetail
    ->setType(SimpleType\PendingShipmentType::_EMAIL)
    ->setExpirationDate('2012-11-01')
    ->setEmailLabelDetail(new ComplexType\EMailLabelDetail(array(
        'NotificationEMailAddress' => 'test',
        'NotificationMessage' => 'pending shipment notification message'
    )));


$specialServicesRequested = new ComplexType\ShipmentSpecialServicesRequested();
$specialServicesRequested
    ->setSpecialServiceTypes(array(SimpleType\ShipmentSpecialServiceType::_PENDING_SHIPMENT))
    ->setPendingShipmentDetail($pendingShipmentDetail);

$requestedShipment = new ComplexType\RequestedShipment();
$requestedShipment
    ->setDropoffType(SimpleType\DropoffType::_REGULAR_PICKUP)
    ->setShipTimestamp($shipTimestamp->format(DateTime::ISO8601))
    ->setServiceType(SimpleType\ServiceType::_FEDEX_2_DAY)
    ->setPackagingType(SimpleType\PackagingType::_YOUR_PACKAGING)
    ->setShipper($shipper)
    ->setRecipient($recipient)
    ->setLabelSpecification($labelSpecification)
    ->setRateRequestTypes(array(SimpleType\RateRequestType::_ACCOUNT))
    ->setPackageCount(1)
    ->setRequestedPackageLineItems(array(
        $packageLineItem1
    ))
    ->setShippingChargesPayment($shippingChargesPayment)
    ->setSpecialServicesRequested($specialServicesRequested);




$createPendingShipmentRequest = new ComplexType\CreatePendingShipmentRequest();
$createPendingShipmentRequest->setWebAuthenticationDetail($webAuthenticationDetail);
$createPendingShipmentRequest->setClientDetail($clientDetail);
$createPendingShipmentRequest->setVersion($version);
$createPendingShipmentRequest->setRequestedShipment($requestedShipment);


var_dump($createPendingShipmentRequest->toArray());

var_export($createPendingShipmentRequest->toArray());

$validateShipmentRequest = new ShipService\Request();
$validateShipmentRequest->getSoapClient()->__setLocation('https://ws.fedex.com:443/web-services/ship');
$response = $validateShipmentRequest->getCreatePendingShipmentReply($createPendingShipmentRequest);

var_dump($response);