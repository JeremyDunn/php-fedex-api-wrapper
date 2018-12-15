<?php
namespace FedEx\LocationsService;
    
use FedEx\AbstractRequest;

/**
 * Request sends the SOAP call to the FedEx servers and returns the response
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Locations Service
 */
class Request extends AbstractRequest
{
    const PRODUCTION_URL = 'https://ws.fedex.com:443/web-services/locs';
    const TESTING_URL = 'https://wsbeta.fedex.com:443/web-services/locs';

    protected static $wsdlFileName = 'LocationsService_v9.wsdl';
            
    /**
     * Sends the SearchLocationsRequest and returns the response
     *
     * @param ComplexType\SearchLocationsRequest $searchLocationsRequest
     * @param bool $returnStdClass Return the $stdClass response directly from \SoapClient
     * @return ComplexType\SearchLocationsReply|stdClass
     */
    public function getSearchLocationsReply(ComplexType\SearchLocationsRequest $searchLocationsRequest, $returnStdClass = false)
    {
        $response = $this->getSoapClient()->searchLocations($searchLocationsRequest->toArray());
        if ($returnStdClass) {
            return $response;
        }
        
        $searchLocationsReply = new ComplexType\SearchLocationsReply;
        $searchLocationsReply->populateFromStdClass($response);
        return $searchLocationsReply;
    }
}
