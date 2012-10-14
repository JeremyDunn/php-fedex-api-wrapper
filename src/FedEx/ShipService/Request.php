<?php
namespace FedEx\ShipService;
    
use FedEx\AbstractRequest;

/**
 * Request sends the SOAP call to the FedEx servers and returns the response
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class Request extends AbstractRequest
{
    /**
     * WSDL Path
     *
     * @var string
     */
    protected $_wsdlPath;

    /**
     * SoapClient object
     *
     * @var SoapClient
     */
    protected $_soapClient;

    /**
     * Constructor
     *
     * @param string $wsdlPath
     */
    public function __construct($wsdlPath = null)
    {
        if (null != $wsdlPath) {
            $this->_wsdlPath = $wsdlPath;
        } else {
            $this->_wsdlPath = realpath(dirname(__FILE__) . '/../_wsdl/ShipService_v12.wsdl');
        }

        $this->_soapClient = new \SoapClient($this->_wsdlPath, array('trace' => true));
    }

    /**
     * Returns the SoapClient instance
     *
     * @return \SoapClient
     */
    public function getSoapClient()
    {
        return $this->_soapClient;
    }

    /**
     * Sends the CreatePendingShipmentRequest and returns the response
     *
     * @param ComplexType\CreatePendingShipmentRequest $createPendingShipmentRequest 
     * @return stdClass
     */
    public function getCreatePendingShipmentReply(ComplexType\CreatePendingShipmentRequest $createPendingShipmentRequest)
    {
        return $this->_soapClient->createPendingShipment($createPendingShipmentRequest->toArray());
    }
       /**
     * Sends the ProcessTagRequest and returns the response
     *
     * @param ComplexType\ProcessTagRequest $processTagRequest 
     * @return stdClass
     */
    public function getProcessTagReply(ComplexType\ProcessTagRequest $processTagRequest)
    {
        return $this->_soapClient->processTag($processTagRequest->toArray());
    }
       /**
     * Sends the ProcessShipmentRequest and returns the response
     *
     * @param ComplexType\ProcessShipmentRequest $processShipmentRequest 
     * @return stdClass
     */
    public function getProcessShipmentReply(ComplexType\ProcessShipmentRequest $processShipmentRequest)
    {
        return $this->_soapClient->processShipment($processShipmentRequest->toArray());
    }
       /**
     * Sends the CancelPendingShipmentRequest and returns the response
     *
     * @param ComplexType\CancelPendingShipmentRequest $cancelPendingShipmentRequest 
     * @return stdClass
     */
    public function getCancelPendingShipmentReply(ComplexType\CancelPendingShipmentRequest $cancelPendingShipmentRequest)
    {
        return $this->_soapClient->cancelPendingShipment($cancelPendingShipmentRequest->toArray());
    }
       /**
     * Sends the DeleteTagRequest and returns the response
     *
     * @param ComplexType\DeleteTagRequest $deleteTagRequest 
     * @return stdClass
     */
    public function getDeleteTagReply(ComplexType\DeleteTagRequest $deleteTagRequest)
    {
        return $this->_soapClient->deleteTag($deleteTagRequest->toArray());
    }
       /**
     * Sends the DeleteShipmentRequest and returns the response
     *
     * @param ComplexType\DeleteShipmentRequest $deleteShipmentRequest 
     * @return stdClass
     */
    public function getDeleteShipmentReply(ComplexType\DeleteShipmentRequest $deleteShipmentRequest)
    {
        return $this->_soapClient->deleteShipment($deleteShipmentRequest->toArray());
    }
       /**
     * Sends the ValidateShipmentRequest and returns the response
     *
     * @param ComplexType\ValidateShipmentRequest $validateShipmentRequest 
     * @return stdClass
     */
    public function getValidateShipmentReply(ComplexType\ValidateShipmentRequest $validateShipmentRequest)
    {
        return $this->_soapClient->validateShipment($validateShipmentRequest->toArray());
    }
   

}

   