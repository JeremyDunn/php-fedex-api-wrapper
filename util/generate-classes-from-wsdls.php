#!/usr/bin/env php
<?php

$vendorDir = __DIR__ . '/../vendor';
require_once $vendorDir . '/autoload.php';

$app = new \FedEx\Utility\Cli\GenerateCode\Application();
$app->run();
