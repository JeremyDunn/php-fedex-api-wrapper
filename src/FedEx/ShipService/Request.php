<?php
namespace FedEx\ShipService;
    
/**
 * Request sends the SOAP call to the FedEx servers and returns the response
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class Request
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
            $this->_wsdlPath = realpath(dirname(__FILE__) . '/../_wsdl/ShipService_v10.wsdl');
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
     * Sends the ProcessTagRequest and returns the response
     *
     * @param ComplexType\RateRequest $rateRequest
     * @return stdClass
     */
    public function getProcessTagReply(ComplexType\ProcessTagRequest $processTagRequest)
    {
        return $this->_soapClient->processTag($processTagRequest->toArray());
    }
       /**
     * Sends the CreatePendingShipmentRequest and returns the response
     *
     * @param ComplexType\RateRequest $rateRequest
     * @return stdClass
     */
    public function getCreatePendingShipmentReply(ComplexType\CreatePendingShipmentRequest $createPendingShipmentRequest)
    {
        return $this->_soapClient->createPendingShipment($createPendingShipmentRequest->toArray());
    }
       /**
     * Sends the CancelPendingShipmentRequest and returns the response
     *
     * @param ComplexType\RateRequest $rateRequest
     * @return stdClass
     */
    public function getCancelPendingShipmentReply(ComplexType\CancelPendingShipmentRequest $cancelPendingShipmentRequest)
    {
        return $this->_soapClient->cancelPendingShipment($cancelPendingShipmentRequest->toArray());
    }
       /**
     * Sends the ProcessShipmentRequest and returns the response
     *
     * @param ComplexType\RateRequest $rateRequest
     * @return stdClass
     */
    public function getProcessShipmentReply(ComplexType\ProcessShipmentRequest $processShipmentRequest)
    {
        return $this->_soapClient->processShipment($processShipmentRequest->toArray());
    }
       /**
     * Sends the DeleteTagRequest and returns the response
     *
     * @param ComplexType\RateRequest $rateRequest
     * @return stdClass
     */
    public function getShipmentReply(ComplexType\DeleteTagRequest $deleteTagRequest)
    {
        return $this->_soapClient->deleteTag($deleteTagRequest->toArray());
    }
       /**
     * Sends the ValidateShipmentRequest and returns the response
     *
     * @param ComplexType\RateRequest $rateRequest
     * @return stdClass
     */
    public function getShipmentReply(ComplexType\ValidateShipmentRequest $validateShipmentRequest)
    {
        return $this->_soapClient->validateShipment($validateShipmentRequest->toArray());
    }
       /**
     * Sends the DeleteShipmentRequest and returns the response
     *
     * @param ComplexType\RateRequest $rateRequest
     * @return stdClass
     */
    public function getShipmentReply(ComplexType\DeleteShipmentRequest $deleteShipmentRequest)
    {
        return $this->_soapClient->deleteShipment($deleteShipmentRequest->toArray());
    }
   

}

   