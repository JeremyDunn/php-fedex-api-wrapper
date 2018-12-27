<?php
//remember to copy example.credentials.php as credentials.php replace 'FEDEX_KEY', 'FEDEX_PASSWORD', 'FEDEX_ACCOUNT_NUMBER', and 'FEDEX_METER_NUMBER'
require_once 'credentials.php';
require_once 'bootstrap.php';

use FedEx\DGLDService\Request;
use FedEx\DGLDService\ComplexType;
use FedEx\DGLDService\SimpleType;

$listDangerousGoodsRequest = new ComplexType\ListDangerousGoodsRequest();

// Authentication & client details.
$listDangerousGoodsRequest->WebAuthenticationDetail->UserCredential->Key = FEDEX_KEY;
$listDangerousGoodsRequest->WebAuthenticationDetail->UserCredential->Password = FEDEX_PASSWORD;
$listDangerousGoodsRequest->ClientDetail->AccountNumber = FEDEX_ACCOUNT_NUMBER;
$listDangerousGoodsRequest->ClientDetail->MeterNumber = FEDEX_METER_NUMBER;

$listDangerousGoodsRequest->TransactionDetail->CustomerTransactionId = 'list dangerous goods request example';

// Version.
$listDangerousGoodsRequest->Version->ServiceId = 'dgds';
$listDangerousGoodsRequest->Version->Major = 1;
$listDangerousGoodsRequest->Version->Intermediate = 0;
$listDangerousGoodsRequest->Version->Minor = 0;

// Origin.
$listDangerousGoodsRequest->Origin->StreetLines = ['INPUT YOUR INFORMATION'];
$listDangerousGoodsRequest->Origin->City = 'Memphis';
$listDangerousGoodsRequest->Origin->StateOrProvinceCode = '381167510';
$listDangerousGoodsRequest->Origin->PostalCode = 80903;
$listDangerousGoodsRequest->Origin->CountryCode = 'US';

// Destination.
$listDangerousGoodsRequest->Destination->StreetLines = ['INPUT YOUR INFORMATION'];
$listDangerousGoodsRequest->Destination->City = 'Colorado Springs';
$listDangerousGoodsRequest->Destination->StateOrProvinceCode = 'CO';
$listDangerousGoodsRequest->Destination->PostalCode = 80903;
$listDangerousGoodsRequest->Destination->CountryCode = 'US';

// Service details.
$listDangerousGoodsRequest->CarrierCode = SimpleType\CarrierCodeType::_FDXE;
$listDangerousGoodsRequest->ServiceType = SimpleType\ServiceType::_PRIORITY_OVERNIGHT;
$listDangerousGoodsRequest->ShipDate = (new DateTime())->format('Y-m-d');
$listDangerousGoodsRequest->TrackingNumber = 'INPUT YOUR INFORMATION';


$request = new Request();

try {
    $listDangerousGoodsReply = $request->getListDangerousGoodsReply($listDangerousGoodsRequest);
    var_dump($listDangerousGoodsReply);
} catch (\Exception $e) {
    echo $request->getSoapClient()->__getLastResponse();
}
