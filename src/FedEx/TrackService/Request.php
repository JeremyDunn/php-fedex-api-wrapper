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

    protected static $wsdlFileName = 'TrackService_v5.wsdl';
            
    /**
     * Sends the TrackNotificationRequest and returns the response
     *
     * @param ComplexType\TrackNotificationRequest $trackNotificationRequest
     * @param bool $returnStdClass Return the $stdClass response directly from \SoapClient
     * @return ComplexType\TrackNotificationReply|stdClass
     */
    public function getGetTrackNotificationReply(ComplexType\TrackNotificationRequest $trackNotificationRequest, $returnStdClass = false)
    {
        $response = $this->getSoapClient()->getTrackNotification($trackNotificationRequest->toArray());
        if ($returnStdClass) {
            return $response;
        }
        
        $trackNotificationReply = new ComplexType\TrackNotificationReply;
        $trackNotificationReply->populateFromStdClass($response);
        return $trackNotificationReply;
    }
            
    /**
     * Sends the SignatureProofOfDeliveryLetterRequest and returns the response
     *
     * @param ComplexType\SignatureProofOfDeliveryLetterRequest $signatureProofOfDeliveryLetterRequest
     * @param bool $returnStdClass Return the $stdClass response directly from \SoapClient
     * @return ComplexType\SignatureProofOfDeliveryLetterReply|stdClass
     */
    public function getRetrieveSignatureProofOfDeliveryLetterReply(ComplexType\SignatureProofOfDeliveryLetterRequest $signatureProofOfDeliveryLetterRequest, $returnStdClass = false)
    {
        $response = $this->getSoapClient()->retrieveSignatureProofOfDeliveryLetter($signatureProofOfDeliveryLetterRequest->toArray());
        if ($returnStdClass) {
            return $response;
        }
        
        $signatureProofOfDeliveryLetterReply = new ComplexType\SignatureProofOfDeliveryLetterReply;
        $signatureProofOfDeliveryLetterReply->populateFromStdClass($response);
        return $signatureProofOfDeliveryLetterReply;
    }
            
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
     * Sends the SignatureProofOfDeliveryFaxRequest and returns the response
     *
     * @param ComplexType\SignatureProofOfDeliveryFaxRequest $signatureProofOfDeliveryFaxRequest
     * @param bool $returnStdClass Return the $stdClass response directly from \SoapClient
     * @return ComplexType\SignatureProofOfDeliveryFaxReply|stdClass
     */
    public function getSendSignatureProofOfDeliveryFaxReply(ComplexType\SignatureProofOfDeliveryFaxRequest $signatureProofOfDeliveryFaxRequest, $returnStdClass = false)
    {
        $response = $this->getSoapClient()->sendSignatureProofOfDeliveryFax($signatureProofOfDeliveryFaxRequest->toArray());
        if ($returnStdClass) {
            return $response;
        }
        
        $signatureProofOfDeliveryFaxReply = new ComplexType\SignatureProofOfDeliveryFaxReply;
        $signatureProofOfDeliveryFaxReply->populateFromStdClass($response);
        return $signatureProofOfDeliveryFaxReply;
    }
}
