<?php
namespace FedEx\AddressValidationService;
    
use FedEx\AbstractRequest;

/**
 * Request sends the SOAP call to the FedEx servers and returns the response
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Address Validation Service
 */
class Request extends AbstractRequest
{
    const PRODUCTION_URL = 'https://ws.fedex.com:443/web-services/addressvalidation';
    const TESTING_URL = 'https://wsbeta.fedex.com:443/web-services/addressvalidation';

    protected static $wsdlFileName = 'AddressValidationService_v4.wsdl';
            
    /**
     * Sends the AddressValidationRequest and returns the response
     *
     * @param ComplexType\AddressValidationRequest $addressValidationRequest
     * @param bool $returnStdClass Return the $stdClass response directly from \SoapClient
     * @return ComplexType\AddressValidationReply|stdClass
     */
    public function getAddressValidationReply(ComplexType\AddressValidationRequest $addressValidationRequest, $returnStdClass = false)
    {
        $response = $this->getSoapClient()->addressValidation($addressValidationRequest->toArray());
        if ($returnStdClass) {
            return $response;
        }
        
        $addressValidationReply = new ComplexType\AddressValidationReply;
        $addressValidationReply->populateFromStdClass($response);
        return $addressValidationReply;
    }
}
