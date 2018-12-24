<?php
//remember to copy example.credentials.php as credentials.php replace 'FEDEX_KEY', 'FEDEX_PASSWORD', 'FEDEX_ACCOUNT_NUMBER', and 'FEDEX_METER_NUMBER'
require_once 'credentials.php';
require_once 'bootstrap.php';

use FedEx\InFlightShipmentService\Request;
use FedEx\InFlightShipmentService\ComplexType;
use FedEx\InFlightShipmentService\SimpleType;

$processDeliveryRequest = new ComplexType\ProcessDeliveryRequest();

// Authentication & client details.
$processDeliveryRequest->WebAuthenticationDetail->UserCredential->Key = FEDEX_KEY;
$processDeliveryRequest->WebAuthenticationDetail->UserCredential->Password = FEDEX_PASSWORD;
$processDeliveryRequest->ClientDetail->AccountNumber = FEDEX_ACCOUNT_NUMBER;
$processDeliveryRequest->ClientDetail->MeterNumber = FEDEX_METER_NUMBER;

// Version.
$processDeliveryRequest->Version->ServiceId = 'ifss';
$processDeliveryRequest->Version->Major = 1;
$processDeliveryRequest->Version->Intermediate = 0;
$processDeliveryRequest->Version->Minor = 0;

// Action requested.
$processDeliveryRequest->ActionRequested = SimpleType\DeliveryActionType::_ADD;

// Unique tracking number.
$processDeliveryRequest->UniqueTrackingNumber->TrackingNumber = '794908703761';
$processDeliveryRequest->UniqueTrackingNumber->TrackingNumberUniqueIdentifier = '2458095000~794908703761~FX';
$processDeliveryRequest->UniqueTrackingNumber->ShipDate = '2017-12-07';

// Recipient contact.
$processDeliveryRequest->RecipientContact->PersonName = 'Recipient_Name';
$processDeliveryRequest->RecipientContact->CompanyName = 'CSCSWAPI-WBUS1100';
$processDeliveryRequest->RecipientContact->PhoneNumber = '9018549236';
$processDeliveryRequest->RecipientContact->EMailAddress = 'recipient@yahoo.com';

// Destination address.
$processDeliveryRequest->DestinationAddress->StreetLines = ['Recipient_Address_Line1', 'Recipient_Address_Line2'];
$processDeliveryRequest->DestinationAddress->City = 'CARROLTON';
$processDeliveryRequest->DestinationAddress->StateOrProvinceCode = 'TX';
$processDeliveryRequest->DestinationAddress->PostalCode = '750007';
$processDeliveryRequest->DestinationAddress->CountryCode = 'US';
$processDeliveryRequest->DestinationAddress->Residential = false;

// Delivery request detail.
$processDeliveryRequest->DeliveryRequestDetail->Type = SimpleType\DeliveryOptionType::_REDIRECT_TO_HOLD_AT_LOCATION;
$processDeliveryRequest->DeliveryRequestDetail->RedirectToHoldAtLocationDetail->HoldingLocationId = 'ADSA';
$processDeliveryRequest->DeliveryRequestDetail->RedirectToHoldAtLocationDetail->HoldingLocationNumber = 0;

// Holding contact.
$processDeliveryRequest->DeliveryRequestDetail->RedirectToHoldAtLocationDetail->HoldingLocationContactAndAddress->Contact->ContactId = 'DRB0705';
$processDeliveryRequest->DeliveryRequestDetail->RedirectToHoldAtLocationDetail->HoldingLocationContactAndAddress->Contact->PersonName = 'DEOYANEE BHADANE';
$processDeliveryRequest->DeliveryRequestDetail->RedirectToHoldAtLocationDetail->HoldingLocationContactAndAddress->Contact->Title = 'Ms.';
$processDeliveryRequest->DeliveryRequestDetail->RedirectToHoldAtLocationDetail->HoldingLocationContactAndAddress->Contact->CompanyName = 'DEOYAROHIT0705$';
$processDeliveryRequest->DeliveryRequestDetail->RedirectToHoldAtLocationDetail->HoldingLocationContactAndAddress->Contact->PhoneNumber = '9762308621';
$processDeliveryRequest->DeliveryRequestDetail->RedirectToHoldAtLocationDetail->HoldingLocationContactAndAddress->Contact->PhoneExtension = '02033469';
$processDeliveryRequest->DeliveryRequestDetail->RedirectToHoldAtLocationDetail->HoldingLocationContactAndAddress->Contact->PagerNumber = '9762308621';
$processDeliveryRequest->DeliveryRequestDetail->RedirectToHoldAtLocationDetail->HoldingLocationContactAndAddress->Contact->FaxNumber = '9762308621';
$processDeliveryRequest->DeliveryRequestDetail->RedirectToHoldAtLocationDetail->HoldingLocationContactAndAddress->Contact->EMailAddress = 'Deoyanee*Bhadane@DeoyaRohit.com';
$processDeliveryRequest->DeliveryRequestDetail->RedirectToHoldAtLocationDetail->HoldingLocationContactAndAddress->Contact->EMailAddress = 'Deoyanee*Bhadane@DeoyaRohit.com';

// Holding address.
$processDeliveryRequest->DeliveryRequestDetail->RedirectToHoldAtLocationDetail->HoldingLocationContactAndAddress->Address->StreetLines = ['1919 E FRANKFORD RD - S G'];
$processDeliveryRequest->DeliveryRequestDetail->RedirectToHoldAtLocationDetail->HoldingLocationContactAndAddress->Address->City = 'CARROLLTON';
$processDeliveryRequest->DeliveryRequestDetail->RedirectToHoldAtLocationDetail->HoldingLocationContactAndAddress->Address->StateOrProvinceCode = 'TX';
$processDeliveryRequest->DeliveryRequestDetail->RedirectToHoldAtLocationDetail->HoldingLocationContactAndAddress->Address->PostalCode = '75007';
$processDeliveryRequest->DeliveryRequestDetail->RedirectToHoldAtLocationDetail->HoldingLocationContactAndAddress->Address->CountryCode = 'US';
$processDeliveryRequest->DeliveryRequestDetail->RedirectToHoldAtLocationDetail->HoldingLocationContactAndAddress->Address->Residential = false;

// Comments.
$processDeliveryRequest->DeliveryRequestDetail->RedirectToHoldAtLocationDetail->Comments = 'Please redirect to new address.';


$request = new Request();

try {
    $processDeliveryReply = $request->getProcessDeliveryReply($processDeliveryRequest);
    var_dump($processDeliveryReply);
} catch (\Exception $e) {
    echo $request->getSoapClient()->__getLastResponse();
}
