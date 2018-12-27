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
    const PRODUCTION_URL = 'https://ws.fedex.com:443/web-services/ship';
    const TESTING_URL = 'https://wsbeta.fedex.com:443/web-services/ship';

    protected static $wsdlFileName = 'ShipService_v23.wsdl';
            
    /**
     * Sends the ProcessTagRequest and returns the response
     *
     * @param ComplexType\ProcessTagRequest $processTagRequest
     * @param bool $returnStdClass Return the $stdClass response directly from \SoapClient
     * @return ComplexType\ProcessTagReply|stdClass
     */
    public function getProcessTagReply(ComplexType\ProcessTagRequest $processTagRequest, $returnStdClass = false)
    {
        $response = $this->getSoapClient()->processTag($processTagRequest->toArray());
        if ($returnStdClass) {
            return $response;
        }
        
        $processTagReply = new ComplexType\ProcessTagReply;
        $processTagReply->populateFromStdClass($response);
        return $processTagReply;
    }
            
    /**
     * Sends the ProcessShipmentRequest and returns the response
     *
     * @param ComplexType\ProcessShipmentRequest $processShipmentRequest
     * @param bool $returnStdClass Return the $stdClass response directly from \SoapClient
     * @return ComplexType\ProcessShipmentReply|stdClass
     */
    public function getProcessShipmentReply(ComplexType\ProcessShipmentRequest $processShipmentRequest, $returnStdClass = false)
    {
        $response = $this->getSoapClient()->processShipment($processShipmentRequest->toArray());
        if ($returnStdClass) {
            return $response;
        }
        
        $processShipmentReply = new ComplexType\ProcessShipmentReply;
        $processShipmentReply->populateFromStdClass($response);
        return $processShipmentReply;
    }
            
    /**
     * Sends the DeleteTagRequest and returns the response
     *
     * @param ComplexType\DeleteTagRequest $deleteTagRequest
     * @param bool $returnStdClass Return the $stdClass response directly from \SoapClient
     * @return ComplexType\ShipmentReply|stdClass
     */
    public function getDeleteTagReply(ComplexType\DeleteTagRequest $deleteTagRequest, $returnStdClass = false)
    {
        $response = $this->getSoapClient()->deleteTag($deleteTagRequest->toArray());
        if ($returnStdClass) {
            return $response;
        }
        
        $shipmentReply = new ComplexType\ShipmentReply;
        $shipmentReply->populateFromStdClass($response);
        return $shipmentReply;
    }
            
    /**
     * Sends the DeleteShipmentRequest and returns the response
     *
     * @param ComplexType\DeleteShipmentRequest $deleteShipmentRequest
     * @param bool $returnStdClass Return the $stdClass response directly from \SoapClient
     * @return ComplexType\ShipmentReply|stdClass
     */
    public function getDeleteShipmentReply(ComplexType\DeleteShipmentRequest $deleteShipmentRequest, $returnStdClass = false)
    {
        $response = $this->getSoapClient()->deleteShipment($deleteShipmentRequest->toArray());
        if ($returnStdClass) {
            return $response;
        }
        
        $shipmentReply = new ComplexType\ShipmentReply;
        $shipmentReply->populateFromStdClass($response);
        return $shipmentReply;
    }
            
    /**
     * Sends the ValidateShipmentRequest and returns the response
     *
     * @param ComplexType\ValidateShipmentRequest $validateShipmentRequest
     * @param bool $returnStdClass Return the $stdClass response directly from \SoapClient
     * @return ComplexType\ShipmentReply|stdClass
     */
    public function getValidateShipmentReply(ComplexType\ValidateShipmentRequest $validateShipmentRequest, $returnStdClass = false)
    {
        $response = $this->getSoapClient()->validateShipment($validateShipmentRequest->toArray());
        if ($returnStdClass) {
            return $response;
        }
        
        $shipmentReply = new ComplexType\ShipmentReply;
        $shipmentReply->populateFromStdClass($response);
        return $shipmentReply;
    }
}
