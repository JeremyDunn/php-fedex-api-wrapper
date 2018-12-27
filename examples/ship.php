<?php
/**
 * This test will send the same test data as in FedEx's documentation:
 * /php/RateAvailableServices/RateAvailableServices.php5
 */

//remember to copy example.credentials.php as credentials.php replace 'FEDEX_KEY', 'FEDEX_PASSWORD', 'FEDEX_ACCOUNT_NUMBER', and 'FEDEX_METER_NUMBER'
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
    ->setMajor(21)
    ->setIntermediate(0)
    ->setMinor(0)
    ->setServiceId('ship');

$shipperAddress = new ComplexType\Address();
$shipperAddress
    ->setStreetLines(['Address Line 1'])
    ->setCity('Austin')
    ->setStateOrProvinceCode('TX')
    ->setPostalCode('73301')
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
    ->setStreetLines(['Address Line 1'])
    ->setCity('Herndon')
    ->setStateOrProvinceCode('VA')
    ->setPostalCode('20171')
    ->setCountryCode('US');

$recipientContact = new ComplexType\Contact();
$recipientContact
    ->setPersonName('Contact Name')
    ->setPhoneNumber('1234567890');

$recipient = new ComplexType\Party();
$recipient
    ->setAddress($recipientAddress)
    ->setContact($recipientContact);

$labelSpecification = new ComplexType\LabelSpecification();
$labelSpecification
    ->setLabelStockType(new SimpleType\LabelStockType(SimpleType\LabelStockType::_PAPER_7X4POINT75))
    ->setImageType(new SimpleType\ShippingDocumentImageType(SimpleType\ShippingDocumentImageType::_PDF))
    ->setLabelFormatType(new SimpleType\LabelFormatType(SimpleType\LabelFormatType::_COMMON2D));

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

$requestedShipment = new ComplexType\RequestedShipment();
$requestedShipment->setShipTimestamp(date('c'));
$requestedShipment->setDropoffType(new SimpleType\DropoffType(SimpleType\DropoffType::_REGULAR_PICKUP));
$requestedShipment->setServiceType(new SimpleType\ServiceType(SimpleType\ServiceType::_FEDEX_GROUND));
$requestedShipment->setPackagingType(new SimpleType\PackagingType(SimpleType\PackagingType::_YOUR_PACKAGING));
$requestedShipment->setShipper($shipper);
$requestedShipment->setRecipient($recipient);
$requestedShipment->setLabelSpecification($labelSpecification);
$requestedShipment->setRateRequestTypes(array(new SimpleType\RateRequestType(SimpleType\RateRequestType::_PREFERRED)));
$requestedShipment->setPackageCount(1);
$requestedShipment->setRequestedPackageLineItems([
    $packageLineItem1
]);
$requestedShipment->setShippingChargesPayment($shippingChargesPayment);

$processShipmentRequest = new ComplexType\ProcessShipmentRequest();
$processShipmentRequest->setWebAuthenticationDetail($webAuthenticationDetail);
$processShipmentRequest->setClientDetail($clientDetail);
$processShipmentRequest->setVersion($version);
$processShipmentRequest->setRequestedShipment($requestedShipment);

$shipService = new ShipService\Request();
//$shipService->getSoapClient()->__setLocation('https://ws.fedex.com:443/web-services/ship');
$result = $shipService->getProcessShipmentReply($processShipmentRequest);

var_dump($result);
// Save .pdf label
// file_put_contents('/path/to/label.pdf', $result->CompletedShipmentDetail->CompletedPackageDetails[0]->Label->Parts[0]->Image);
var_dump($result->CompletedShipmentDetail->CompletedPackageDetails[0]->Label->Parts[0]->Image);
