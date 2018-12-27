<?php
namespace FedEx\RateService;
    
use FedEx\AbstractRequest;

/**
 * Request sends the SOAP call to the FedEx servers and returns the response
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class Request extends AbstractRequest
{
    const PRODUCTION_URL = 'https://ws.fedex.com:443/web-services/rate';
    const TESTING_URL = 'https://wsbeta.fedex.com:443/web-services/rate';

    protected static $wsdlFileName = 'RateService_v24.wsdl';
            
    /**
     * Sends the RateRequest and returns the response
     *
     * @param ComplexType\RateRequest $rateRequest
     * @param bool $returnStdClass Return the $stdClass response directly from \SoapClient
     * @return ComplexType\RateReply|stdClass
     */
    public function getGetRatesReply(ComplexType\RateRequest $rateRequest, $returnStdClass = false)
    {
        $response = $this->getSoapClient()->getRates($rateRequest->toArray());
        if ($returnStdClass) {
            return $response;
        }
        
        $rateReply = new ComplexType\RateReply;
        $rateReply->populateFromStdClass($response);
        return $rateReply;
    }
}
