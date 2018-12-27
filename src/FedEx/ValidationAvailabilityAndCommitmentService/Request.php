<?php
namespace FedEx\ValidationAvailabilityAndCommitmentService;
    
use FedEx\AbstractRequest;

/**
 * Request sends the SOAP call to the FedEx servers and returns the response
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Validation Availability And Commitment Service Service
 */
class Request extends AbstractRequest
{
    const PRODUCTION_URL = 'https://ws.fedex.com:443/web-services/ValidationAvailabilityAndCommitment';
    const TESTING_URL = 'https://wsbeta.fedex.com:443/web-services/ValidationAvailabilityAndCommitment';

    protected static $wsdlFileName = 'ValidationAvailabilityAndCommitmentService_v8.wsdl';
            
    /**
     * Sends the ServiceAvailabilityRequest and returns the response
     *
     * @param ComplexType\ServiceAvailabilityRequest $serviceAvailabilityRequest
     * @param bool $returnStdClass Return the $stdClass response directly from \SoapClient
     * @return ComplexType\ServiceAvailabilityReply|stdClass
     */
    public function getServiceAvailabilityReply(ComplexType\ServiceAvailabilityRequest $serviceAvailabilityRequest, $returnStdClass = false)
    {
        $response = $this->getSoapClient()->serviceAvailability($serviceAvailabilityRequest->toArray());
        if ($returnStdClass) {
            return $response;
        }
        
        $serviceAvailabilityReply = new ComplexType\ServiceAvailabilityReply;
        $serviceAvailabilityReply->populateFromStdClass($response);
        return $serviceAvailabilityReply;
    }
}
