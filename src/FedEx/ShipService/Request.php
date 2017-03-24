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

    protected static $wsdlFileName = 'ShipService_v12.wsdl';
            
    /**
     * Sends the CreatePendingShipmentRequest and returns the response
     *
     * @param ComplexType\CreatePendingShipmentRequest $createPendingShipmentRequest
     * @return stdClass
     */
    public function getCreatePendingShipmentReply(ComplexType\CreatePendingShipmentRequest $createPendingShipmentRequest)
    {
        return $this->getSoapClient()->createPendingShipment($createPendingShipmentRequest->toArray());
    }
            
    /**
     * Sends the ProcessTagRequest and returns the response
     *
     * @param ComplexType\ProcessTagRequest $processTagRequest
     * @return stdClass
     */
    public function getProcessTagReply(ComplexType\ProcessTagRequest $processTagRequest)
    {
        return $this->getSoapClient()->processTag($processTagRequest->toArray());
    }
            
    /**
     * Sends the ProcessShipmentRequest and returns the response
     *
     * @param ComplexType\ProcessShipmentRequest $processShipmentRequest
     * @return stdClass
     */
    public function getProcessShipmentReply(ComplexType\ProcessShipmentRequest $processShipmentRequest)
    {
        return $this->getSoapClient()->processShipment($processShipmentRequest->toArray());
    }
            
    /**
     * Sends the CancelPendingShipmentRequest and returns the response
     *
     * @param ComplexType\CancelPendingShipmentRequest $cancelPendingShipmentRequest
     * @return stdClass
     */
    public function getCancelPendingShipmentReply(ComplexType\CancelPendingShipmentRequest $cancelPendingShipmentRequest)
    {
        return $this->getSoapClient()->cancelPendingShipment($cancelPendingShipmentRequest->toArray());
    }
            
    /**
     * Sends the DeleteTagRequest and returns the response
     *
     * @param ComplexType\DeleteTagRequest $deleteTagRequest
     * @return stdClass
     */
    public function getDeleteTagReply(ComplexType\DeleteTagRequest $deleteTagRequest)
    {
        return $this->getSoapClient()->deleteTag($deleteTagRequest->toArray());
    }
            
    /**
     * Sends the DeleteShipmentRequest and returns the response
     *
     * @param ComplexType\DeleteShipmentRequest $deleteShipmentRequest
     * @return stdClass
     */
    public function getDeleteShipmentReply(ComplexType\DeleteShipmentRequest $deleteShipmentRequest)
    {
        return $this->getSoapClient()->deleteShipment($deleteShipmentRequest->toArray());
    }
            
    /**
     * Sends the ValidateShipmentRequest and returns the response
     *
     * @param ComplexType\ValidateShipmentRequest $validateShipmentRequest
     * @return stdClass
     */
    public function getValidateShipmentReply(ComplexType\ValidateShipmentRequest $validateShipmentRequest)
    {
        return $this->getSoapClient()->validateShipment($validateShipmentRequest->toArray());
    }

}
