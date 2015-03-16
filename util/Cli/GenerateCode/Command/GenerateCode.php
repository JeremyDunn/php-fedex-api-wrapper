<?php
namespace FedEx\Utility\Cli\GenerateCode\Command;

use FedEx\Utility\CodeGenerator,
    Symfony\Component\Console\Input\InputArgument,
    Symfony\Component\Console\Input\InputOption,
    Symfony\Component\Console,
    Symfony\Component\Console\Input\InputInterface,
    Symfony\Component\Console\Output\OutputInterface;

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
     * Executes the command
     * 
     * @param \Symfony\Component\Console\Input\InputInterface $input
     * @param \Symfony\Component\Console\Output\OutputInterface $output
     * @throws \Exception
     */
    protected function execute(InputInterface $input, OutputInterface $output) {

        if (!isset($_SERVER['PWD'])) {
            throw new \Exception('Cannot determin current working directory.  Make sure you run this script from command line.');
        }
        
        $fedexSrcDir = realpath(dirname($_SERVER['PWD'] . '/' . $_SERVER['PHP_SELF']) . '/../src/FedEx');
        
        if (!is_writable($fedexSrcDir)) {
            throw new \Exception('Cannot write to directory: ' . $fedexSrcDir);
        }
        
        //RateRequest
        $wsdlPath = $fedexSrcDir . '/_wsdl/RateService_v10.wsdl';

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
        $wsdlPath = $fedexSrcDir . '/_wsdl/TrackService_v5.wsdl';

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
        $wsdlPath = $fedexSrcDir . '/_wsdl/AddressValidationService_v2.wsdl';

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


        //LocatorService
        $wsdlPath = $fedexSrcDir . '/_wsdl/LocatorService_v2.wsdl';

        $baseNamespace = 'FedEx\LocatorService';
        $subPackageName = 'Locator Service';

        //generate Request class
        $pathToRequestClassFile = $fedexSrcDir . '/LocatorService/Request.php';
        $generateRequestClassFile = new CodeGenerator\GenerateRequestClass($pathToRequestClassFile, $wsdlPath, $baseNamespace, $subPackageName);
        $generateRequestClassFile->run();

        //generate SimpleType classes
        $exportPath = $fedexSrcDir . '/LocatorService/SimpleType';
        $generateSimpleTypes = new CodeGenerator\GenerateSimpleTypeClasses($exportPath, $wsdlPath, $baseNamespace, $subPackageName);
        $generateSimpleTypes->run();

        //generate ComplexType classes
        $exportPath = $fedexSrcDir . '/LocatorService/ComplexType';
        $generateComplexTypes = new CodeGenerator\GenerateComplexTypeClasses($exportPath, $wsdlPath, $baseNamespace, $subPackageName);
        $generateComplexTypes->run();


        //ShipService
        $wsdlPath = $fedexSrcDir . '/_wsdl/ShipService_v12.wsdl';

        $baseNamespace = 'FedEx\ShipService';
        $subPackageName = 'Ship Service';

        //generate Request class
        $pathToRequestClassFile = $fedexSrcDir . '/ShipService/Request.php';
        $generateRequestClassFile = new CodeGenerator\GenerateRequestClass($pathToRequestClassFile, $wsdlPath, $baseNamespace, $subPackageName);
        $generateRequestClassFile->run();

        //generate SimpleType classes
        $exportPath = $fedexSrcDir. '/ShipService/SimpleType';
        $generateSimpleTypes = new CodeGenerator\GenerateSimpleTypeClasses($exportPath, $wsdlPath, $baseNamespace, $subPackageName);
        $generateSimpleTypes->run();

        //generate ComplexType classes
        $exportPath = $fedexSrcDir.  '/ShipService/ComplexType';
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
        $exportPath = $fedexSrcDir. '/CourierDispatchService/SimpleType';
        $generateSimpleTypes = new CodeGenerator\GenerateSimpleTypeClasses($exportPath, $wsdlPath, $baseNamespace, $subPackageName);
        $generateSimpleTypes->run();

        //generate ComplexType classes
        $exportPath = $fedexSrcDir . '/CourierDispatchService/ComplexType';
        $generateComplexTypes = new CodeGenerator\GenerateComplexTypeClasses($exportPath, $wsdlPath, $baseNamespace, $subPackageName);
        $generateComplexTypes->run();


        //CloseService
        $wsdlPath = $fedexSrcDir . '/_wsdl/CloseService_v2.wsdl';

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

        $exportPath = $fedexSrcDir. '/CloseService/ComplexType';
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
        $exportPath = $fedexSrcDir. '/ReturnTagService/SimpleType';
        $generateSimpleTypes = new CodeGenerator\GenerateSimpleTypeClasses($exportPath, $wsdlPath, $baseNamespace, $subPackageName);
        $generateSimpleTypes->run();

        //generate ComplexType classes
        $exportPath = $fedexSrcDir . '/ReturnTagService/ComplexType';
        $baseNamespace = 'FedEx\ReturnTagService';
        $subPackageName = 'Return Tag Service';

        $generateComplexTypes = new CodeGenerator\GenerateComplexTypeClasses($exportPath, $wsdlPath, $baseNamespace, $subPackageName);
        $generateComplexTypes->run();


        //UploadDocumentService
        $wsdlPath = $fedexSrcDir . '/_wsdl/UploadDocumentService_v1.wsdl';

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
        $wsdlPath = $fedexSrcDir . '/_wsdl/PickupService_v3.wsdl';

        $baseNamespace = 'FedEx\Pickup';
        $subPackageName = 'Pickup Service';

        //generate Request class
        $pathToRequestClassFile = $fedexSrcDir. '/PickupService/Request.php';
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
        
    }
}