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
    protected $wsdlFileName = 'AddressValidationService_v2.wsdl';
            
    /**
     * Sends the AddressValidationRequest and returns the response
     *
     * @param ComplexType\AddressValidationRequest $addressValidationRequest
     * @return stdClass
     */
    public function getAddressValidationReply(ComplexType\AddressValidationRequest $addressValidationRequest)
    {
        return $this->getSoapClient()->addressValidation($addressValidationRequest->toArray());
    }

}
