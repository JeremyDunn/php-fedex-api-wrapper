<?php
namespace FedEx\LocatorService;
    
use FedEx\AbstractRequest;

/**
 * Request sends the SOAP call to the FedEx servers and returns the response
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Locator Service
 */
class Request extends AbstractRequest
{
    const PRODUCTION_URL = 'https://ws.fedex.com:443/web-services';
    const TESTING_URL = 'https://wsbeta.fedex.com:443/web-services';

    protected $wsdlFileName = 'LocatorService_v2.wsdl';
            
    /**
     * Sends the FedExLocatorRequest and returns the response
     *
     * @param ComplexType\FedExLocatorRequest $fedExLocatorRequest
     * @return stdClass
     */
    public function getFedExLocatorReply(ComplexType\FedExLocatorRequest $fedExLocatorRequest)
    {
        return $this->getSoapClient()->fedExLocator($fedExLocatorRequest->toArray());
    }

}
