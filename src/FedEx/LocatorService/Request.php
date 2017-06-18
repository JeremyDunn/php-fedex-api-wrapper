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

    protected static $wsdlFileName = 'LocatorService_v2.wsdl';
            
    /**
     * Sends the FedExLocatorRequest and returns the response
     *
     * @param ComplexType\FedExLocatorRequest $fedExLocatorRequest
     * @param bool $returnStdClass Return the $stdClass response directly from \SoapClient
     * @return ComplexType\FedExLocatorReply|stdClass
     */
    public function getFedExLocatorReply(ComplexType\FedExLocatorRequest $fedExLocatorRequest, $returnStdClass = false)
    {
        $response = $this->getSoapClient()->fedExLocator($fedExLocatorRequest->toArray());
        if ($returnStdClass) {
            return $response;
        }
        
        $fedExLocatorReply = new ComplexType\FedExLocatorReply;
        $fedExLocatorReply->populateFromStdClass($response);
        return $fedExLocatorReply;
    }
}
