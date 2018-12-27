# PHP FedEx API Wrapper

[![Latest Stable Version](https://poser.pugx.org/jeremy-dunn/php-fedex-api-wrapper/v/stable)](https://packagist.org/packages/jeremy-dunn/php-fedex-api-wrapper)
[![Total Downloads](https://poser.pugx.org/jeremy-dunn/php-fedex-api-wrapper/downloads)](https://packagist.org/packages/jeremy-dunn/php-fedex-api-wrapper)
[![Build Status](https://travis-ci.org/JeremyDunn/php-fedex-api-wrapper.svg?branch=master)](https://travis-ci.org/JeremyDunn/php-fedex-api-wrapper)
[![Codacy Badge](https://api.codacy.com/project/badge/Grade/ee5bdc605dfd44d0a590ea1dfc031421)](https://www.codacy.com/app/JeremyDunn/php-fedex-api-wrapper?utm_source=github.com&utm_medium=referral&utm_content=JeremyDunn/php-fedex-api-wrapper&utm_campaign=badger)

This library provides a fluid interface for constructing requests to the FedEx web service API.

## General Information

All of the code under the `FedEx` namespace is generated using the [generate-classes-from-wsdls.php](util/generate-classes-from-wsdls.php) script.
Each web service has it's own class namespace. See the official FedEx web service API documentation for a description of these services.

* [Address Validation Service](src/FedEx/AddressValidationService)
* [Close Service](src/FedEx/CloseService)
* [Courier Dispatch Service](src/FedEx/CourierDispatchService)
* [Locations Service](src/FedEx/LocationsService)
* [Package Movement Information Service](src/FedEx/PackageMovementInformationService)
* [Pickup Service](src/FedEx/PickupService)
* [Rate Service](src/FedEx/RateService)
* [Return Tag Service](src/FedEx/ReturnTagService)
* [Ship Service](src/FedEx/ShipService)
* [Track Service](src/FedEx/TrackService)
* [Upload Document Service](src/FedEx/UploadDocumentService)
* [Open Ship Service](src/FedEx/OpenShipService)
* [Validation Availability and Commitment Service](src/FedEx/ValidationAvailabilityAndCommitmentService)
* [ASYNC Transaction Service](src/FedEx/AsyncService)
* [In Flight Shipment Service](src/FedEx/InFlightShipmentService)
* [DGLD Service](src/FedEx/DGLDService)
* [DGDS Service](src/FedEx/DGDSService)

## Installation

```
composer require jeremy-dunn/php-fedex-api-wrapper
```

## Using the library

The easiest way to get started constructing a web service request is to create an new `Request` object for the particular service you wish to use and then work backward by injecting the objects necessary to complete the request. 

For example if we wish to get shipping rates, we'll create a new instance of [FedEx\RateService\Request](src/FedEx/RateService/Request.php) and call the [getGetRatesReply()](src/FedEx/RateService/Request.php#L61) method. This method requires an instance of [FedEx\RateService\ComplexType\RateRequest](src/FedEx/RateService/ComplexType/RateRequest.php) which itself requires instances of [FedEx\RateService\ComplexType\RequestedShipment](src/FedEx/RateService/ComplexType/RequestedShipment.php), [FedEx\RateService\ComplexType\TransactionDetail](src/FedEx/RateService/ComplexType/TransactionDetail.php), [FedEx\RateService\ComplexType\WebAuthenticationDetail](src/FedEx/RateService/ComplexType/WebAuthenticationDetail.php), [FedEx\RateService\ComplexType\ClientDetail](src/FedEx/RateService/ComplexType/ClientDetail.php), and so on. See below for an example.

## Rate Service request example

This assumes the `FEDEX_KEY`, `FEDEX_PASSWORD`, `FEDEX_ACCOUNT_NUMBER`, and `FEDEX_METER_NUMBER` are previously defined in your application.
Also note that by default, the library will use the beta/testing server (wsbeta.fedex.com). To use the production server (ws.fedex.com), set the location on the `\SoapClient` returned from the Request. See below for an example of how to do this. 

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

$rateReply = $rateServiceRequest->getGetRatesReply($rateRequest); // send true as the 2nd argument to return the SoapClient's stdClass response.

if (!empty($rateReply->RateReplyDetails)) {
    foreach ($rateReply->RateReplyDetails as $rateReplyDetail) {
        var_dump($rateReplyDetail->ServiceType);
        var_dump($rateReplyDetail->DeliveryTimestamp);
        if (!empty($rateReplyDetail->RatedShipmentDetails)) {
            foreach ($rateReplyDetail->RatedShipmentDetails as $ratedShipmentDetail) {
                var_dump($ratedShipmentDetail->ShipmentRateDetail->RateType . ": " . $ratedShipmentDetail->ShipmentRateDetail->TotalNetCharge->Amount);
            }
        }
        echo "<hr />";
    }
}

var_dump($rateReply);

```

More examples can be found in the [examples](examples) folder.

## [Change Log](CHANGELOG.md)


