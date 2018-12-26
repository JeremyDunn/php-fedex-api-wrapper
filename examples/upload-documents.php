<?php
//remember to copy example.credentials.php as credentials.php replace 'FEDEX_KEY', 'FEDEX_PASSWORD', 'FEDEX_ACCOUNT_NUMBER', and 'FEDEX_METER_NUMBER'
require_once 'credentials.php';
require_once 'bootstrap.php';

use FedEx\UploadDocumentService\Request;
use FedEx\UploadDocumentService\ComplexType;
use FedEx\UploadDocumentService\SimpleType;

$uploadDocumentsRequest = new ComplexType\UploadDocumentsRequest();

// Authentication & client details.
$uploadDocumentsRequest->WebAuthenticationDetail->UserCredential->Key = FEDEX_KEY;
$uploadDocumentsRequest->WebAuthenticationDetail->UserCredential->Password = FEDEX_PASSWORD;
$uploadDocumentsRequest->ClientDetail->AccountNumber = FEDEX_ACCOUNT_NUMBER;
$uploadDocumentsRequest->ClientDetail->MeterNumber = FEDEX_METER_NUMBER;

// Version
$uploadDocumentsRequest->Version->ServiceId = 'cdus';
$uploadDocumentsRequest->Version->Major = 11;
$uploadDocumentsRequest->Version->Intermediate = 0;
$uploadDocumentsRequest->Version->Minor = 0;

$uploadDocumentsRequest->OriginCountryCode = 'US';
$uploadDocumentsRequest->DestinationCountryCode = 'US';
$uploadDocumentsRequest->Usage = SimpleType\DocumentUsageType::_ELECTRONIC_TRADE_DOCUMENTS;

// Document details.
$uploadDocumentsRequest->Documents = [new ComplexType\UploadDocumentDetail()];
$uploadDocumentsRequest->Documents[0]->LineNumber = 1;
$uploadDocumentsRequest->Documents[0]->CustomerReference = 'REFESBD2700L3C120120106104505';
$uploadDocumentsRequest->Documents[0]->DocumentType = SimpleType\UploadDocumentType::_COMMERCIAL_INVOICE;
$uploadDocumentsRequest->Documents[0]->FileName = 'CommercialInvoice.xls';

// Document content.
$uploadDocumentsRequest->Documents[0]->DocumentContent = base64_encode(file_get_contents(__DIR__ . '/CommercialInvoice.xls'));

$request = new Request();
try {
    $uploadDocumentsReply = $request->getUploadDocumentsReply($uploadDocumentsRequest);
    var_dump($uploadDocumentsReply);
} catch (\Exception $e) {
    echo $request->getSoapClient()->__getLastResponse();
}
