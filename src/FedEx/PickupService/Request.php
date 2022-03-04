<?php
namespace FedEx\PickupService;
    
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
    const PRODUCTION_URL = 'https://ws.fedex.com:443/web-services/pickup';
    const TESTING_URL = 'https://wsbeta.fedex.com:443/web-services/pickup';

    protected static $wsdlFileName = 'PickupService_v23.wsdl';
            
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
            
    /**
     * Sends the CreatePickupRequest and returns the response
     *
     * @param ComplexType\CreatePickupRequest $createPickupRequest
     * @param bool $returnStdClass Return the $stdClass response directly from \SoapClient
     * @return ComplexType\CreatePickupReply|stdClass
     */
    public function getCreatePickupReply(ComplexType\CreatePickupRequest $createPickupRequest, $returnStdClass = false)
    {
        $response = $this->getSoapClient()->createPickup($createPickupRequest->toArray());
        if ($returnStdClass) {
            return $response;
        }
        
        $createPickupReply = new ComplexType\CreatePickupReply;
        $createPickupReply->populateFromStdClass($response);
        return $createPickupReply;
    }
            
    /**
     * Sends the PickupHistorySummaryRequest and returns the response
     *
     * @param ComplexType\PickupHistorySummaryRequest $pickupHistorySummaryRequest
     * @param bool $returnStdClass Return the $stdClass response directly from \SoapClient
     * @return ComplexType\PickupHistorySummaryReply|stdClass
     */
    public function getPickupHistorySummaryReply(ComplexType\PickupHistorySummaryRequest $pickupHistorySummaryRequest, $returnStdClass = false)
    {
        $response = $this->getSoapClient()->pickupHistorySummary($pickupHistorySummaryRequest->toArray());
        if ($returnStdClass) {
            return $response;
        }
        
        $pickupHistorySummaryReply = new ComplexType\PickupHistorySummaryReply;
        $pickupHistorySummaryReply->populateFromStdClass($response);
        return $pickupHistorySummaryReply;
    }
            
    /**
     * Sends the UpdatePickupRequest and returns the response
     *
     * @param ComplexType\UpdatePickupRequest $updatePickupRequest
     * @param bool $returnStdClass Return the $stdClass response directly from \SoapClient
     * @return ComplexType\UpdatePickupReply|stdClass
     */
    public function getUpdatePickupReply(ComplexType\UpdatePickupRequest $updatePickupRequest, $returnStdClass = false)
    {
        $response = $this->getSoapClient()->updatePickup($updatePickupRequest->toArray());
        if ($returnStdClass) {
            return $response;
        }
        
        $updatePickupReply = new ComplexType\UpdatePickupReply;
        $updatePickupReply->populateFromStdClass($response);
        return $updatePickupReply;
    }
            
    /**
     * Sends the CancelPickupRequest and returns the response
     *
     * @param ComplexType\CancelPickupRequest $cancelPickupRequest
     * @param bool $returnStdClass Return the $stdClass response directly from \SoapClient
     * @return ComplexType\CancelPickupReply|stdClass
     */
    public function getCancelPickupReply(ComplexType\CancelPickupRequest $cancelPickupRequest, $returnStdClass = false)
    {
        $response = $this->getSoapClient()->cancelPickup($cancelPickupRequest->toArray());
        if ($returnStdClass) {
            return $response;
        }
        
        $cancelPickupReply = new ComplexType\CancelPickupReply;
        $cancelPickupReply->populateFromStdClass($response);
        return $cancelPickupReply;
    }
            
    /**
     * Sends the PickupHistoryDetailRequest and returns the response
     *
     * @param ComplexType\PickupHistoryDetailRequest $pickupHistoryDetailRequest
     * @param bool $returnStdClass Return the $stdClass response directly from \SoapClient
     * @return ComplexType\PickupHistoryDetailReply|stdClass
     */
    public function getGetPickupHistoryDetailReply(ComplexType\PickupHistoryDetailRequest $pickupHistoryDetailRequest, $returnStdClass = false)
    {
        $response = $this->getSoapClient()->getPickupHistoryDetail($pickupHistoryDetailRequest->toArray());
        if ($returnStdClass) {
            return $response;
        }
        
        $pickupHistoryDetailReply = new ComplexType\PickupHistoryDetailReply;
        $pickupHistoryDetailReply->populateFromStdClass($response);
        return $pickupHistoryDetailReply;
    }
}
