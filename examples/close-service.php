<?php
//remember to copy example.credentials.php as credentials.php replace 'FEDEX_KEY', 'FEDEX_PASSWORD', 'FEDEX_ACCOUNT_NUMBER', and 'FEDEX_METER_NUMBER'
require_once 'credentials.php';
require_once 'bootstrap.php';

use FedEx\CloseService\Request;
use FedEx\CloseService\ComplexType;
use FedEx\CloseService\SimpleType;

$closeWithDocumentsRequest = new ComplexType\CloseWithDocumentsRequest();

// Authentication & client details.
$closeWithDocumentsRequest->WebAuthenticationDetail->UserCredential->Key = FEDEX_KEY;
$closeWithDocumentsRequest->WebAuthenticationDetail->UserCredential->Password = FEDEX_PASSWORD;
$closeWithDocumentsRequest->ClientDetail->AccountNumber = FEDEX_ACCOUNT_NUMBER;
$closeWithDocumentsRequest->ClientDetail->MeterNumber = FEDEX_METER_NUMBER;

$closeWithDocumentsRequest->TransactionDetail->CustomerTransactionId = 'ground close with documents test';

// Version.
$closeWithDocumentsRequest->Version->ServiceId = 'clos';
$closeWithDocumentsRequest->Version->Major = 5;
$closeWithDocumentsRequest->Version->Intermediate = 0;
$closeWithDocumentsRequest->Version->Minor = 0;

// Action type.
$closeWithDocumentsRequest->ActionType = SimpleType\CloseActionType::_CLOSE;

// Processing options.
$closeWithDocumentsRequest->ProcessingOptions->Options = [SimpleType\CloseWithDocumentsProcessingOptionType::_ERROR_IF_OPEN_SHIPMENTS_FOUND];

// Carrier code.
$closeWithDocumentsRequest->CarrierCode = SimpleType\CarrierCodeType::_FDXE;

// Reprint close date.
$closeWithDocumentsRequest->ReprintCloseDate = date('c');

// Manifest reference detail.
$closeWithDocumentsRequest->CloseDocumentSpecification->CloseDocumentTypes = [SimpleType\CloseDocumentType::_MANIFEST];


$closeSerivceRequest = new Request();
$closeWithDocumentsReply = $closeSerivceRequest->getCloseWithDocumentsReply($closeWithDocumentsRequest);

var_dump($closeWithDocumentsReply);





