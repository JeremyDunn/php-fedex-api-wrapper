<?php
//remember to copy example.credentials.php as credentials.php replace 'FEDEX_KEY', 'FEDEX_PASSWORD', 'FEDEX_ACCOUNT_NUMBER', and 'FEDEX_METER_NUMBER'
require_once 'credentials.php';
require_once 'bootstrap.php';

use FedEx\AsyncService\Request;
use FedEx\AsyncService\ComplexType;
use FedEx\AsyncService\SimpleType;

$retrieveJobResultsRequest = new ComplexType\RetrieveJobResultsRequest();

// Authentication & client details.
$retrieveJobResultsRequest->WebAuthenticationDetail->UserCredential->Key = FEDEX_KEY;
$retrieveJobResultsRequest->WebAuthenticationDetail->UserCredential->Password = FEDEX_PASSWORD;
$retrieveJobResultsRequest->ClientDetail->AccountNumber = FEDEX_ACCOUNT_NUMBER;
$retrieveJobResultsRequest->ClientDetail->MeterNumber = FEDEX_METER_NUMBER;

$retrieveJobResultsRequest->TransactionDetail->CustomerTransactionId = 'testing async service';

// Version.
$retrieveJobResultsRequest->Version->ServiceId = 'async';
$retrieveJobResultsRequest->Version->Major = 4;
$retrieveJobResultsRequest->Version->Intermediate = 0;
$retrieveJobResultsRequest->Version->Minor = 0;

$retrieveJobResultsRequest->JobId = 'your job id';


$request = new Request();
try {
    $retrieveJobResultsReply = $request->getRetrieveJobResultsReply($retrieveJobResultsRequest);
} catch (\Exception $e) {
    echo $request->getSoapClient()->__getLastResponse();
}

