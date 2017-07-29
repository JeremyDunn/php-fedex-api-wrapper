<?php
require_once 'credentials.php';
require_once 'bootstrap.php';

use FedEx\ShipService\Request;
use FedEx\ShipService\ComplexType;
use FedEx\ShipService\SimpleType;

$shipDate = new \DateTime('now +7 days');
$expirationDate = new \DateTime('now +14 days');

//package 1
$requestedPackageLineItem1 = new ComplexType\RequestedPackageLineItem();
$requestedPackageLineItem1->SequenceNumber = 1;
$requestedPackageLineItem1->ItemDescription = 'Product description 1';
$requestedPackageLineItem1->Dimensions->Width = 10;
$requestedPackageLineItem1->Dimensions->Height = 10;
$requestedPackageLineItem1->Dimensions->Length = 15;
$requestedPackageLineItem1->Dimensions->Units = SimpleType\LinearUnits::_IN;
$requestedPackageLineItem1->Weight->Value = 2;
$requestedPackageLineItem1->Weight->Units = SimpleType\WeightUnits::_LB;

//package 2
$requestedPackageLineItem2 = new ComplexType\RequestedPackageLineItem();
$requestedPackageLineItem2->SequenceNumber = 1;
$requestedPackageLineItem2->ItemDescription = 'Product description 2';
$requestedPackageLineItem2->Dimensions->Width = 5;
$requestedPackageLineItem2->Dimensions->Height = 5;
$requestedPackageLineItem2->Dimensions->Length = 10;
$requestedPackageLineItem2->Dimensions->Units = SimpleType\LinearUnits::_IN;
$requestedPackageLineItem2->Weight->Value = 1;
$requestedPackageLineItem2->Weight->Units = SimpleType\WeightUnits::_LB;

//create pending shipment request
$createPendingShipmentRequest = new ComplexType\CreatePendingShipmentRequest();

//authentication detail
$createPendingShipmentRequest->WebAuthenticationDetail->UserCredential->Key = FEDEX_KEY;
$createPendingShipmentRequest->WebAuthenticationDetail->UserCredential->Password = FEDEX_PASSWORD;

//client detail
$createPendingShipmentRequest->ClientDetail->AccountNumber = FEDEX_ACCOUNT_NUMBER;
$createPendingShipmentRequest->ClientDetail->MeterNumber = FEDEX_METER_NUMBER;

//version
$createPendingShipmentRequest->Version->ServiceId = 'ship';
$createPendingShipmentRequest->Version->Major = 12;
$createPendingShipmentRequest->Version->Intermediate = 1;
$createPendingShipmentRequest->Version->Minor = 0;

//requested shipment
$createPendingShipmentRequest->RequestedShipment->DropoffType = SimpleType\DropoffType::_REGULAR_PICKUP;
$createPendingShipmentRequest->RequestedShipment->ShipTimestamp = $shipDate->format('c');
$createPendingShipmentRequest->RequestedShipment->ServiceType = SimpleType\ServiceType::_FEDEX_2_DAY;
$createPendingShipmentRequest->RequestedShipment->PackagingType = SimpleType\PackagingType::_YOUR_PACKAGING;
$createPendingShipmentRequest->RequestedShipment->LabelSpecification->ImageType = SimpleType\ShippingDocumentImageType::_PDF;
$createPendingShipmentRequest->RequestedShipment->LabelSpecification->LabelFormatType = SimpleType\LabelFormatType::_COMMON2D;
$createPendingShipmentRequest->RequestedShipment->LabelSpecification->LabelStockType = SimpleType\LabelStockType::_PAPER_4X6;
$createPendingShipmentRequest->RequestedShipment->RateRequestTypes = [SimpleType\RateRequestType::_ACCOUNT];
$createPendingShipmentRequest->RequestedShipment->PackageCount = 1;
$createPendingShipmentRequest->RequestedShipment->RequestedPackageLineItems = [$requestedPackageLineItem1, $requestedPackageLineItem2];

//requested shipment shipper
$createPendingShipmentRequest->RequestedShipment->Shipper->AccountNumber = FEDEX_ACCOUNT_NUMBER;
$createPendingShipmentRequest->RequestedShipment->Shipper->Address->StreetLines = ['1234 Main Street'];
$createPendingShipmentRequest->RequestedShipment->Shipper->Address->City = 'Anytown';
$createPendingShipmentRequest->RequestedShipment->Shipper->Address->StateOrProvinceCode = 'NY';
$createPendingShipmentRequest->RequestedShipment->Shipper->Address->PostalCode = '12345';
$createPendingShipmentRequest->RequestedShipment->Shipper->Address->CountryCode = 'US';
$createPendingShipmentRequest->RequestedShipment->Shipper->Contact->CompanyName = 'Company Name';
$createPendingShipmentRequest->RequestedShipment->Shipper->Contact->PersonName = 'Person Name';
$createPendingShipmentRequest->RequestedShipment->Shipper->Contact->EMailAddress = 'shipper@example.com';
$createPendingShipmentRequest->RequestedShipment->Shipper->Contact->PhoneNumber = '1-123-123-1234';

//requested shipment recipient
$createPendingShipmentRequest->RequestedShipment->Recipient->Address->StreetLines = ['54321 1st Ave.'];
$createPendingShipmentRequest->RequestedShipment->Recipient->Address->City = 'Anytown';
$createPendingShipmentRequest->RequestedShipment->Recipient->Address->StateOrProvinceCode = 'NY';
$createPendingShipmentRequest->RequestedShipment->Recipient->Address->PostalCode = '12345';
$createPendingShipmentRequest->RequestedShipment->Recipient->Address->CountryCode = 'US';
$createPendingShipmentRequest->RequestedShipment->Recipient->Contact->PersonName = 'John Doe';
$createPendingShipmentRequest->RequestedShipment->Recipient->Contact->EMailAddress = 'recipient@example.com';
$createPendingShipmentRequest->RequestedShipment->Recipient->Contact->PhoneNumber = '1-321-321-4321';

//shipping charges payment
$createPendingShipmentRequest->RequestedShipment->ShippingChargesPayment->PaymentType = SimpleType\PaymentType::_SENDER;
$createPendingShipmentRequest->RequestedShipment->ShippingChargesPayment->Payor->ResponsibleParty = $createPendingShipmentRequest->RequestedShipment->Shipper;

//special services requested
$createPendingShipmentRequest->RequestedShipment->SpecialServicesRequested->SpecialServiceTypes = [SimpleType\ShipmentSpecialServiceType::_PENDING_SHIPMENT];
$createPendingShipmentRequest->RequestedShipment->SpecialServicesRequested->PendingShipmentDetail->Type = SimpleType\PendingShipmentType::_EMAIL;
$createPendingShipmentRequest->RequestedShipment->SpecialServicesRequested->PendingShipmentDetail->ExpirationDate = $expirationDate->format('Y-m-d');
$createPendingShipmentRequest->RequestedShipment->SpecialServicesRequested->PendingShipmentDetail->EmailLabelDetail->NotificationEMailAddress = 'recipient@example.com';
$createPendingShipmentRequest->RequestedShipment->SpecialServicesRequested->PendingShipmentDetail->EmailLabelDetail->NotificationMessage = 'Pending shipment notification message.';

$shipServiceRequest = new Request();
$createPendingShipmentReply = $shipServiceRequest->getCreatePendingShipmentReply($createPendingShipmentRequest);

var_dump($createPendingShipmentReply);
