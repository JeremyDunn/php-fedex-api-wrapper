<?php
//Change these values below.

//define('FEDEX_ACCOUNT_NUMBER', '');
//define('FEDEX_METER_NUMBER', '');
//define('FEDEX_KEY', '');
//define('FEDEX_PASSWORD', '');


if (!defined('FEDEX_ACCOUNT_NUMBER') || !defined('FEDEX_METER_NUMBER') || !defined('FEDEX_KEY') || !defined('FEDEX_PASSWORD')) {
    die("The constants 'FEDEX_ACCOUNT_NUMBER', 'FEDEX_METER_NUMBER', 'FEDEX_KEY', and 'FEDEX_PASSWORD' need to be defined in: " . realpath(__FILE__));
}

