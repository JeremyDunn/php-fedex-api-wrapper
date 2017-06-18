<?php

require_once 'credentials.php';
require_once 'bootstrap.php';

use FedEx\RateService;
use FedEx\RateService\ComplexType;
use FedEx\RateService\SimpleType;

//RateRequest
$rateRequest = new ComplexType\RateRequest();

//UserCredential
$userCredential = new ComplexType\WebAuthenticationCredential();
$userCredential
    ->setKey(FEDEX_KEY)
    ->setPassword(FEDEX_PASSWORD);

//WebAuthenticationDetail
$webAuthenticationDetail = new ComplexType\WebAuthenticationDetail();
$webAuthenticationDetail->setUserCredential($userCredential);

$rateRequest->setWebAuthenticationDetail($webAuthenticationDetail);

//ClientDetail
$clientDetail = new ComplexType\ClientDetail();
$clientDetail
    ->setAccountNumber(FEDEX_ACCOUNT_NUMBER)
    ->setMeterNumber(FEDEX_METER_NUMBER);

$rateRequest->setClientDetail($clientDetail);

//TransactionDetail
$transactionDetail = new ComplexType\TransactionDetail();
$transactionDetail->setCustomerTransactionId('Testing Rate Service request');

$rateRequest->setTransactionDetail($transactionDetail);

//VersionId
$versionId = new ComplexType\VersionId();
$versionId
    ->setServiceId('crs')
    ->setMajor(10)
    ->setIntermediate(0)
    ->setMinor(0);

$rateRequest->setVersion($versionId);

//OPTIONAL ReturnTransitAndCommit
$rateRequest->setReturnTransitAndCommit(true);

//RequestedShipment
$requestedShipment = new ComplexType\RequestedShipment();
$requestedShipment->setDropoffType(SimpleType\DropoffType::_REGULAR_PICKUP);
$requestedShipment->setShipTimestamp(date('c'));

$rateRequest->setRequestedShipment($requestedShipment);

//RequestedShipment/Shipper
$shipper = new ComplexType\Party();

$shipperAddress = new ComplexType\Address();
$shipperAddress
    ->setStreetLines(array('10 Fed Ex Pkwy'))
    ->setCity('Memphis')
    ->setStateOrProvinceCode('TN')
    ->setPostalCode(38115)
    ->setCountryCode('US');

$shipper->setAddress($shipperAddress);

$requestedShipment->setShipper($shipper);

//RequestedShipment/Recipient
$recipient = new ComplexType\Party();

$recipientAddress = new ComplexType\Address();
$recipientAddress
    ->setStreetLines(array('13450 Farmcrest Ct'))
    ->setCity('Herndon')
    ->setStateOrProvinceCode('VA')
    ->setPostalCode(20171)
    ->setCountryCode('US');

$recipient->setAddress($recipientAddress);

$requestedShipment->setRecipient($recipient);

//RequestedShipment/ShippingChargesPayment
$shippingChargesPayment = new ComplexType\Payment();
$shippingChargesPayment->setPaymentType(SimpleType\PaymentType::_SENDER);

$payor = new ComplexType\Payor();
$payor
    ->setAccountNumber(FEDEX_ACCOUNT_NUMBER)
    ->setCountryCode('US');

$shippingChargesPayment->setPayor($payor);

$requestedShipment->setShippingChargesPayment($shippingChargesPayment);

//RequestedShipment/RateRequestType(s)
$requestedShipment->setRateRequestTypes([
    SimpleType\RateRequestType::_LIST,
    SimpleType\RateRequestType::_ACCOUNT
]);

//RequestedShipment/PackageCount
$requestedShipment->setPackageCount(2);

//RequestedShipment/RequestedPackageLineItem(s)
$item1Weight = new ComplexType\Weight();
$item1Weight
    ->setUnits(SimpleType\WeightUnits::_LB)
    ->setValue(2.0);

$item1Dimensions = new ComplexType\Dimensions();
$item1Dimensions
    ->setLength(10)
    ->setWidth(10)
    ->setHeight(3)
    ->setUnits(SimpleType\LinearUnits::_IN);

$item1 = new ComplexType\RequestedPackageLineItem();
$item1
    ->setWeight($item1Weight)
    ->setDimensions($item1Dimensions)
    ->setGroupPackageCount(1);

$item2Weight = new ComplexType\Weight();
$item2Weight
    ->setUnits(SimpleType\WeightUnits::_LB)
    ->setValue(5.0);

$item2Dimensions = new ComplexType\Dimensions();
$item2Dimensions
    ->setLength(20)
    ->setWidth(20)
    ->setHeight(10)
    ->setUnits(SimpleType\LinearUnits::_IN);

$item2 = new ComplexType\RequestedPackageLineItem();
$item2
    ->setWeight($item2Weight)
    ->setDimensions($item2Dimensions)
    ->setGroupPackageCount(1);

$requestedShipment->setRequestedPackageLineItems([$item1, $item2]);

$rateRequest->setRequestedShipment($requestedShipment);

$rateServiceRequest = new RateService\Request();
//$rateServiceRequest->getSoapClient()->__setLocation('https://ws.fedex.com:443/web-services/rate'); //use the production web service
$response = $rateServiceRequest->getGetRatesReply($rateRequest);

var_dump($response);
