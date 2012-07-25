<?php
namespace FedEx\TrackService;

/**
 * Request sends the SOAP call to the FedEx servers and returns the response
 *
 * @version     $Revision: 4 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Track Service
 */
class Request
{
    /**
     * WSDL Path
     *
     * @var string
     */
    protected $_wsdlPath;

    /**
     * SoapClient object
     *
     * @var SoapClient
     */
    protected $_soapClient;

    /**
     * Constructor
     *
     * @param string $wsdlPath
     */
    public function __construct($wsdlPath = null)
    {
        if (null != $wsdlPath) {
            $this->_wsdlPath = $wsdlPath;
        } else {
            $this->_wsdlPath = realpath(dirname(dirname(__FILE__)) . \DIRECTORY_SEPARATOR . '_wsdl' . \DIRECTORY_SEPARATOR . 'TrackService_v5.wsdl');
        }

        $this->_soapClient = new \SoapClient($this->_wsdlPath, array('trace' => true));
    }

    /**
     * Returns the SoapClient instance
     *
     * @return SoapClient
     */
    public function getSoapClient()
    {
        return $this->_soapClient;
    }

    /**
     * Sends request and returns Track Reply
     *
     * @param TrackRequest $trackRequest
     * @return stdClass
     */
    public function getTrackReply(ComplexType\TrackRequest $trackRequest)
    {
        return $this->_soapClient->track($trackRequest->toArray());
    }

    /**
     * Sends request and returns Track Notification Reply
     *
     * @param TrackNotificationRequest $trackNotificationRequest
     * @return stdClass
     */
    public function getTrackNotificationReply(ComplexType\TrackNotificationRequest $trackNotificationRequest)
    {
        return $this->_soapClient->getTrackNotification($trackNotificationRequest->toArray());
    }

    /**
     * Sends request and returns Signature Proof Of Delivery Fax Reply
     *
     * @param SignatureProofOfDeliveryFaxRequest $signatureProofOfDeliveryFaxRequest
     * @return stdClass
     */
    public function getSignatureProofOfDeliveryFaxReply(ComplexType\SignatureProofOfDeliveryFaxRequest $signatureProofOfDeliveryFaxRequest)
    {
        return $this->_soapClient->sendSignatureProofOfDeliveryFax($signatureProofOfDeliveryFaxRequest->toArray());
    }

    /**
     * Sends request and returns Signature Proof Of Delivery Letter Request
     *
     * @param SignatureProofOfDeliveryLetterRequest $signatureProofOfDeliveryLetterRequest
     * @return stdClass
     */
    public function getSignatureProofOfDeliveryLetterReply(ComplexType\SignatureProofOfDeliveryLetterRequest $signatureProofOfDeliveryLetterRequest)
    {
        return $this->_soapClient->retrieveSignatureProofOfDeliveryLetter($signatureProofOfDeliveryLetterRequest->toArray());
    }

}
