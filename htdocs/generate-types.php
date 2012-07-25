<?php

/**
 * This script will generate the ComplexType and SimpleType classes based off the WSDL files provided by FedEx.  
 * When updating the library to a newer version, change the path to the .wsdl files below and also in the corresponding Request.php for each service (for example, library/RateService/Request.php)
 */

require_once '../tests/bootstrap.php';

use FedEx\Utility;

//RateRequest
$exportPath = realpath(dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'library' . DIRECTORY_SEPARATOR . 'FedEx' . DIRECTORY_SEPARATOR . 'RateService' . DIRECTORY_SEPARATOR . 'SimpleType');
$wsdlPath = realpath(dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'library' . DIRECTORY_SEPARATOR . 'FedEx'  . DIRECTORY_SEPARATOR . '_wsdl' . DIRECTORY_SEPARATOR . 'RateService_v10.wsdl');
$namespace = 'FedEx\RateService\SimpleType';
$subpackageName = 'Package Movement Information';

$generateSimpleTypes = new Utility\GenerateSimpleTypeClasses($exportPath, $wsdlPath, $namespace, $subpackageName);
$generateSimpleTypes->run();

$exportPath = realpath(dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'library' . DIRECTORY_SEPARATOR . 'FedEx' . DIRECTORY_SEPARATOR . 'RateService' . DIRECTORY_SEPARATOR . 'ComplexType');
$namespace = 'FedEx\RateService';
$subpackageName = 'Package Movement Information';

$generateComplexTypes = new Utility\GenerateComplexTypeClasses($exportPath, $wsdlPath, $namespace, $subpackageName);
$generateComplexTypes->run();


//PackageMovementInformationService
$exportPath = realpath(dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'library' . DIRECTORY_SEPARATOR . 'FedEx' . DIRECTORY_SEPARATOR . 'PackageMovementInformationService' . DIRECTORY_SEPARATOR . 'SimpleType');
$wsdlPath = realpath(dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'library' . DIRECTORY_SEPARATOR . 'FedEx'  . DIRECTORY_SEPARATOR . '_wsdl' . DIRECTORY_SEPARATOR . 'PackageMovementInformationService_v5.wsdl');
$namespace = 'FedEx\PackageMovementInformationService\SimpleType';
$subpackageName = 'Package Movement Information Service';

$generateSimpleTypes = new Utility\GenerateSimpleTypeClasses($exportPath, $wsdlPath, $namespace, $subpackageName);
$generateSimpleTypes->run();

$exportPath = realpath(dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'library' . DIRECTORY_SEPARATOR . 'FedEx' . DIRECTORY_SEPARATOR . 'PackageMovementInformationService' . DIRECTORY_SEPARATOR . 'ComplexType');
$namespace = 'FedEx\PackageMovementInformationService';
$subpackageName = 'Package Movement Information Service';

$generateComplexTypes = new Utility\GenerateComplexTypeClasses($exportPath, $wsdlPath, $namespace, $subpackageName);
$generateComplexTypes->run();

//TrackService
$exportPath = realpath(dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'library' . DIRECTORY_SEPARATOR . 'FedEx' . DIRECTORY_SEPARATOR . 'TrackService' . DIRECTORY_SEPARATOR . 'SimpleType');
$wsdlPath = realpath(dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'library' . DIRECTORY_SEPARATOR . 'FedEx'  . DIRECTORY_SEPARATOR . '_wsdl' . DIRECTORY_SEPARATOR . 'TrackService_v5.wsdl');
$namespace = 'FedEx\TrackService\SimpleType';
$subpackageName = 'Track Service';

$generateSimpleTypes = new Utility\GenerateSimpleTypeClasses($exportPath, $wsdlPath, $namespace, $subpackageName);
$generateSimpleTypes->run();

$exportPath = realpath(dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'library' . DIRECTORY_SEPARATOR . 'FedEx' . DIRECTORY_SEPARATOR . 'TrackService' . DIRECTORY_SEPARATOR . 'ComplexType');
$namespace = 'FedEx\TrackService';
$subpackageName = 'Track Service';

$generateComplexTypes = new Utility\GenerateComplexTypeClasses($exportPath, $wsdlPath, $namespace, $subpackageName);
$generateComplexTypes->run();

//AddressValidationService
$exportPath = realpath(dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'library' . DIRECTORY_SEPARATOR . 'FedEx' . DIRECTORY_SEPARATOR . 'AddressValidationService' . DIRECTORY_SEPARATOR . 'SimpleType');
$wsdlPath = realpath(dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'library' . DIRECTORY_SEPARATOR . 'FedEx'  . DIRECTORY_SEPARATOR . '_wsdl' . DIRECTORY_SEPARATOR . 'AddressValidationService_v2.wsdl');
$namespace = 'FedEx\AddressValidationService\SimpleType';
$subpackageName = 'Address Validation Service';

$generateSimpleTypes = new Utility\GenerateSimpleTypeClasses($exportPath, $wsdlPath, $namespace, $subpackageName);
$generateSimpleTypes->run();

$exportPath = realpath(dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'library' . DIRECTORY_SEPARATOR . 'FedEx' . DIRECTORY_SEPARATOR . 'AddressValidationService' . DIRECTORY_SEPARATOR . 'ComplexType');
$namespace = 'FedEx\AddressValidationService';
$subpackageName = 'Address Validation Service';

$generateComplexTypes = new Utility\GenerateComplexTypeClasses($exportPath, $wsdlPath, $namespace, $subpackageName);
$generateComplexTypes->run();

//LocatorService
$exportPath = realpath(dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'library' . DIRECTORY_SEPARATOR . 'FedEx' . DIRECTORY_SEPARATOR . 'LocatorService' . DIRECTORY_SEPARATOR . 'SimpleType');
$wsdlPath = realpath(dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'library' . DIRECTORY_SEPARATOR . 'FedEx'  . DIRECTORY_SEPARATOR . '_wsdl' . DIRECTORY_SEPARATOR . 'LocatorService_v2.wsdl');
$namespace = 'FedEx\LocatorService\SimpleType';
$subpackageName = 'Locator Service';

$generateSimpleTypes = new Utility\GenerateSimpleTypeClasses($exportPath, $wsdlPath, $namespace, $subpackageName);
$generateSimpleTypes->run();

$exportPath = realpath(dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'library' . DIRECTORY_SEPARATOR . 'FedEx' . DIRECTORY_SEPARATOR . 'LocatorService' . DIRECTORY_SEPARATOR . 'ComplexType');
$namespace = 'FedEx\LocatorService';
$subpackageName = 'Locator Service';

$generateComplexTypes = new Utility\GenerateComplexTypeClasses($exportPath, $wsdlPath, $namespace, $subpackageName);
$generateComplexTypes->run();

//ShipService
$exportPath = realpath(dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'library' . DIRECTORY_SEPARATOR . 'FedEx' . DIRECTORY_SEPARATOR . 'ShipService' . DIRECTORY_SEPARATOR . 'SimpleType');
$wsdlPath = realpath(dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'library' . DIRECTORY_SEPARATOR . 'FedEx'  . DIRECTORY_SEPARATOR . '_wsdl' . DIRECTORY_SEPARATOR . 'ShipService_v10.wsdl');

$namespace = 'FedEx\ShipService\SimpleType';
$subpackageName = 'Ship Service';

$generateSimpleTypes = new Utility\GenerateSimpleTypeClasses($exportPath, $wsdlPath, $namespace, $subpackageName);
$generateSimpleTypes->run();

$exportPath = realpath(dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'library' . DIRECTORY_SEPARATOR . 'FedEx' . DIRECTORY_SEPARATOR . 'ShipService' . DIRECTORY_SEPARATOR . 'ComplexType');
$namespace = 'FedEx\ShipService';
$subpackageName = 'Ship Service';

$generateComplexTypes = new Utility\GenerateComplexTypeClasses($exportPath, $wsdlPath, $namespace, $subpackageName);
$generateComplexTypes->run();

//CourierDispatchService
$exportPath = realpath(dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'library' . DIRECTORY_SEPARATOR . 'FedEx' . DIRECTORY_SEPARATOR . 'CourierDispatchService' . DIRECTORY_SEPARATOR . 'SimpleType');
$wsdlPath = realpath(dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'library' . DIRECTORY_SEPARATOR . 'FedEx'  . DIRECTORY_SEPARATOR . '_wsdl' . DIRECTORY_SEPARATOR . 'CourierDispatchService_v3.wsdl');
$namespace = 'FedEx\CourierDispatchService\SimpleType';
$subpackageName = 'Courier Dispatch Service';

$generateSimpleTypes = new Utility\GenerateSimpleTypeClasses($exportPath, $wsdlPath, $namespace, $subpackageName);
$generateSimpleTypes->run();

$exportPath = realpath(dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'library' . DIRECTORY_SEPARATOR . 'FedEx' . DIRECTORY_SEPARATOR . 'CourierDispatchService' . DIRECTORY_SEPARATOR . 'ComplexType');
$namespace = 'FedEx\CourierDispatchService';
$subpackageName = 'Courier Dispatch Service';

$generateComplexTypes = new Utility\GenerateComplexTypeClasses($exportPath, $wsdlPath, $namespace, $subpackageName);
$generateComplexTypes->run();

//CloseService
$exportPath = realpath(dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'library' . DIRECTORY_SEPARATOR . 'FedEx' . DIRECTORY_SEPARATOR . 'CloseService' . DIRECTORY_SEPARATOR . 'SimpleType');
$wsdlPath = realpath(dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'library' . DIRECTORY_SEPARATOR . 'FedEx'  . DIRECTORY_SEPARATOR . '_wsdl' . DIRECTORY_SEPARATOR . 'CloseService_v2.wsdl');
$namespace = 'FedEx\CloseService\SimpleType';
$subpackageName = 'Close Service';

$generateSimpleTypes = new Utility\GenerateSimpleTypeClasses($exportPath, $wsdlPath, $namespace, $subpackageName);
$generateSimpleTypes->run();

$exportPath = realpath(dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'library' . DIRECTORY_SEPARATOR . 'FedEx' . DIRECTORY_SEPARATOR . 'CloseService' . DIRECTORY_SEPARATOR . 'ComplexType');
$namespace = 'FedEx\CloseService';
$subpackageName = 'Close Service';

$generateComplexTypes = new Utility\GenerateComplexTypeClasses($exportPath, $wsdlPath, $namespace, $subpackageName);
$generateComplexTypes->run();

//ReturnTagService
$exportPath = realpath(dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'library' . DIRECTORY_SEPARATOR . 'FedEx' . DIRECTORY_SEPARATOR . 'ReturnTagService' . DIRECTORY_SEPARATOR . 'SimpleType');
$wsdlPath = realpath(dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'library' . DIRECTORY_SEPARATOR . 'FedEx'  . DIRECTORY_SEPARATOR . '_wsdl' . DIRECTORY_SEPARATOR . 'ReturnTagService_v1.wsdl');
$namespace = 'FedEx\ReturnTagService\SimpleType';
$subpackageName = 'Return Tag Service';

$generateSimpleTypes = new Utility\GenerateSimpleTypeClasses($exportPath, $wsdlPath, $namespace, $subpackageName);
$generateSimpleTypes->run();

$exportPath = realpath(dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'library' . DIRECTORY_SEPARATOR . 'FedEx' . DIRECTORY_SEPARATOR . 'ReturnTagService' . DIRECTORY_SEPARATOR . 'ComplexType');
$namespace = 'FedEx\ReturnTagService';
$subpackageName = 'Return Tag Service';

$generateComplexTypes = new Utility\GenerateComplexTypeClasses($exportPath, $wsdlPath, $namespace, $subpackageName);
$generateComplexTypes->run();

//UploadDocumentService
$exportPath = realpath(dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'library' . DIRECTORY_SEPARATOR . 'FedEx' . DIRECTORY_SEPARATOR . 'UploadDocumentService' . DIRECTORY_SEPARATOR . 'SimpleType');
$wsdlPath = realpath(dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'library' . DIRECTORY_SEPARATOR . 'FedEx'  . DIRECTORY_SEPARATOR . '_wsdl' . DIRECTORY_SEPARATOR . 'UploadDocumentService_v1.wsdl');
$namespace = 'FedEx\UploadDocumentService\SimpleType';
$subpackageName = 'Upload Document Service';

$generateSimpleTypes = new Utility\GenerateSimpleTypeClasses($exportPath, $wsdlPath, $namespace, $subpackageName);
$generateSimpleTypes->run();

$exportPath = realpath(dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'library' . DIRECTORY_SEPARATOR . 'FedEx' . DIRECTORY_SEPARATOR . 'UploadDocumentService' . DIRECTORY_SEPARATOR . 'ComplexType');
$namespace = 'FedEx\UploadDocumentService';
$subpackageName = 'Upload Document Service';

$generateComplexTypes = new Utility\GenerateComplexTypeClasses($exportPath, $wsdlPath, $namespace, $subpackageName);
$generateComplexTypes->run();

//PickupService
$exportPath = realpath(dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'library' . DIRECTORY_SEPARATOR . 'FedEx' . DIRECTORY_SEPARATOR . 'PickupService' . DIRECTORY_SEPARATOR . 'SimpleType');
$wsdlPath = realpath(dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'library' . DIRECTORY_SEPARATOR . 'FedEx'  . DIRECTORY_SEPARATOR . '_wsdl' . DIRECTORY_SEPARATOR . 'PickupService_v3.wsdl');
$namespace = 'FedEx\Pickup\SimpleType';
$subpackageName = 'Pickup Service';

$generateSimpleTypes = new Utility\GenerateSimpleTypeClasses($exportPath, $wsdlPath, $namespace, $subpackageName);
$generateSimpleTypes->run();

$exportPath = realpath(dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'library' . DIRECTORY_SEPARATOR . 'FedEx' . DIRECTORY_SEPARATOR . 'PickupService' . DIRECTORY_SEPARATOR . 'ComplexType');
$namespace = 'FedEx\PickupService';
$subpackageName = 'Pickup Service';

$generateComplexTypes = new Utility\GenerateComplexTypeClasses($exportPath, $wsdlPath, $namespace, $subpackageName);
$generateComplexTypes->run();