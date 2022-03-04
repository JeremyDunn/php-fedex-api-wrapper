<?php
namespace FedEx\PackageMovementInformationService;
    
use FedEx\AbstractRequest;

/**
 * Request sends the SOAP call to the FedEx servers and returns the response
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information Service
 */
class Request extends AbstractRequest
{
    const PRODUCTION_URL = 'https://ws.fedex.com:443/web-services';
    const TESTING_URL = 'https://wsbeta.fedex.com:443/web-services';

    protected static $wsdlFileName = 'PackageMovementInformationService_v5.wsdl';
            
    /**
     * Sends the PostalCodeInquiryRequest and returns the response
     *
     * @param ComplexType\PostalCodeInquiryRequest $postalCodeInquiryRequest
     * @param bool $returnStdClass Return the $stdClass response directly from \SoapClient
     * @return ComplexType\PostalCodeInquiryReply|stdClass
     */
    public function getPostalCodeInquiryReply(ComplexType\PostalCodeInquiryRequest $postalCodeInquiryRequest, $returnStdClass = false)
    {
        $response = $this->getSoapClient()->postalCodeInquiry($postalCodeInquiryRequest->toArray());
        if ($returnStdClass) {
            return $response;
        }
        
        $postalCodeInquiryReply = new ComplexType\PostalCodeInquiryReply;
        $postalCodeInquiryReply->populateFromStdClass($response);
        return $postalCodeInquiryReply;
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
