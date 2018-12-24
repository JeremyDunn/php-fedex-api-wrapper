<?php
//remember to copy example.credentials.php as credentials.php replace 'FEDEX_KEY', 'FEDEX_PASSWORD', 'FEDEX_ACCOUNT_NUMBER', and 'FEDEX_METER_NUMBER'
require_once 'credentials.php';
require_once 'bootstrap.php';

use FedEx\PickupService\Request;
use FedEx\PickupService\ComplexType;
use FedEx\PickupService\SimpleType;

$createPickupRequest = new ComplexType\CreatePickupRequest();

// Authentication & client details.
$createPickupRequest->WebAuthenticationDetail->UserCredential->Key = FEDEX_KEY;
$createPickupRequest->WebAuthenticationDetail->UserCredential->Password = FEDEX_PASSWORD;
$createPickupRequest->ClientDetail->AccountNumber = FEDEX_ACCOUNT_NUMBER;
$createPickupRequest->ClientDetail->MeterNumber = FEDEX_METER_NUMBER;

// Version.
$createPickupRequest->Version->ServiceId = 'disp';
$createPickupRequest->Version->Major = 17;
$createPickupRequest->Version->Intermediate = 0;
$createPickupRequest->Version->Minor = 0;

$createPickupRequest->TransactionDetail->CustomerTransactionId = 'create pickup request example';
$createPickupRequest->TransactionDetail->Localization->LanguageCode = 'EN';
$createPickupRequest->TransactionDetail->Localization->LocaleCode = 'ES';

// Associated account number.
$createPickupRequest->AssociatedAccountNumber->Type = SimpleType\AssociatedAccountNumberType::_FEDEX_EXPRESS;
$createPickupRequest->AssociatedAccountNumber->AccountNumber = FEDEX_ACCOUNT_NUMBER;

// Origin detail contact.
$createPickupRequest->OriginDetail->PickupLocation->Contact->ContactId = 'KR1059';
$createPickupRequest->OriginDetail->PickupLocation->Contact->PersonName = 'INPUT YOUR INFORMATION';
$createPickupRequest->OriginDetail->PickupLocation->Contact->Title = 'Mr.';
$createPickupRequest->OriginDetail->PickupLocation->Contact->CompanyName = 'DEOYAROHIT0905$';
$createPickupRequest->OriginDetail->PickupLocation->Contact->PhoneNumber = 'INPUT YOUR INFORMATION';
$createPickupRequest->OriginDetail->PickupLocation->Contact->PhoneExtension = 'INPUT YOUR INFORMATION';
$createPickupRequest->OriginDetail->PickupLocation->Contact->PagerNumber = '9962308621';
$createPickupRequest->OriginDetail->PickupLocation->Contact->FaxNumber = '9962308621';
$createPickupRequest->OriginDetail->PickupLocation->Contact->EMailAddress = 'kaustubha_ramdasi@syntelinc.com';

// Origin detail address.
$createPickupRequest->OriginDetail->PickupLocation->Address->StreetLines = ['INPUT YOUR INFORMATION'];
$createPickupRequest->OriginDetail->PickupLocation->Address->City = 'Memphis';
$createPickupRequest->OriginDetail->PickupLocation->Address->StateOrProvinceCode = 'TN';
$createPickupRequest->OriginDetail->PickupLocation->Address->PostalCode = '38125';
$createPickupRequest->OriginDetail->PickupLocation->Address->CountryCode = 'US';

$createPickupRequest->OriginDetail->PackageLocation = SimpleType\PickupBuildingLocationType::_FRONT;
$createPickupRequest->OriginDetail->BuildingPart = SimpleType\BuildingPartCode::_DEPARTMENT;
$createPickupRequest->OriginDetail->BuildingPartDescription = 'Building part description';
$createPickupRequest->OriginDetail->ReadyTimestamp = date('c');
$createPickupRequest->OriginDetail->CompanyCloseTime = '19:00:00';
$createPickupRequest->OriginDetail->Location = 'NQAA';
$createPickupRequest->OriginDetail->SuppliesRequested = 'supplies requested';

$createPickupRequest->PackageCount = 1;
$createPickupRequest->TotalWeight->Units = SimpleType\WeightUnits::_LB;
$createPickupRequest->TotalWeight->Value = 50;

$createPickupRequest->CarrierCode = SimpleType\CarrierCodeType::_FDXE;
$createPickupRequest->OversizePackageCount = 0;
$createPickupRequest->Remarks = 'remarks';
$createPickupRequest->CommodityDescription = 'test environment - please do not process pickup';
$createPickupRequest->CountryRelationship = SimpleType\CountryRelationshipType::_DOMESTIC;


$request = new Request();
try {
    $createPickupReply = $request->getCreatePickupReply($createPickupRequest);
    var_dump($createPickupReply);
} catch (\Exception $e) {
    echo $request->getSoapClient()->__getLastResponse();
}
