<?php
/**
 * This test will send the same test data as in FedEx's documentation:
 * /php/RateAvailableServices/RateAvailableServices.php5
 */

//remember to update credentials.php or replace 'FEDEX_KEY', 'FEDEX_PASSWORD', 'FEDEX_ACCOUNT_NUMBER', and 'FEDEX_METER_NUMBER'
require_once 'credentials.php';
require_once 'bootstrap.php';

use     FedEx\RateService,
        FedEx\RateService\ComplexType,
        FedEx\RateService\SimpleType;

$rateRequest = new ComplexType\RateRequest();

//WebAuthenticationDetail
$userCredential = new ComplexType\WebAuthenticationCredential();
$userCredential
    ->setKey(FEDEX_KEY)
    ->setPassword(FEDEX_PASSWORD);

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
$transactionDetail->setCustomerTransactionId(' *** Rate Available Services Request v10 using PHP ***');

$rateRequest->setTransactionDetail($transactionDetail);


//Version
$version = new ComplexType\VersionId();
$version
    ->setServiceId('crs')
    ->setMajor(10)
    ->setIntermediate(0)
    ->setMinor(0);

$rateRequest->setVersion($version);

//ReturnTransitAndCommit
$rateRequest->setReturnTransitAndCommit(true);

//RequestedShipment
$requestedShipment = new ComplexType\RequestedShipment();

//RequestedShipment/DropoffType
$requestedShipment->setDropoffType(SimpleType\DropoffType::_REGULAR_PICKUP);

//RequestedShipment/Shiptimestamp
$requestedShipment->setShipTimestamp(date('c'));

//RequestedShipment/Shipper
$shipperAddress = new ComplexType\Address();
$shipperAddress
    ->setStreetLines(array('10 Fed Ex Pkwy'))
    ->setCity('Memphis')
    ->setStateOrProvinceCode('TN')
    ->setPostalCode(38115)
    ->setCountryCode('US');

$shipper = new ComplexType\Party();
$shipper->setAddress($shipperAddress);

$requestedShipment->setShipper($shipper);

//RequestedShipment/Recipient
$recipientAddress = new ComplexType\Address();
$recipientAddress
    ->setStreetLines(array('13450 Farmcrest Ct'))
    ->setCity('Herndon')
    ->setStateOrProvinceCode('VA')
    ->setPostalCode(20171)
    ->setCountryCode('US');

$recipient = new ComplexType\Party();
$recipient->setAddress($recipientAddress);

$requestedShipment->setRecipient($recipient);

//RequestedShipment/ShippingChargesPayment

$shippingChargesPayment = new ComplexType\Payment();
$shippingChargesPayment->setPaymentType(new SimpleType\PaymentType(SimpleType\PaymentType::_SENDER));

$payor = new ComplexType\Payor();
$payor->setAccountNumber(FEDEX_ACCOUNT_NUMBER);
$payor->setCountryCode('US');

$shippingChargesPayment->setPayor($payor);

$requestedShipment->setShippingChargesPayment($shippingChargesPayment);

//RequestedShipment\RateRequestTypes
$requestedShipment->setRateRequestTypes(array(
    new SimpleType\RateRequestType(SimpleType\RateRequestType::_ACCOUNT),
    new SimpleType\RateRequestType(SimpleType\RateRequestType::_LIST)
));

//RequestedShipment\PackageCount
$requestedShipment->setPackageCount(2);

//RequestedShipment\RequestedPackageLineItems
$lineItems = array();

$item1Weight = new ComplexType\Weight();
$item1Weight
    ->setUnits(new SimpleType\WeightUnits(SimpleType\WeightUnits::_LB))
    ->setValue(2.0);

$item1Dimensions = new ComplexType\Dimensions();
$item1Dimensions
    ->setLength(10)
    ->setWidth(10)
    ->setHeight(3)
    ->setUnits(new SimpleType\LinearUnits(SimpleType\LinearUnits::_IN));

$item1 = new ComplexType\RequestedPackageLineItem();
$item1->setWeight($item1Weight);
$item1->setDimensions($item1Dimensions);
$item1->setGroupPackageCount(1);

$item2Weight = new ComplexType\Weight();
$item2Weight
    ->setUnits(new SimpleType\WeightUnits(SimpleType\WeightUnits::_LB))
    ->setValue(5.0);

$item2Dimensions = new ComplexType\Dimensions();
$item2Dimensions
    ->setLength(20)
    ->setWidth(20)
    ->setHeight(10)
    ->setUnits(new SimpleType\LinearUnits(SimpleType\LinearUnits::_IN));

$item2 = new ComplexType\RequestedPackageLineItem();
$item2->setWeight($item2Weight);
$item2->setDimensions($item2Dimensions);
$item2->setGroupPackageCount(1);

$lineItems[] = $item1;
$lineItems[] = $item2;
$requestedShipment->setRequestedPackageLineItems($lineItems);

$rateRequest->setRequestedShipment($requestedShipment);

var_dump($rateRequest->toArray());

echo "<hr />";

$validateShipmentRequest = new RateService\Request();



//$request->getSoapClient()->__setLocation('https://ws.fedex.com:443/web-services/rate');



var_dump($validateShipmentRequest->getGetRatesReply($rateRequest));

var_dump($validateShipmentRequest->getSoapClient()->__getLastRequest());
var_dump($validateShipmentRequest->getSoapClient()->__getLastRequestHeaders());

var_dump($validateShipmentRequest->getSoapClient()->__getFunctions());