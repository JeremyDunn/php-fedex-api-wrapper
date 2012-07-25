<?php
namespace FedEx\TrackService\ComplexType;

/**
 * FedEx Signature Proof Of Delivery Letter reply.
 *
 * @version     $Revision: 4 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Track Service
 */
class SignatureProofOfDeliveryLetterReply
    extends AbstractComplexType
{
    protected $_name = 'SignatureProofOfDeliveryLetterReply';

    /**
     * This contains the severity type of the most severe Notification in the Notifications array.
     *
     * @param NotificationSeverityType $HighestSeverity
     * return SignatureProofOfDeliveryLetterReply
     */
    public function setHighestSeverity(\FedEx\TrackService\SimpleType\NotificationSeverityType $highestSeverity)
    {
        $this->HighestSeverity = $highestSeverity;
        return $this;
    }
    
    /**
     * Information about the request/reply such was the transaction successful or not, and any additional information relevant to the request and/or reply. There may be multiple Notifications in a reply.
     *
     * @param array[Notification] $Notifications
     * return SignatureProofOfDeliveryLetterReply
     */
    public function setNotifications(array $notifications)
    {
        $this->Notifications = $notifications;
        return $this;
    }
    
    /**
     * Contains the CustomerTransactionDetail that is echoed back to the caller for matching requests and replies and a Localization element for defining the language/translation used in the reply data.
     *
     * @param TransactionDetail $TransactionDetail
     * return SignatureProofOfDeliveryLetterReply
     */
    public function setTransactionDetail(TransactionDetail $transactionDetail)
    {
        $this->TransactionDetail = $transactionDetail;
        return $this;
    }
    
    /**
     * Image of letter encoded in Base64 format.
     *
     * @param VersionId $Version
     * return SignatureProofOfDeliveryLetterReply
     */
    public function setVersion(VersionId $version)
    {
        $this->Version = $version;
        return $this;
    }
    
    /**
     * Image of letter encoded in Base64 format.
     *
     * @param base64Binary $Letter
     * return SignatureProofOfDeliveryLetterReply
     */
    public function setLetter($letter)
    {
        $this->Letter = $letter;
        return $this;
    }
    

    
}