<?php
namespace Fedex\Utility;

use Fedex\Utility\AbstractGenerate;

class GenerateRequestClass extends AbstractGenerate
{
    /**
     *
     * @var string
     */
    protected $_wsdlPath;
    
    /**
     *
     * @var string
     */
    protected $_pathToRequestClassFile;
    
    /**
     *
     * @var string
     */
    protected $_namespace;
    
    /**
     *
     * @var string
     */
    protected $_subPackageName;
    
    
    public function __construct($pathToRequestClassFile, $wsdlPath, $namespace, $subPackageName)
    {
        if (file_exists($wsdlPath)) {
            $this->_wsdlPath = $wsdlPath;
        } else {
            throw new Exception('path to wsdl file is invalid');
        }
        
        
            $this->_pathToRequestClassFile = $pathToRequestClassFile;
        
        
        $this->_namespace = $namespace;
        
        $this->_subPackageName = $subPackageName;
        
    }
    
    public function run()
    {
        $soapClient = new \Soapclient($this->_wsdlPath, array('trace' => true));
        
        $soapFunctions = $soapClient->__getFunctions();
        
        $requestFunctionDefinitions = array();
        
        foreach ($soapFunctions as $soapFunctionDescription) {
            
            $thisDefinition = array();
            
            $functionDefinition = '';
            
            $parts = explode(' ', $soapFunctionDescription);
            print_r($parts);
            $functionDefinition = 'public function get' . $parts[0];
            
            $thisDefinition['soapFunction'] = substr($parts[1], 0, stripos($parts[1], '('));
            
            $requestObjectName = substr($parts[1], stripos($parts[1], '(') + 1);
            $thisDefinition['requestObjectName'] = $requestObjectName;
            
            $arg1Type = 'ComplexType\\' . $requestObjectName;
            $arg1VariableName = '$' . lcfirst($requestObjectName);
            
            $thisDefinition['arg1VariableName'] = $arg1VariableName;
            
            $functionDefinition .= "($arg1Type $arg1VariableName)";
            
            $thisDefinition['functionDefinition'] = $functionDefinition;
            
            $requestFunctionDefinitions[] = $thisDefinition;
        }
        
        print_r($requestFunctionDefinitions);
        
        $fh = fopen($this->_pathToRequestClassFile, 'w');
        
        $fileBody = $this->_getGeneratedFileBody($requestFunctionDefinitions);
        
        fwrite($fh, $fileBody);
        fclose($fh);
        
    }
    
    protected function _getGeneratedFileBody(array $requestFunctionDefinitions)
    {
        $relativePathToWSDL = $this->getRelativePath($this->_pathToRequestClassFile, $this->_wsdlPath);

        $requestFunctions = '';
        
        foreach ($requestFunctionDefinitions as $functionDefinition)
        {
            $requestFunctions .= <<<TEXT
    /**
     * Sends the {$functionDefinition['requestObjectName']} and returns the response
     *
     * @param ComplexType\RateRequest $rateRequest
     * @return stdClass
     */
    {$functionDefinition[functionDefinition]}
    {
        return \$this->_soapClient->{$functionDefinition['soapFunction']}({$functionDefinition['arg1VariableName']}->toArray());
    }
   
TEXT;
        }
        
        
        $fileBody = <<<TEXT
<?php
namespace {$this->_namespace};
    
/**
 * Request sends the SOAP call to the FedEx servers and returns the response
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information
 */
class RequestTest
{
    /**
     * WSDL Path
     *
     * @var string
     */
    protected \$_wsdlPath;

    /**
     * SoapClient object
     *
     * @var SoapClient
     */
    protected \$_soapClient;

    /**
     * Constructor
     *
     * @param string \$wsdlPath
     */
    public function __construct(\$wsdlPath = null)
    {
        if (null != \$wsdlPath) {
            \$this->_wsdlPath = \$wsdlPath;
        } else {
            \$this->_wsdlPath = realpath(dirname(__FILE__) . '/$relativePathToWSDL');
        }

        \$this->_soapClient = new \SoapClient(\$this->_wsdlPath, array('trace' => true));
    }

    /**
     * Returns the SoapClient instance
     *
     * @return \SoapClient
     */
    public function getSoapClient()
    {
        return \$this->_soapClient;
    }

$requestFunctions

}

   
TEXT;

        return $fileBody;
    }
    
    
}