<?php
/**
 * This is the same example as presented in example1.php, but shortened by passing all data through the constructor as an array.
 *
 */

//remember to update credentials.php or replace 'FEDEX_KEY', 'FEDEX_PASSWORD', 'FEDEX_ACCOUNT_NUMBER', and 'FEDEX_METER_NUMBER'
require_once 'credentials.php';
require_once 'bootstrap.php';

use     FedEx\RateService,
        FedEx\RateService\ComplexType,
        FedEx\RateService\SimpleType;

$rateRequest = new ComplexType\RateRequest();

//WebAuthenticationDetail
$rateRequest->setWebAuthenticationDetail(new ComplexType\WebAuthenticationDetail(array(
    'UserCredential' => new ComplexType\WebAuthenticationCredential(array(
        'Key' => FEDEX_KEY,
        'Password' => FEDEX_PASSWORD
    ))
)));

//ClientDetail
$rateRequest->setClientDetail(new ComplexType\ClientDetail(array(
    'AccountNumber' => FEDEX_ACCOUNT_NUMBER,
    'MeterNumber' => FEDEX_METER_NUMBER
)));

//TransactionDetail
$rateRequest->setTransactionDetail(new ComplexType\TransactionDetail(array(
    'CustomerTransactionId' => ' *** Rate Available Services Request v8 using PHP ***'
)));

//Version
$rateRequest->setVersion(new ComplexType\VersionId(array(
    'ServiceId' => 'crs',
    'Major' => 10,
    'Intermediate' => 0,
    'Minor' => 0
)));

//ReturnTransitAndCommit
$rateRequest->setReturnTransitAndCommit(true);

//RequestedShipment
$rateRequest->setRequestedShipment(new ComplexType\RequestedShipment(array(
    'DropoffType' => new SimpleType\DropoffType(SimpleType\DropoffType::_REGULAR_PICKUP),
    'ShipTimestamp' => date('c'),
    'Shipper' => new ComplexType\Party(array(
        'Address' => new ComplexType\Address(array(
            'StreetLines' => array('10 Fed Ex Pkwy'),
            'City' => 'Memphis',
            'StateOrProvinceCode' => 'TN',
            'PostalCode' => 38115,
            'CountryCode' => 'US'
        ))
    )),
    'Recipient' => new ComplexType\Party(array(
        'Address' => new ComplexType\Address(array(
            'StreetLines' => array('13450 Farmcrest Ct'),
            'City' => 'Herndon',
            'StateOrProvinceCode' => 'VA',
            'PostalCode' => 20171,
            'CountryCode' => 'US'
        ))
    )),
    'ShippingChargesPayment' => new ComplexType\Payment(array(
        'PaymentType' => new SimpleType\PaymentType(SimpleType\PaymentType::_SENDER),
        'Payor' => new ComplexType\Payor(array(
            'AccountNumber' => FEDEX_ACCOUNT_NUMBER,
            'CountryCode' => 'US'
        ))
    )),
    'RateRequestTypes' => array(
        new SimpleType\RateRequestType(SimpleType\RateRequestType::_ACCOUNT),
        new SimpleType\RateRequestType(SimpleType\RateRequestType::_LIST)
    ),
    'PackageCount' => 2,
    'PackageDetail' => new SimpleType\RequestedPackageDetailType(SimpleType\RequestedPackageDetailType::_INDIVIDUAL_PACKAGES),
    'RequestedPackageLineItems' => array(
        new ComplexType\RequestedPackageLineItem(array(
            'Weight' => new ComplexType\Weight(array(
                'Units' => new SimpleType\WeightUnits(SimpleType\WeightUnits::_LB),
                'Value' => 2.0
            )),
            'Dimensions' => new ComplexType\Dimensions(array(
                'Length' => 10,
                'Width' => 10,
                'Height' => 3,
                'Units' => new SimpleType\LinearUnits(SimpleType\LinearUnits::_IN)
            )),
            'GroupPackageCount' => 1
        )),
        new ComplexType\RequestedPackageLineItem(array(
            'Weight' => new ComplexType\Weight(array(
                'Units' => new SimpleType\WeightUnits(SimpleType\WeightUnits::_LB),
                'Value' => 2
            )),
            'Dimensions' => new ComplexType\Dimensions(array(
                'Length' => 20,
                'Width' => 20,
                'Height' => 10,
                'Units' => new SimpleType\LinearUnits(SimpleType\LinearUnits::_IN)
            )),
            'GroupPackageCount' => 1
        ))
    )
)));


var_dump($rateRequest->toArray());
echo "<hr />";

$validateShipmentRequest = new RateService\Request();
var_dump($validateShipmentRequest->getGetRatesReply($rateRequest));
