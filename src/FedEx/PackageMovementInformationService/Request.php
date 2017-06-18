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
     * @return \stdClass
     */
    public function getPostalCodeInquiryReply(ComplexType\PostalCodeInquiryRequest $postalCodeInquiryRequest)
    {
        return $this->getSoapClient()->postalCodeInquiry($postalCodeInquiryRequest->toArray());
    }
            
    /**
     * Sends the ServiceAvailabilityRequest and returns the response
     *
     * @param ComplexType\ServiceAvailabilityRequest $serviceAvailabilityRequest
     * @return \stdClass
     */
    public function getServiceAvailabilityReply(ComplexType\ServiceAvailabilityRequest $serviceAvailabilityRequest)
    {
        return $this->getSoapClient()->serviceAvailability($serviceAvailabilityRequest->toArray());
    }

}
