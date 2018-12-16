<?php
/**
 * This test will send the same test data as in FedEx's documentation:
 * /php/RateAvailableServices/RateAvailableServices.php5
 */

//remember to copy example.credentials.php as credentials.php replace 'FEDEX_KEY', 'FEDEX_PASSWORD', 'FEDEX_ACCOUNT_NUMBER', and 'FEDEX_METER_NUMBER'
require_once 'credentials.php';
require_once 'bootstrap.php';

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
$rateRequest->Version->Major = 24;
$rateRequest->Version->Minor = 0;
$rateRequest->Version->Intermediate = 0;

$rateRequest->ReturnTransitAndCommit = true;

//shipper
$rateRequest->RequestedShipment->PreferredCurrency = 'USD';
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

//rate request types
$rateRequest->RequestedShipment->RateRequestTypes = [SimpleType\RateRequestType::_PREFERRED, SimpleType\RateRequestType::_LIST];

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
//$rateServiceRequest->getSoapClient()->__setLocation(Request::PRODUCTION_URL); //use production URL

$rateReply = $rateServiceRequest->getGetRatesReply($rateRequest); // send true as the 2nd argument to return the SoapClient's stdClass response.


if (!empty($rateReply->RateReplyDetails)) {
    foreach ($rateReply->RateReplyDetails as $rateReplyDetail) {
        var_dump($rateReplyDetail->ServiceType);
        if (!empty($rateReplyDetail->RatedShipmentDetails)) {
            foreach ($rateReplyDetail->RatedShipmentDetails as $ratedShipmentDetail) {
                var_dump($ratedShipmentDetail->ShipmentRateDetail->RateType . ": " . $ratedShipmentDetail->ShipmentRateDetail->TotalNetCharge->Amount);
            }
        }
        echo "<hr />";
    }
}

var_dump($rateReply);
