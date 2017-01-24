# PHP FedEx API Wrapper

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
$rateServiceRequest->getSoapClient()->__setLocation('https://ws.fedex.com:443/web-services/rate'); //use the production web service
$response = $rateServiceRequest->getGetRatesReply($rateRequest);

var_dump($response);

```

More examples can be found in the [examples](examples) folder.


