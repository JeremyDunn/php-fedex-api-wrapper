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

    protected $wsdlFileName = 'TrackService_v5.wsdl';
            
    /**
     * Sends the TrackNotificationRequest and returns the response
     *
     * @param ComplexType\TrackNotificationRequest $trackNotificationRequest
     * @return stdClass
     */
    public function getGetTrackNotificationReply(ComplexType\TrackNotificationRequest $trackNotificationRequest)
    {
        return $this->getSoapClient()->getTrackNotification($trackNotificationRequest->toArray());
    }
            
    /**
     * Sends the SignatureProofOfDeliveryLetterRequest and returns the response
     *
     * @param ComplexType\SignatureProofOfDeliveryLetterRequest $signatureProofOfDeliveryLetterRequest
     * @return stdClass
     */
    public function getRetrieveSignatureProofOfDeliveryLetterReply(ComplexType\SignatureProofOfDeliveryLetterRequest $signatureProofOfDeliveryLetterRequest)
    {
        return $this->getSoapClient()->retrieveSignatureProofOfDeliveryLetter($signatureProofOfDeliveryLetterRequest->toArray());
    }
            
    /**
     * Sends the TrackRequest and returns the response
     *
     * @param ComplexType\TrackRequest $trackRequest
     * @return stdClass
     */
    public function getTrackReply(ComplexType\TrackRequest $trackRequest)
    {
        return $this->getSoapClient()->track($trackRequest->toArray());
    }
            
    /**
     * Sends the SignatureProofOfDeliveryFaxRequest and returns the response
     *
     * @param ComplexType\SignatureProofOfDeliveryFaxRequest $signatureProofOfDeliveryFaxRequest
     * @return stdClass
     */
    public function getSendSignatureProofOfDeliveryFaxReply(ComplexType\SignatureProofOfDeliveryFaxRequest $signatureProofOfDeliveryFaxRequest)
    {
        return $this->getSoapClient()->sendSignatureProofOfDeliveryFax($signatureProofOfDeliveryFaxRequest->toArray());
    }

}
