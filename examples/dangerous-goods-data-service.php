<?php
//remember to copy example.credentials.php as credentials.php replace 'FEDEX_KEY', 'FEDEX_PASSWORD', 'FEDEX_ACCOUNT_NUMBER', and 'FEDEX_METER_NUMBER'
require_once 'credentials.php';
require_once 'bootstrap.php';

use FedEx\DGDSService\Request;
use FedEx\DGDSService\ComplexType;
use FedEx\DGDSService\SimpleType;

$validateDangerousGoodsRequest = new ComplexType\ValidateDangerousGoodsRequest();

// Authentication & client details.
$validateDangerousGoodsRequest->WebAuthenticationDetail->UserCredential->Key = FEDEX_KEY;
$validateDangerousGoodsRequest->WebAuthenticationDetail->UserCredential->Password = FEDEX_PASSWORD;
$validateDangerousGoodsRequest->ClientDetail->AccountNumber = FEDEX_ACCOUNT_NUMBER;
$validateDangerousGoodsRequest->ClientDetail->MeterNumber = FEDEX_METER_NUMBER;

$validateDangerousGoodsRequest->TransactionDetail->CustomerTransactionId = 'validate dangerous goods example';

// Version.
$validateDangerousGoodsRequest->Version->ServiceId = 'dgds';
$validateDangerousGoodsRequest->Version->Major = 3;
$validateDangerousGoodsRequest->Version->Intermediate = 0;
$validateDangerousGoodsRequest->Version->Minor = 0;

// Shipment details (origin).
$validateDangerousGoodsRequest->ShipmentDetail->Origin->StreetLines = ['INPUT YOUR INFORMATION'];
$validateDangerousGoodsRequest->ShipmentDetail->Origin->City = 'Memphis';
$validateDangerousGoodsRequest->ShipmentDetail->Origin->StateOrProvinceCode = 'TN';
$validateDangerousGoodsRequest->ShipmentDetail->Origin->PostalCode = '381167510';
$validateDangerousGoodsRequest->ShipmentDetail->Origin->CountryCode = 'US';
$validateDangerousGoodsRequest->ShipmentDetail->Origin->Residential = true;

// Shipment details (destination).
$validateDangerousGoodsRequest->ShipmentDetail->Destination->StreetLines = ['INPUT YOUR INFORMATION'];
$validateDangerousGoodsRequest->ShipmentDetail->Destination->City = 'Colorado Springs';
$validateDangerousGoodsRequest->ShipmentDetail->Destination->StateOrProvinceCode = 'CO';
$validateDangerousGoodsRequest->ShipmentDetail->Destination->PostalCode = '80903';
$validateDangerousGoodsRequest->ShipmentDetail->Destination->CountryCode = 'US';

// Shipment details (continued).
$validateDangerousGoodsRequest->ShipmentDetail->CarrierCode = SimpleType\CarrierCodeType::_FDXE;
$validateDangerousGoodsRequest->ShipmentDetail->ServiceType = SimpleType\ServiceType::_PRIORITY_OVERNIGHT;
$validateDangerousGoodsRequest->ShipmentDetail->ShipDate = (new DateTime())->format('Y-m-d');
$validateDangerousGoodsRequest->ShipmentDetail->Offeror = 'Gagan';
$validateDangerousGoodsRequest->ShipmentDetail->Signatory->ContactName = 'Preet';
$validateDangerousGoodsRequest->ShipmentDetail->Signatory->Title = 'Mr';
$validateDangerousGoodsRequest->ShipmentDetail->Signatory->Place = 'Memphis';

// Shipment details (infectious substance reponsibile contact).
$validateDangerousGoodsRequest->ShipmentDetail->InfectiousSubstanceResponsibleContact->ContactId = 'GD1057';
$validateDangerousGoodsRequest->ShipmentDetail->InfectiousSubstanceResponsibleContact->PersonName = 'INPUT YOUR INFORMATION';
$validateDangerousGoodsRequest->ShipmentDetail->InfectiousSubstanceResponsibleContact->Title = 'Mr.';
$validateDangerousGoodsRequest->ShipmentDetail->InfectiousSubstanceResponsibleContact->CompanyName = 'D Company';
$validateDangerousGoodsRequest->ShipmentDetail->InfectiousSubstanceResponsibleContact->PhoneNumber = 'INPUT YOUR INFORMATION';
$validateDangerousGoodsRequest->ShipmentDetail->InfectiousSubstanceResponsibleContact->PhoneExtension = '02033469';
$validateDangerousGoodsRequest->ShipmentDetail->InfectiousSubstanceResponsibleContact->PagerNumber = 'INPUT YOUR INFORMATION';
$validateDangerousGoodsRequest->ShipmentDetail->InfectiousSubstanceResponsibleContact->FaxNumber = 'INPUT YOUR INFORMATION';
$validateDangerousGoodsRequest->ShipmentDetail->InfectiousSubstanceResponsibleContact->EMailAddress = 'Dhillon@dg.com';
$validateDangerousGoodsRequest->ShipmentDetail->EmergencyContactNumber = 'INPUT YOUR INFORMATION';
$validateDangerousGoodsRequest->ShipmentDetail->AircraftCategoryType = SimpleType\DangerousGoodsAircraftCategoryType::_CARGO_AIRCRAFT_ONLY;

// Handling unit groups.
$validateDangerousGoodsRequest->HandlingUnitGroups = [new ComplexType\UploadedDangerousGoodsHandlingUnitGroup()];
$validateDangerousGoodsRequest->HandlingUnitGroups[0]->Id = 'UDDG';
$validateDangerousGoodsRequest->HandlingUnitGroups[0]->NumberOfHandlingUnits = 1;
$validateDangerousGoodsRequest->HandlingUnitGroups[0]->TrackingNumberUnits = [new ComplexType\TrackingNumberUnit()];
$validateDangerousGoodsRequest->HandlingUnitGroups[0]->TrackingNumberUnits[0]->TrackingIds = [new ComplexType\TrackingId()];
$validateDangerousGoodsRequest->HandlingUnitGroups[0]->TrackingNumberUnits[0]->TrackingIds[0]->TrackingIdType = SimpleType\TrackingIdType::_FEDEX;
$validateDangerousGoodsRequest->HandlingUnitGroups[0]->TrackingNumberUnits[0]->TrackingIds[0]->TrackingNumber = 'INPUT YOUR INFORMATION';

$validateDangerousGoodsRequest->HandlingUnitGroups[0]->HandlingUnit->Attributes = [SimpleType\DangerousGoodsHandlingUnitAttributeType::_OVERPACK];
$validateDangerousGoodsRequest->HandlingUnitGroups[0]->HandlingUnit->ContainerGroups = [new ComplexType\UploadedDangerousGoodsContainerGroup()];
$validateDangerousGoodsRequest->HandlingUnitGroups[0]->HandlingUnit->ContainerGroups[0]->Container->ContainerType = 'Aluminum Boxes';
$validateDangerousGoodsRequest->HandlingUnitGroups[0]->HandlingUnit->ContainerGroups[0]->Container->Commodities = [new ComplexType\UploadedDangerousGoodsCommodityContent()];
$validateDangerousGoodsRequest->HandlingUnitGroups[0]->HandlingUnit->ContainerGroups[0]->Container->Commodities[0]->Description->IdType = 'UN';
$validateDangerousGoodsRequest->HandlingUnitGroups[0]->HandlingUnit->ContainerGroups[0]->Container->Commodities[0]->Description->Id = '1845';
$validateDangerousGoodsRequest->HandlingUnitGroups[0]->HandlingUnit->ContainerGroups[0]->Container->Commodities[0]->Description->SequenceNumber = '2';
$validateDangerousGoodsRequest->HandlingUnitGroups[0]->HandlingUnit->ContainerGroups[0]->Container->Commodities[0]->Description->PackingGroup = 'UNDEFINED';
$validateDangerousGoodsRequest->HandlingUnitGroups[0]->HandlingUnit->ContainerGroups[0]->Container->Commodities[0]->Description->PackingInstructions = '954';
$validateDangerousGoodsRequest->HandlingUnitGroups[0]->HandlingUnit->ContainerGroups[0]->Container->Commodities[0]->Description->AircraftCategoryType = SimpleType\DangerousGoodsAircraftCategoryType::_PASSENGER_AND_CARGO_AIRCRAFT;
$validateDangerousGoodsRequest->HandlingUnitGroups[0]->HandlingUnit->ContainerGroups[0]->Container->Commodities[0]->Description->ProperShippingName = 'Dry';
$validateDangerousGoodsRequest->HandlingUnitGroups[0]->HandlingUnit->ContainerGroups[0]->Container->Commodities[0]->Description->PrimaryClass = '9';
$validateDangerousGoodsRequest->HandlingUnitGroups[0]->HandlingUnit->ContainerGroups[0]->Container->Commodities[0]->Description->Percentage = '0.0';
$validateDangerousGoodsRequest->HandlingUnitGroups[0]->HandlingUnit->ContainerGroups[0]->Container->Commodities[0]->Quantity->Amount = 5;
$validateDangerousGoodsRequest->HandlingUnitGroups[0]->HandlingUnit->ContainerGroups[0]->Container->Commodities[0]->Quantity->Units = 'KG';


$request = new Request();

try {
    $validateDangerousGoodsReply = $request->getValidateDangerousGoodsReply($validateDangerousGoodsRequest);

    var_dump($validateDangerousGoodsReply);
} catch (\Exception $e) {
    echo $request->getSoapClient()->__getLastResponse();
}











