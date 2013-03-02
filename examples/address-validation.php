<?php
/**
 * This test will send the same test data as in FedEx's documentation:
 * /php/RateAvailableServices/RateAvailableServices.php5
 */

//remember to update credentials.php or replace 'FEDEX_KEY', 'FEDEX_PASSWORD', 'FEDEX_ACCOUNT_NUMBER', and 'FEDEX_METER_NUMBER'
require_once 'credentials.php';
require_once 'bootstrap.php';

use FedEx\AddressValidationService,
    FedEx\AddressValidationService\ComplexType,
    FedEx\AddressValidationService\SimpleType;


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
    ->setMajor(2)
    ->setIntermediate(0)
    ->setMinor(0)
    ->setServiceId('aval');

$options = new ComplexType\AddressValidationOptions();
$options
    ->setCheckResidentialStatus(true)
    ->setVerifyAddresses(true)
    ->setConvertToUpperCase(true)
    ->setDirectionalAccuracy(SimpleType\AddressValidationAccuracyType::_MEDIUM);

$addresses = array();

$address1 = new ComplexType\Address();
$address1
    ->setStreetLines(array('12345 Main Street'))
    ->setCity('Anytown')
    ->setStateOrProvinceCode('NY')
    ->setPostalCode('47711')
    ->setCountryCode('US');

$addressToValidate1 = new ComplexType\AddressToValidate();
$addressToValidate1
    ->setAddress($address1)
    ->setAddressId(1);

$addresses[] = $addressToValidate1;

$addressValidationRequest = new ComplexType\AddressValidationRequest();
$addressValidationRequest->setWebAuthenticationDetail($webAuthenticationDetail);
$addressValidationRequest->setClientDetail($clientDetail);
$addressValidationRequest->setVersion($version);
$addressValidationRequest->setRequestTimestamp(date('c'));
$addressValidationRequest->setOptions($options);
$addressValidationRequest->setAddressesToValidate($addresses);


$validateShipmentRequest = new AddressValidationService\Request();
$validateShipmentRequest->getSoapClient()->__setLocation('https://gateway.fedex.com:443/web-services');
$result = $validateShipmentRequest->getAddressValidationReply($addressValidationRequest);

var_dump($result);