<?php
namespace FedEx\CloseService;
    
use FedEx\AbstractRequest;

/**
 * Request sends the SOAP call to the FedEx servers and returns the response
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Close Service
 */
class Request extends AbstractRequest
{
    const PRODUCTION_URL = 'https://gateway.fedex.com:443/web-services/close';
    const TESTING_URL = 'https://gatewaybeta.fedex.com:443/web-services/close';

    protected $wsdlFileName = 'CloseService_v2.wsdl';
            
    /**
     * Sends the SmartPostCloseRequest and returns the response
     *
     * @param ComplexType\SmartPostCloseRequest $smartPostCloseRequest
     * @return stdClass
     */
    public function getSmartPostCloseReply(ComplexType\SmartPostCloseRequest $smartPostCloseRequest)
    {
        return $this->getSoapClient()->smartPostClose($smartPostCloseRequest->toArray());
    }
            
    /**
     * Sends the GroundCloseRequest and returns the response
     *
     * @param ComplexType\GroundCloseRequest $groundCloseRequest
     * @return stdClass
     */
    public function getGroundCloseReply(ComplexType\GroundCloseRequest $groundCloseRequest)
    {
        return $this->getSoapClient()->groundClose($groundCloseRequest->toArray());
    }
            
    /**
     * Sends the GroundCloseReportsReprintRequest and returns the response
     *
     * @param ComplexType\GroundCloseReportsReprintRequest $groundCloseReportsReprintRequest
     * @return stdClass
     */
    public function getGroundCloseReportsReprintReply(ComplexType\GroundCloseReportsReprintRequest $groundCloseReportsReprintRequest)
    {
        return $this->getSoapClient()->groundCloseReportsReprint($groundCloseReportsReprintRequest->toArray());
    }
            
    /**
     * Sends the GroundCloseWithDocumentsRequest and returns the response
     *
     * @param ComplexType\GroundCloseWithDocumentsRequest $groundCloseWithDocumentsRequest
     * @return stdClass
     */
    public function getGroundCloseWithDocumentsReply(ComplexType\GroundCloseWithDocumentsRequest $groundCloseWithDocumentsRequest)
    {
        return $this->getSoapClient()->groundCloseWithDocuments($groundCloseWithDocumentsRequest->toArray());
    }
            
    /**
     * Sends the ReprintGroundCloseDocumentsRequest and returns the response
     *
     * @param ComplexType\ReprintGroundCloseDocumentsRequest $reprintGroundCloseDocumentsRequest
     * @return stdClass
     */
    public function getReprintGroundCloseDocumentsReply(ComplexType\ReprintGroundCloseDocumentsRequest $reprintGroundCloseDocumentsRequest)
    {
        return $this->getSoapClient()->reprintGroundCloseDocuments($reprintGroundCloseDocumentsRequest->toArray());
    }

}
