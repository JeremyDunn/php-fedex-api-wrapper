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
     * @param bool $returnStdClass Return the $stdClass response directly from \SoapClient
     * @return ComplexType\CourierDispatchReply|stdClass
     */
    public function getCreateCourierDispatchReply(ComplexType\CourierDispatchRequest $courierDispatchRequest, $returnStdClass = false)
    {
        $response = $this->getSoapClient()->createCourierDispatch($courierDispatchRequest->toArray());
        if ($returnStdClass) {
            return $response;
        }
        
        $courierDispatchReply = new ComplexType\CourierDispatchReply;
        $courierDispatchReply->populateFromStdClass($response);
        return $courierDispatchReply;
    }
            
    /**
     * Sends the CancelCourierDispatchRequest and returns the response
     *
     * @param ComplexType\CancelCourierDispatchRequest $cancelCourierDispatchRequest
     * @param bool $returnStdClass Return the $stdClass response directly from \SoapClient
     * @return ComplexType\CancelCourierDispatchReply|stdClass
     */
    public function getCancelCourierDispatchReply(ComplexType\CancelCourierDispatchRequest $cancelCourierDispatchRequest, $returnStdClass = false)
    {
        $response = $this->getSoapClient()->cancelCourierDispatch($cancelCourierDispatchRequest->toArray());
        if ($returnStdClass) {
            return $response;
        }
        
        $cancelCourierDispatchReply = new ComplexType\CancelCourierDispatchReply;
        $cancelCourierDispatchReply->populateFromStdClass($response);
        return $cancelCourierDispatchReply;
    }
            
    /**
     * Sends the PickupAvailabilityRequest and returns the response
     *
     * @param ComplexType\PickupAvailabilityRequest $pickupAvailabilityRequest
     * @param bool $returnStdClass Return the $stdClass response directly from \SoapClient
     * @return ComplexType\PickupAvailabilityReply|stdClass
     */
    public function getGetPickupAvailabilityReply(ComplexType\PickupAvailabilityRequest $pickupAvailabilityRequest, $returnStdClass = false)
    {
        $response = $this->getSoapClient()->getPickupAvailability($pickupAvailabilityRequest->toArray());
        if ($returnStdClass) {
            return $response;
        }
        
        $pickupAvailabilityReply = new ComplexType\PickupAvailabilityReply;
        $pickupAvailabilityReply->populateFromStdClass($response);
        return $pickupAvailabilityReply;
    }
}
