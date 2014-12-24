#!/usr/bin/env php
<?php

$vendorDir = dirname(__DIR__) . '/vendor';
require_once $vendorDir . '/autoload.php';

use FedEx\Utility\Cli\GenerateCode,
    Symfony\Component\Console;

$app = new GenerateCode\Application();
$app->run();

