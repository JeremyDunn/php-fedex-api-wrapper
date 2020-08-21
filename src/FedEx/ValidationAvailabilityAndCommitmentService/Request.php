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

    protected static $wsdlFileName = 'ValidationAvailabilityAndCommitmentService_v14.wsdl';
            
    /**
     * Sends the GetAllServicesAndPackagingRequest and returns the response
     *
     * @param ComplexType\GetAllServicesAndPackagingRequest $getAllServicesAndPackagingRequest
     * @param bool $returnStdClass Return the $stdClass response directly from \SoapClient
     * @return ComplexType\GetAllServicesAndPackagingReply|stdClass
     */
    public function getGetAllServicesAndPackagingReply(ComplexType\GetAllServicesAndPackagingRequest $getAllServicesAndPackagingRequest, $returnStdClass = false)
    {
        $response = $this->getSoapClient()->getAllServicesAndPackaging($getAllServicesAndPackagingRequest->toArray());
        if ($returnStdClass) {
            return $response;
        }
        
        $getAllServicesAndPackagingReply = new ComplexType\GetAllServicesAndPackagingReply;
        $getAllServicesAndPackagingReply->populateFromStdClass($response);
        return $getAllServicesAndPackagingReply;
    }
            
    /**
     * Sends the GetAllSpecialServicesRequest and returns the response
     *
     * @param ComplexType\GetAllSpecialServicesRequest $getAllSpecialServicesRequest
     * @param bool $returnStdClass Return the $stdClass response directly from \SoapClient
     * @return ComplexType\GetAllSpecialServicesReply|stdClass
     */
    public function getGetAllSpecialServicesReply(ComplexType\GetAllSpecialServicesRequest $getAllSpecialServicesRequest, $returnStdClass = false)
    {
        $response = $this->getSoapClient()->getAllSpecialServices($getAllSpecialServicesRequest->toArray());
        if ($returnStdClass) {
            return $response;
        }
        
        $getAllSpecialServicesReply = new ComplexType\GetAllSpecialServicesReply;
        $getAllSpecialServicesReply->populateFromStdClass($response);
        return $getAllSpecialServicesReply;
    }
            
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
