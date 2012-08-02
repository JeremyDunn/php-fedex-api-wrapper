#!/usr/bin/env php
<?php

$vendorDir = dirname(__DIR__) . '/vendor';
require_once $vendorDir . '/autoload.php';

use     FedEx\Utility\Cli\GenerateCode,
        Symfony\Component\Console\Input\InputArgument,
        Symfony\Component\Console\Input\InputOption,
        Symfony\Component\Console,
        Symfony\Component\Console\Input\InputInterface,
        Symfony\Component\Console\Output\OutputInterface,
        Symfony\Component\Console\Application;

$app = new GenerateCode\Application();
$app->run();

