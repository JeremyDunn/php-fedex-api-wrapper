<?php
namespace FedEx\Pickup;
    
use FedEx\AbstractRequest;

/**
 * Request sends the SOAP call to the FedEx servers and returns the response
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class Request extends AbstractRequest
{
    const PRODUCTION_URL = 'https://ws.fedex.com:443/web-services';
    const TESTING_URL = 'https://wsbeta.fedex.com:443/web-services';

    protected static $wsdlFileName = 'PickupService_v3.wsdl';
            
    /**
     * Sends the PickupAvailabilityRequest and returns the response
     *
     * @param ComplexType\PickupAvailabilityRequest $pickupAvailabilityRequest
     * @return stdClass
     */
    public function getGetPickupAvailabilityReply(ComplexType\PickupAvailabilityRequest $pickupAvailabilityRequest)
    {
        return $this->getSoapClient()->getPickupAvailability($pickupAvailabilityRequest->toArray());
    }
            
    /**
     * Sends the CreatePickupRequest and returns the response
     *
     * @param ComplexType\CreatePickupRequest $createPickupRequest
     * @return stdClass
     */
    public function getCreatePickupReply(ComplexType\CreatePickupRequest $createPickupRequest)
    {
        return $this->getSoapClient()->createPickup($createPickupRequest->toArray());
    }
            
    /**
     * Sends the CancelPickupRequest and returns the response
     *
     * @param ComplexType\CancelPickupRequest $cancelPickupRequest
     * @return stdClass
     */
    public function getCancelPickupReply(ComplexType\CancelPickupRequest $cancelPickupRequest)
    {
        return $this->getSoapClient()->cancelPickup($cancelPickupRequest->toArray());
    }

}
