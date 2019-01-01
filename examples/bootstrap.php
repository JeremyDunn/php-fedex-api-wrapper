<?php
$vendorDir = dirname(__DIR__) . '/vendor';
require_once $vendorDir . '/autoload.php';

\FedEx\RequestFactory::$accountNumber = FEDEX_ACCOUNT_NUMBER;
\FedEx\RequestFactory::$meterNumber = FEDEX_METER_NUMBER;
\FedEx\RequestFactory::$key = FEDEX_KEY;
\FedEx\RequestFactory::$password = FEDEX_PASSWORD;
