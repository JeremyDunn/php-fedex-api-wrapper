<?php
namespace FedEx\CountryService;
    
use FedEx\AbstractRequest;

/**
 * Request sends the SOAP call to the FedEx servers and returns the response
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Country Service
 */
class Request extends AbstractRequest
{
    const PRODUCTION_URL = 'https://ws.fedex.com:443/web-services/cnty';
    const TESTING_URL = 'https://wsbeta.fedex.com:443/web-services/cnty';

    protected static $wsdlFileName = 'CountryService_v8.wsdl';
            
    /**
     * Sends the ValidatePostalRequest and returns the response
     *
     * @param ComplexType\ValidatePostalRequest $validatePostalRequest
     * @param bool $returnStdClass Return the $stdClass response directly from \SoapClient
     * @return ComplexType\ValidatePostalReply|stdClass
     */
    public function getValidatePostalReply(ComplexType\ValidatePostalRequest $validatePostalRequest, $returnStdClass = false)
    {
        $response = $this->getSoapClient()->validatePostal($validatePostalRequest->toArray());
        if ($returnStdClass) {
            return $response;
        }
        
        $validatePostalReply = new ComplexType\ValidatePostalReply;
        $validatePostalReply->populateFromStdClass($response);
        return $validatePostalReply;
    }
}
