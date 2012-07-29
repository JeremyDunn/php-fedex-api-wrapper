<?php
//turn off SOAP wsdl caching
ini_set("soap.wsdl_cache_enabled", "0");

set_include_path(implode(PATH_SEPARATOR, array(
    realpath(dirname(__FILE__) .'/../src'),
    get_include_path(),
)));

function autoload($className)
{
    $className = ltrim($className, '\\');
    $fileName  = '';
    $namespace = '';
    if ($lastNsPos = strripos($className, '\\')) {
        $namespace = substr($className, 0, $lastNsPos);
        $className = substr($className, $lastNsPos + 1);
        $fileName  = str_replace('\\', DIRECTORY_SEPARATOR, $namespace) . DIRECTORY_SEPARATOR;
    }
    $fileName .= str_replace('_', DIRECTORY_SEPARATOR, $className) . '.php';

    require $fileName;
}

spl_autoload_register('autoload');



require_once 'credentials.php';

/**
 *Examples credentials.php file should look something like this:
 *
<?php
//Change these values below.
define('FEDEX_ACCOUNT_NUMBER', '12345');
define('FEDEX_METER_NUMBER', '12345');
define('FEDEX_KEY', '12345');
define('FEDEX_PASSWORD', '12345'); 
 */