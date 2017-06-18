<?php
namespace FedEx\ReturnTagService;
    
use FedEx\AbstractRequest;

/**
 * Request sends the SOAP call to the FedEx servers and returns the response
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Return Tag Service
 */
class Request extends AbstractRequest
{
    const PRODUCTION_URL = 'https://gateway.fedex.com:443/web-services';
    const TESTING_URL = 'https://gatewaybeta.fedex.com:443/web-services';

    protected static $wsdlFileName = 'ReturnTagService_v1.wsdl';
            
    /**
     * Sends the ExpressTagAvailabilityRequest and returns the response
     *
     * @param ComplexType\ExpressTagAvailabilityRequest $expressTagAvailabilityRequest
     * @param bool $returnStdClass Return the $stdClass response directly from \SoapClient
     * @return ComplexType\ExpressTagAvailabilityReply|stdClass
     */
    public function getGetExpressTagAvailabilityReply(ComplexType\ExpressTagAvailabilityRequest $expressTagAvailabilityRequest, $returnStdClass = false)
    {
        $response = $this->getSoapClient()->getExpressTagAvailability($expressTagAvailabilityRequest->toArray());
        if ($returnStdClass) {
            return $response;
        }
        
        $expressTagAvailabilityReply = new ComplexType\ExpressTagAvailabilityReply;
        $expressTagAvailabilityReply->populateFromStdClass($response);
        return $expressTagAvailabilityReply;
    }
}
