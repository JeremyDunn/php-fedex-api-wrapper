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
    protected $wsdlFileName = 'RateService_v10.wsdl';
            
    /**
     * Sends the RateRequest and returns the response
     *
     * @param ComplexType\RateRequest $rateRequest
     * @return stdClass
     */
    public function getGetRatesReply(ComplexType\RateRequest $rateRequest)
    {
        return $this->getSoapClient()->getRates($rateRequest->toArray());
    }

}
