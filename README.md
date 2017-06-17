# PHP FedEx API Wrapper

[![Codacy Badge](https://api.codacy.com/project/badge/Grade/ee5bdc605dfd44d0a590ea1dfc031421)](https://www.codacy.com/app/JeremyDunn/php-fedex-api-wrapper?utm_source=github.com&utm_medium=referral&utm_content=JeremyDunn/php-fedex-api-wrapper&utm_campaign=badger)
[![Build Status](https://travis-ci.org/JeremyDunn/php-fedex-api-wrapper.svg?branch=master)](https://travis-ci.org/JeremyDunn/php-fedex-api-wrapper)

This library provides a fluid interface for constructing requests to the FedEx web service API.

## General Information

All of the code under the `FedEx` namespace is generated using the [generate-classes-from-wsdls.php](util/generate-classes-from-wsdls.php) script.
Each web service has it's own class namespace. See the official FedEx web service API documentation for a description of these services.

* [Address Validation Service](src/FedEx/AddressValidationService)
* [Close Service](src/FedEx/CloseService)
* [Courier Dispatch Service](src/FedEx/CourierDispatchService)
* [Locator Service](src/FedEx/LocatorService)
* [Package Movement Information Service](src/FedEx/PackageMovementInformationService)
* [Pickup Service](src/FedEx/PickupService)
* [Rate Service](src/FedEx/RateService)
* [Return Tag Service](src/FedEx/ReturnTagService)
* [Ship Service](src/FedEx/ShipService)
* [Track Service](src/FedEx/TrackService)
* [Upload Document Service](src/FedEx/UploadDocumentService)

## Using the library

The easiest way to get started constructing a web service request is to create an new `Request` object for the particular service you wish to use and then work backward by injecting the objects necessary to complete the request. 

For example if we wish to get shipping rates, we'll create a new instance of [FedEx\RateService\Request](src/FedEx/RateService/Request.php) and call the [getGetRatesReply()](src/FedEx/RateService/Request.php#L61) method. This method requires an instance of [FedEx\RateService\ComplexType\RateRequest](src/FedEx/RateService/ComplexType/RateRequest.php) which itself requires instances of [FedEx\RateService\ComplexType\RequestedShipment](src/FedEx/RateService/ComplexType/RequestedShipment.php), [FedEx\RateService\ComplexType\TransactionDetail](src/FedEx/RateService/ComplexType/TransactionDetail.php), [FedEx\RateService\ComplexType\WebAuthenticationDetail](src/FedEx/RateService/ComplexType/WebAuthenticationDetail.php), [FedEx\RateService\ComplexType\ClientDetail](src/FedEx/RateService/ComplexType/ClientDetail.php), and so on. See below for an example.

## Rate Service request example

This assumes the `FEDEX_KEY`, `FEDEX_PASSWORD`, `FEDEX_ACCOUNT_NUMBER`, and `FEDEX_METER_NUMBER` are previously defined in your application.
Also note that by default, the library will use the beta/testing server (wsbeta.fedex.com). To use the production server (ws.fedex.com), set the location on the `\SoapClient` returned from the Request. See below for an example of how to do this. 
```php
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
$rateServiceRequest->getSoapClient()->__setLocation(RateService\Request::PRODUCTION_URL); //use the production web service
$response = $rateServiceRequest->getGetRatesReply($rateRequest);

var_dump($response);

```

## Shorter syntax example

This is the same request as above using a shorter class property syntax.

```php
use FedEx\RateService\Request;
use FedEx\RateService\ComplexType;
use FedEx\RateService\SimpleType;

$rateRequest = new ComplexType\RateRequest();

//authentication & client details
$rateRequest->WebAuthenticationDetail->UserCredential->Key = FEDEX_KEY;
$rateRequest->WebAuthenticationDetail->UserCredential->Password = FEDEX_PASSWORD;
$rateRequest->ClientDetail->AccountNumber = FEDEX_ACCOUNT_NUMBER;
$rateRequest->ClientDetail->MeterNumber = FEDEX_METER_NUMBER;

$rateRequest->TransactionDetail->CustomerTransactionId = 'testing rate service request';

//version
$rateRequest->Version->ServiceId = 'crs';
$rateRequest->Version->Major = 10;
$rateRequest->Version->Minor = 0;
$rateRequest->Version->Intermediate = 0;

$rateRequest->ReturnTransitAndCommit = true;

//shipper
$rateRequest->RequestedShipment->Shipper->Address->StreetLines = ['10 Fed Ex Pkwy'];
$rateRequest->RequestedShipment->Shipper->Address->City = 'Memphis';
$rateRequest->RequestedShipment->Shipper->Address->StateOrProvinceCode = 'TN';
$rateRequest->RequestedShipment->Shipper->Address->PostalCode = 38115;
$rateRequest->RequestedShipment->Shipper->Address->CountryCode = 'US';

//recipient
$rateRequest->RequestedShipment->Recipient->Address->StreetLines = ['13450 Farmcrest Ct'];
$rateRequest->RequestedShipment->Recipient->Address->City = 'Herndon';
$rateRequest->RequestedShipment->Recipient->Address->StateOrProvinceCode = 'VA';
$rateRequest->RequestedShipment->Recipient->Address->PostalCode = 20171;
$rateRequest->RequestedShipment->Recipient->Address->CountryCode = 'US';

//shipping charges payment
$rateRequest->RequestedShipment->ShippingChargesPayment->PaymentType = SimpleType\PaymentType::_SENDER;
$rateRequest->RequestedShipment->ShippingChargesPayment->Payor->AccountNumber = FEDEX_ACCOUNT_NUMBER;
$rateRequest->RequestedShipment->ShippingChargesPayment->Payor->CountryCode = 'US';

//rate request types
$rateRequest->RequestedShipment->RateRequestTypes = [SimpleType\RateRequestType::_ACCOUNT, SimpleType\RateRequestType::_LIST];

$rateRequest->RequestedShipment->PackageCount = 2;

//create package line items
$rateRequest->RequestedShipment->RequestedPackageLineItems = [new ComplexType\RequestedPackageLineItem(), new ComplexType\RequestedPackageLineItem()];

//package 1
$rateRequest->RequestedShipment->RequestedPackageLineItems[0]->Weight->Value = 2;
$rateRequest->RequestedShipment->RequestedPackageLineItems[0]->Weight->Units = SimpleType\WeightUnits::_LB;
$rateRequest->RequestedShipment->RequestedPackageLineItems[0]->Dimensions->Length = 10;
$rateRequest->RequestedShipment->RequestedPackageLineItems[0]->Dimensions->Width = 10;
$rateRequest->RequestedShipment->RequestedPackageLineItems[0]->Dimensions->Height = 3;
$rateRequest->RequestedShipment->RequestedPackageLineItems[0]->Dimensions->Units = SimpleType\LinearUnits::_IN;
$rateRequest->RequestedShipment->RequestedPackageLineItems[0]->GroupPackageCount = 1;

//package 2
$rateRequest->RequestedShipment->RequestedPackageLineItems[1]->Weight->Value = 5;
$rateRequest->RequestedShipment->RequestedPackageLineItems[1]->Weight->Units = SimpleType\WeightUnits::_LB;
$rateRequest->RequestedShipment->RequestedPackageLineItems[1]->Dimensions->Length = 20;
$rateRequest->RequestedShipment->RequestedPackageLineItems[1]->Dimensions->Width = 20;
$rateRequest->RequestedShipment->RequestedPackageLineItems[1]->Dimensions->Height = 10;
$rateRequest->RequestedShipment->RequestedPackageLineItems[1]->Dimensions->Units = SimpleType\LinearUnits::_IN;
$rateRequest->RequestedShipment->RequestedPackageLineItems[1]->GroupPackageCount = 1;

$rateServiceRequest = new Request();
$rateServiceRequest->getSoapClient()->__setLocation(Request::PRODUCTION_URL); //use production URL
$response = $rateServiceRequest->getGetRatesReply($rateRequest);

var_dump($response);

```

More examples can be found in the [examples](examples) folder.


