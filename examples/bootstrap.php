<?php
//turn off SOAP wsdl caching
ini_set("soap.wsdl_cache_enabled", "0");

$vendorDir = dirname(__DIR__) . '/vendor';

require_once $vendorDir . '/autoload.php';
