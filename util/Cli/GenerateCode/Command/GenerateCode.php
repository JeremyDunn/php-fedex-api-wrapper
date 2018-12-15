<?php
namespace FedEx\Utility\Cli\GenerateCode\Command;

use FedEx\Utility\CodeGenerator;
use Symfony\Component\Console;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Generate Command for Generate Code CLI Application
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Utilities
 */
class GenerateCode extends Console\Command\Command
{
    /**
     * Configure implementation
     */
    protected function configure()
    {
        $description = "Parses the .wsdl files and generates Request, ComplexType, and SimpleType classes.";

        $this
            ->setName('generate')
            ->setDescription($description)
            ->setHelp(PHP_EOL . $description . PHP_EOL);
    }

    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     * @throws \Exception
     * @return void
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        ini_set("soap.wsdl_cache_enabled", 0);

        if (!isset($_SERVER['PWD'])) {
            throw new \Exception('Cannot determin current working directory.  Make sure you run this script from command line.');
        }

        $fedexSrcDir = realpath(dirname($_SERVER['PWD'] . '/' . $_SERVER['PHP_SELF']) . '/../src/FedEx');

        if (!is_writable($fedexSrcDir)) {
            throw new \Exception('Cannot write to directory: ' . $fedexSrcDir);
        }

        //RateRequest
        $wsdlPath = $fedexSrcDir . '/_wsdl/RateService_v24.wsdl';

        $baseNamespace = 'FedEx\RateService';
        $subpackageName = 'Rate Service';

        //generate Request class
        $pathToRequestClassFile = $fedexSrcDir . '/RateService/Request.php';
        $generateRequestClassFile = new CodeGenerator\GenerateRequestClass($pathToRequestClassFile, $wsdlPath, 'FedEx\RateService', $subpackageName);
        $generateRequestClassFile->run();

        //generate SimpleType classes
        $exportPath = $fedexSrcDir . '/RateService/SimpleType';
        $generateSimpleTypes = new CodeGenerator\GenerateSimpleTypeClasses($exportPath, $wsdlPath, $baseNamespace, $subpackageName);
        $generateSimpleTypes->run();

        //generate ComplexType classes
        $exportPath = $fedexSrcDir . '/RateService/ComplexType';
        $generateComplexTypes = new CodeGenerator\GenerateComplexTypeClasses($exportPath, $wsdlPath, $baseNamespace, $subpackageName);
        $generateComplexTypes->run();

        //PackageMovementInformationService
        $wsdlPath = $fedexSrcDir . '/_wsdl/PackageMovementInformationService_v5.wsdl';

        $baseNamespace = 'FedEx\PackageMovementInformationService';
        $subpackageName = 'Package Movement Information Service';

        //generate Request class
        $pathToRequestClassFile = $fedexSrcDir . '/PackageMovementInformationService/Request.php';
        $generateRequestClassFile = new CodeGenerator\GenerateRequestClass($pathToRequestClassFile, $wsdlPath, 'FedEx\PackageMovementInformationService', $subpackageName);
        $generateRequestClassFile->run();

        //generate SimpleType classes
        $exportPath = $fedexSrcDir . '/PackageMovementInformationService/SimpleType';
        $generateSimpleTypes = new CodeGenerator\GenerateSimpleTypeClasses($exportPath, $wsdlPath, $baseNamespace, $subpackageName);
        $generateSimpleTypes->run();

        //generate ComplexType classes
        $exportPath = $fedexSrcDir . '/PackageMovementInformationService/ComplexType';
        $generateComplexTypes = new CodeGenerator\GenerateComplexTypeClasses($exportPath, $wsdlPath, $baseNamespace, $subpackageName);
        $generateComplexTypes->run();


        //TrackService
        $wsdlPath = $fedexSrcDir . '/_wsdl/TrackService_v16.wsdl';

        $baseNamespace = 'FedEx\TrackService';
        $subPackageName = 'Track Service';

        //generate Request class
        $pathToRequestClassFile = $fedexSrcDir . '/TrackService/Request.php';
        $generateRequestClassFile = new CodeGenerator\GenerateRequestClass($pathToRequestClassFile, $wsdlPath, $baseNamespace, $subPackageName);
        $generateRequestClassFile->run();

        //generate SimpleType classes
        $exportPath = $fedexSrcDir . '/TrackService/SimpleType';
        $generateSimpleTypes = new CodeGenerator\GenerateSimpleTypeClasses($exportPath, $wsdlPath, $baseNamespace, $subpackageName);
        $generateSimpleTypes->run();

        //generate CompleType classes
        $exportPath = $fedexSrcDir . '/TrackService/ComplexType';
        $generateComplexTypes = new CodeGenerator\GenerateComplexTypeClasses($exportPath, $wsdlPath, $baseNamespace, $subpackageName);
        $generateComplexTypes->run();


        //AddressValidationService
        $wsdlPath = $fedexSrcDir . '/_wsdl/AddressValidationService_v4.wsdl';

        $baseNamespace = 'FedEx\AddressValidationService';
        $subPackageName = 'Address Validation Service';

        //generate Request class
        $pathToRequestClassFile = $fedexSrcDir . '/AddressValidationService/Request.php';
        $generateRequestClassFile = new CodeGenerator\GenerateRequestClass($pathToRequestClassFile, $wsdlPath, $baseNamespace, $subPackageName);
        $generateRequestClassFile->run();

        //generate SimpleType classes
        $exportPath = $fedexSrcDir . '/AddressValidationService/SimpleType';
        $generateSimpleTypes = new CodeGenerator\GenerateSimpleTypeClasses($exportPath, $wsdlPath, $baseNamespace, $subPackageName);
        $generateSimpleTypes->run();

        //generate CompleType classes
        $exportPath = $fedexSrcDir . '/AddressValidationService/ComplexType';
        $generateComplexTypes = new CodeGenerator\GenerateComplexTypeClasses($exportPath, $wsdlPath, $baseNamespace, $subPackageName);
        $generateComplexTypes->run();


        //LocationsService
        $wsdlPath = $fedexSrcDir . '/_wsdl/LocationsService_v9.wsdl';

        $baseNamespace = 'FedEx\LocationsService';
        $subPackageName = 'Locations Service';

        //generate Request class
        $pathToRequestClassFile = $fedexSrcDir . '/LocationsService/Request.php';
        $generateRequestClassFile = new CodeGenerator\GenerateRequestClass($pathToRequestClassFile, $wsdlPath, $baseNamespace, $subPackageName);
        $generateRequestClassFile->run();

        //generate SimpleType classes
        $exportPath = $fedexSrcDir . '/LocationsService/SimpleType';
        $generateSimpleTypes = new CodeGenerator\GenerateSimpleTypeClasses($exportPath, $wsdlPath, $baseNamespace, $subPackageName);
        $generateSimpleTypes->run();

        //generate ComplexType classes
        $exportPath = $fedexSrcDir . '/LocationsService/ComplexType';
        $generateComplexTypes = new CodeGenerator\GenerateComplexTypeClasses($exportPath, $wsdlPath, $baseNamespace, $subPackageName);
        $generateComplexTypes->run();


        //ShipService
        $wsdlPath = $fedexSrcDir . '/_wsdl/ShipService_v23.wsdl';

        $baseNamespace = 'FedEx\ShipService';
        $subPackageName = 'Ship Service';

        //generate Request class
        $pathToRequestClassFile = $fedexSrcDir . '/ShipService/Request.php';
        $generateRequestClassFile = new CodeGenerator\GenerateRequestClass($pathToRequestClassFile, $wsdlPath, $baseNamespace, $subPackageName);
        $generateRequestClassFile->run();

        //generate SimpleType classes
        $exportPath = $fedexSrcDir . '/ShipService/SimpleType';
        $generateSimpleTypes = new CodeGenerator\GenerateSimpleTypeClasses($exportPath, $wsdlPath, $baseNamespace, $subPackageName);
        $generateSimpleTypes->run();

        //generate ComplexType classes
        $exportPath = $fedexSrcDir . '/ShipService/ComplexType';
        $generateComplexTypes = new CodeGenerator\GenerateComplexTypeClasses($exportPath, $wsdlPath, $baseNamespace, $subPackageName);
        $generateComplexTypes->run();


        //CourierDispatchService
        $wsdlPath = $fedexSrcDir . '/_wsdl/CourierDispatchService_v3.wsdl';

        $baseNamespace = 'FedEx\CourierDispatchService';
        $subPackageName = 'Courier Dispatch Service';

        //export Request class
        $pathToRequestClassFile = $fedexSrcDir . '/CourierDispatchService/Request.php';
        $generateRequestClassFile = new CodeGenerator\GenerateRequestClass($pathToRequestClassFile, $wsdlPath, $baseNamespace, $subPackageName);
        $generateRequestClassFile->run();

        //generate SimpleType classes
        $exportPath = $fedexSrcDir . '/CourierDispatchService/SimpleType';
        $generateSimpleTypes = new CodeGenerator\GenerateSimpleTypeClasses($exportPath, $wsdlPath, $baseNamespace, $subPackageName);
        $generateSimpleTypes->run();

        //generate ComplexType classes
        $exportPath = $fedexSrcDir . '/CourierDispatchService/ComplexType';
        $generateComplexTypes = new CodeGenerator\GenerateComplexTypeClasses($exportPath, $wsdlPath, $baseNamespace, $subPackageName);
        $generateComplexTypes->run();


        //CloseService
        $wsdlPath = $fedexSrcDir . '/_wsdl/CloseService_v5.wsdl';

        $baseNamespace = 'FedEx\CloseService';
        $subPackageName = 'Close Service';

        //generate Request class
        $pathToRequestClassFile = $fedexSrcDir . '/CloseService/Request.php';
        $generateRequestClassFile = new CodeGenerator\GenerateRequestClass($pathToRequestClassFile, $wsdlPath, $baseNamespace, $subPackageName);
        $generateRequestClassFile->run();

        //generate SimpleType classes
        $exportPath = $fedexSrcDir . '/CloseService/SimpleType';
        $generateSimpleTypes = new CodeGenerator\GenerateSimpleTypeClasses($exportPath, $wsdlPath, $baseNamespace, $subPackageName);
        $generateSimpleTypes->run();

        $exportPath = $fedexSrcDir . '/CloseService/ComplexType';
        $generateComplexTypes = new CodeGenerator\GenerateComplexTypeClasses($exportPath, $wsdlPath, $baseNamespace, $subPackageName);
        $generateComplexTypes->run();

        //ReturnTagService
        $wsdlPath = $fedexSrcDir . '/_wsdl/ReturnTagService_v1.wsdl';

        $baseNamespace = 'FedEx\ReturnTagService';
        $subPackageName = 'Return Tag Service';

        //generate Request class
        $pathToRequestClassFile = $fedexSrcDir . '/ReturnTagService/Request.php';
        $generateRequestClassFile = new CodeGenerator\GenerateRequestClass($pathToRequestClassFile, $wsdlPath, $baseNamespace, $subPackageName);
        $generateRequestClassFile->run();

        //generate SimpleType classes
        $exportPath = $fedexSrcDir . '/ReturnTagService/SimpleType';
        $generateSimpleTypes = new CodeGenerator\GenerateSimpleTypeClasses($exportPath, $wsdlPath, $baseNamespace, $subPackageName);
        $generateSimpleTypes->run();

        //generate ComplexType classes
        $exportPath = $fedexSrcDir . '/ReturnTagService/ComplexType';
        $baseNamespace = 'FedEx\ReturnTagService';
        $subPackageName = 'Return Tag Service';

        $generateComplexTypes = new CodeGenerator\GenerateComplexTypeClasses($exportPath, $wsdlPath, $baseNamespace, $subPackageName);
        $generateComplexTypes->run();


        //UploadDocumentService
        $wsdlPath = $fedexSrcDir . '/_wsdl/UploadDocumentService_v11.wsdl';

        $baseNamespace = 'FedEx\UploadDocumentService';
        $subPackageName = 'Upload Document Service';

        //generate Request class
        $pathToRequestClassFile = $fedexSrcDir . '/UploadDocumentService/Request.php';
        $generateRequestClassFile = new CodeGenerator\GenerateRequestClass($pathToRequestClassFile, $wsdlPath, $baseNamespace, $subPackageName);
        $generateRequestClassFile->run();

        //generate SimpleType classes
        $exportPath = $fedexSrcDir . '/UploadDocumentService/SimpleType';
        $generateSimpleTypes = new CodeGenerator\GenerateSimpleTypeClasses($exportPath, $wsdlPath, $baseNamespace, $subPackageName);
        $generateSimpleTypes->run();

        //generate ComplexType classes
        $exportPath = $fedexSrcDir . '/UploadDocumentService/ComplexType';
        $generateComplexTypes = new CodeGenerator\GenerateComplexTypeClasses($exportPath, $wsdlPath, $baseNamespace, $subPackageName);
        $generateComplexTypes->run();

        //PickupService
        $wsdlPath = $fedexSrcDir . '/_wsdl/PickupService_v17.wsdl';

        $baseNamespace = 'FedEx\PickupService';
        $subPackageName = 'Pickup Service';

        //generate Request class
        $pathToRequestClassFile = $fedexSrcDir . '/PickupService/Request.php';
        $generateRequestClassFile = new CodeGenerator\GenerateRequestClass($pathToRequestClassFile, $wsdlPath, $baseNamespace, $subPackageName);
        $generateRequestClassFile->run();


        //generate SimpleType classes
        $exportPath = $fedexSrcDir . '/PickupService/SimpleType';
        $generateSimpleTypes = new CodeGenerator\GenerateSimpleTypeClasses($exportPath, $wsdlPath, $baseNamespace, $subPackageName);
        $generateSimpleTypes->run();

        //generate ComplexType classes
        $exportPath = $fedexSrcDir . '/PickupService/ComplexType';
        $generateComplexTypes = new CodeGenerator\GenerateComplexTypeClasses($exportPath, $wsdlPath, $baseNamespace, $subPackageName);
        $generateComplexTypes->run();

        /*
         * Open Ship Service (v11)
         */
        $wsdlPath = $fedexSrcDir . '/_wsdl/OpenshipService_v15.wsdl';

        $baseNamespace = 'FedEx\OpenShipService';
        $subPackageName = 'OpenShip Service';

        //generate Request class
        $pathToRequestClassFile = $fedexSrcDir . '/OpenShipService/Request.php';
        $generateRequestClassFile = new CodeGenerator\GenerateRequestClass($pathToRequestClassFile, $wsdlPath, $baseNamespace, $subPackageName);
        $generateRequestClassFile->run();

        //generate SimpleType classes
        $exportPath = $fedexSrcDir . '/OpenShipService/SimpleType';
        $generateSimpleTypes = new CodeGenerator\GenerateSimpleTypeClasses($exportPath, $wsdlPath, $baseNamespace, $subPackageName);
        $generateSimpleTypes->run();

        //generate ComplexType classes
        $exportPath = $fedexSrcDir . '/OpenShipService/ComplexType';
        $generateComplexTypes = new CodeGenerator\GenerateComplexTypeClasses($exportPath, $wsdlPath, $baseNamespace, $subPackageName);
        $generateComplexTypes->run();

        /*
         * Validation and Commitment Service (v6)
         */
        $wsdlPath = $fedexSrcDir . '/_wsdl/ValidationAvailabilityAndCommitmentService_v8.wsdl';

        $baseNamespace = 'FedEx\ValidationAvailabilityAndCommitmentService';
        $subPackageName = 'Validation Availability And Commitment Service Service';

        //generate Request class
        $pathToRequestClassFile = $fedexSrcDir . '/ValidationAvailabilityAndCommitmentService/Request.php';
        $generateRequestClassFile = new CodeGenerator\GenerateRequestClass($pathToRequestClassFile, $wsdlPath, $baseNamespace, $subPackageName);
        $generateRequestClassFile->run();

        //generate SimpleType classes
        $exportPath = $fedexSrcDir . '/ValidationAvailabilityAndCommitmentService/SimpleType';
        $generateSimpleTypes = new CodeGenerator\GenerateSimpleTypeClasses($exportPath, $wsdlPath, $baseNamespace, $subPackageName);
        $generateSimpleTypes->run();

        //generate ComplexType classes
        $exportPath = $fedexSrcDir . '/ValidationAvailabilityAndCommitmentService/ComplexType';
        $generateComplexTypes = new CodeGenerator\GenerateComplexTypeClasses($exportPath, $wsdlPath, $baseNamespace, $subPackageName);
        $generateComplexTypes->run();

        /*
         * ASYNC Service (v4)
         */
        $wsdlPath = $fedexSrcDir . '/_wsdl/ASYNCService_v4.wsdl';

        $baseNamespace = 'FedEx\AsyncService';
        $subPackageName = 'ASync Service';

        //generate Request class
        $pathToRequestClassFile = $fedexSrcDir . '/AsyncService/Request.php';
        $generateRequestClassFile = new CodeGenerator\GenerateRequestClass($pathToRequestClassFile, $wsdlPath, $baseNamespace, $subPackageName);
        $generateRequestClassFile->run();

        //generate SimpleType classes
        $exportPath = $fedexSrcDir . '/AsyncService/SimpleType';
        $generateSimpleTypes = new CodeGenerator\GenerateSimpleTypeClasses($exportPath, $wsdlPath, $baseNamespace, $subPackageName);
        $generateSimpleTypes->run();

        //generate ComplexType classes
        $exportPath = $fedexSrcDir . '/AsyncService/ComplexType';
        $generateComplexTypes = new CodeGenerator\GenerateComplexTypeClasses($exportPath, $wsdlPath, $baseNamespace, $subPackageName);
        $generateComplexTypes->run();

        /*
         * In Flight Shipment Service (v1)
         */
        $wsdlPath = $fedexSrcDir . '/_wsdl/InFlightShipmentService_v1.wsdl';

        $baseNamespace = 'FedEx\InFlightShipmentService';
        $subPackageName = 'In Flight Shipment Service';

        //generate Request class
        $pathToRequestClassFile = $fedexSrcDir . '/InFlightShipmentService/Request.php';
        $generateRequestClassFile = new CodeGenerator\GenerateRequestClass($pathToRequestClassFile, $wsdlPath, $baseNamespace, $subPackageName);
        $generateRequestClassFile->run();

        //generate SimpleType classes
        $exportPath = $fedexSrcDir . '/InFlightShipmentService/SimpleType';
        $generateSimpleTypes = new CodeGenerator\GenerateSimpleTypeClasses($exportPath, $wsdlPath, $baseNamespace, $subPackageName);
        $generateSimpleTypes->run();

        //generate ComplexType classes
        $exportPath = $fedexSrcDir . '/InFlightShipmentService/ComplexType';
        $generateComplexTypes = new CodeGenerator\GenerateComplexTypeClasses($exportPath, $wsdlPath, $baseNamespace, $subPackageName);
        $generateComplexTypes->run();

        /*
         * List Dangerous Goods Service (v1)
         */
        $wsdlPath = $fedexSrcDir . '/_wsdl/DGLD_v1.wsdl';

        $baseNamespace = 'FedEx\DGLDService';
        $subPackageName = 'List Dangerous Goods Service';

        //generate Request class
        $pathToRequestClassFile = $fedexSrcDir . '/DGLDService/Request.php';
        $generateRequestClassFile = new CodeGenerator\GenerateRequestClass($pathToRequestClassFile, $wsdlPath, $baseNamespace, $subPackageName);
        $generateRequestClassFile->run();

        //generate SimpleType classes
        $exportPath = $fedexSrcDir . '/DGLDService/SimpleType';
        $generateSimpleTypes = new CodeGenerator\GenerateSimpleTypeClasses($exportPath, $wsdlPath, $baseNamespace, $subPackageName);
        $generateSimpleTypes->run();

        //generate ComplexType classes
        $exportPath = $fedexSrcDir . '/DGLDService/ComplexType';
        $generateComplexTypes = new CodeGenerator\GenerateComplexTypeClasses($exportPath, $wsdlPath, $baseNamespace, $subPackageName);
        $generateComplexTypes->run();

        /*
         * Dangerous Goods Data Service (v1)
         */
        $wsdlPath = $fedexSrcDir . '/_wsdl/DGDS_v3.wsdl';

        $baseNamespace = 'FedEx\DGDSService';
        $subPackageName = 'Dangerous Goods Data Service';

        //generate Request class
        $pathToRequestClassFile = $fedexSrcDir . '/DGDSService/Request.php';
        $generateRequestClassFile = new CodeGenerator\GenerateRequestClass($pathToRequestClassFile, $wsdlPath, $baseNamespace, $subPackageName);
        $generateRequestClassFile->run();

        //generate SimpleType classes
        $exportPath = $fedexSrcDir . '/DGDSService/SimpleType';
        $generateSimpleTypes = new CodeGenerator\GenerateSimpleTypeClasses($exportPath, $wsdlPath, $baseNamespace, $subPackageName);
        $generateSimpleTypes->run();

        //generate ComplexType classes
        $exportPath = $fedexSrcDir . '/DGDSService/ComplexType';
        $generateComplexTypes = new CodeGenerator\GenerateComplexTypeClasses($exportPath, $wsdlPath, $baseNamespace, $subPackageName);
        $generateComplexTypes->run();

        /*
         * Country Service (v8)
         */
        $wsdlPath = $fedexSrcDir . '/_wsdl/CountryService_v8.wsdl';

        $baseNamespace = 'FedEx\CountryService';
        $subPackageName = 'Country Service';

        //generate Request class
        $pathToRequestClassFile = $fedexSrcDir . '/CountryService/Request.php';
        $generateRequestClassFile = new CodeGenerator\GenerateRequestClass($pathToRequestClassFile, $wsdlPath, $baseNamespace, $subPackageName);
        $generateRequestClassFile->run();

        //generate SimpleType classes
        $exportPath = $fedexSrcDir . '/CountryService/SimpleType';
        $generateSimpleTypes = new CodeGenerator\GenerateSimpleTypeClasses($exportPath, $wsdlPath, $baseNamespace, $subPackageName);
        $generateSimpleTypes->run();

        //generate ComplexType classes
        $exportPath = $fedexSrcDir . '/CountryService/ComplexType';
        $generateComplexTypes = new CodeGenerator\GenerateComplexTypeClasses($exportPath, $wsdlPath, $baseNamespace, $subPackageName);
        $generateComplexTypes->run();
    }
}
