<?php
namespace FedEx\CourierDispatchService;
    
use FedEx\AbstractRequest;

/**
 * Request sends the SOAP call to the FedEx servers and returns the response
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Courier Dispatch Service
 */
class Request extends AbstractRequest
{
    const PRODUCTION_URL = 'https://gateway.fedex.com:443/web-services';
    const TESTING_URL = 'https://gatewaybeta.fedex.com:443/web-services';

    protected static $wsdlFileName = 'CourierDispatchService_v3.wsdl';
            
    /**
     * Sends the CourierDispatchRequest and returns the response
     *
     * @param ComplexType\CourierDispatchRequest $courierDispatchRequest
     * @return \stdClass
     */
    public function getCreateCourierDispatchReply(ComplexType\CourierDispatchRequest $courierDispatchRequest)
    {
        return $this->getSoapClient()->createCourierDispatch($courierDispatchRequest->toArray());
    }
            
    /**
     * Sends the CancelCourierDispatchRequest and returns the response
     *
     * @param ComplexType\CancelCourierDispatchRequest $cancelCourierDispatchRequest
     * @return \stdClass
     */
    public function getCancelCourierDispatchReply(ComplexType\CancelCourierDispatchRequest $cancelCourierDispatchRequest)
    {
        return $this->getSoapClient()->cancelCourierDispatch($cancelCourierDispatchRequest->toArray());
    }
            
    /**
     * Sends the PickupAvailabilityRequest and returns the response
     *
     * @param ComplexType\PickupAvailabilityRequest $pickupAvailabilityRequest
     * @return \stdClass
     */
    public function getGetPickupAvailabilityReply(ComplexType\PickupAvailabilityRequest $pickupAvailabilityRequest)
    {
        return $this->getSoapClient()->getPickupAvailability($pickupAvailabilityRequest->toArray());
    }

}
