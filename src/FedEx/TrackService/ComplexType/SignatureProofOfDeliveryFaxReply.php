<?php
namespace FedEx\TrackService\ComplexType;

/**
 * FedEx Signature Proof Of Delivery Fax reply.
 *
 * @version     $Revision: 4 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Track Service
 */
class SignatureProofOfDeliveryFaxReply
    extends AbstractComplexType
{
    protected $_name = 'SignatureProofOfDeliveryFaxReply';

    /**
     * This contains the severity type of the most severe Notification in the Notifications array.
     *
     * @param NotificationSeverityType $HighestSeverity
     * return SignatureProofOfDeliveryFaxReply
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
     * return SignatureProofOfDeliveryFaxReply
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
     * return SignatureProofOfDeliveryFaxReply
     */
    public function setTransactionDetail(TransactionDetail $transactionDetail)
    {
        $this->TransactionDetail = $transactionDetail;
        return $this;
    }
    
    /**
     * Contains the version of the reply being used.
     *
     * @param VersionId $Version
     * return SignatureProofOfDeliveryFaxReply
     */
    public function setVersion(VersionId $version)
    {
        $this->Version = $version;
        return $this;
    }
    
    /**
     * Confirmation of fax transmission.
     *
     * @param string $FaxConfirmationNumber
     * return SignatureProofOfDeliveryFaxReply
     */
    public function setFaxConfirmationNumber($faxConfirmationNumber)
    {
        $this->FaxConfirmationNumber = $faxConfirmationNumber;
        return $this;
    }
    

    
}