<?php
namespace FedEx\TrackService;
    
use FedEx\AbstractRequest;

/**
 * Request sends the SOAP call to the FedEx servers and returns the response
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Track Service
 */
class Request extends AbstractRequest
{
    const PRODUCTION_URL = 'https://ws.fedex.com:443/web-services/track';
    const TESTING_URL = 'https://wsbeta.fedex.com:443/web-services/track';

    protected static $wsdlFileName = 'TrackService_v16.wsdl';
            
    /**
     * Sends the TrackRequest and returns the response
     *
     * @param ComplexType\TrackRequest $trackRequest
     * @param bool $returnStdClass Return the $stdClass response directly from \SoapClient
     * @return ComplexType\TrackReply|stdClass
     */
    public function getTrackReply(ComplexType\TrackRequest $trackRequest, $returnStdClass = false)
    {
        $response = $this->getSoapClient()->track($trackRequest->toArray());
        if ($returnStdClass) {
            return $response;
        }
        
        $trackReply = new ComplexType\TrackReply;
        $trackReply->populateFromStdClass($response);
        return $trackReply;
    }
            
    /**
     * Sends the GetTrackingDocumentsRequest and returns the response
     *
     * @param ComplexType\GetTrackingDocumentsRequest $getTrackingDocumentsRequest
     * @param bool $returnStdClass Return the $stdClass response directly from \SoapClient
     * @return ComplexType\GetTrackingDocumentsReply|stdClass
     */
    public function getGetTrackingDocumentsReply(ComplexType\GetTrackingDocumentsRequest $getTrackingDocumentsRequest, $returnStdClass = false)
    {
        $response = $this->getSoapClient()->getTrackingDocuments($getTrackingDocumentsRequest->toArray());
        if ($returnStdClass) {
            return $response;
        }
        
        $getTrackingDocumentsReply = new ComplexType\GetTrackingDocumentsReply;
        $getTrackingDocumentsReply->populateFromStdClass($response);
        return $getTrackingDocumentsReply;
    }
            
    /**
     * Sends the SendNotificationsRequest and returns the response
     *
     * @param ComplexType\SendNotificationsRequest $sendNotificationsRequest
     * @param bool $returnStdClass Return the $stdClass response directly from \SoapClient
     * @return ComplexType\SendNotificationsReply|stdClass
     */
    public function getSendNotificationsReply(ComplexType\SendNotificationsRequest $sendNotificationsRequest, $returnStdClass = false)
    {
        $response = $this->getSoapClient()->sendNotifications($sendNotificationsRequest->toArray());
        if ($returnStdClass) {
            return $response;
        }
        
        $sendNotificationsReply = new ComplexType\SendNotificationsReply;
        $sendNotificationsReply->populateFromStdClass($response);
        return $sendNotificationsReply;
    }
}
