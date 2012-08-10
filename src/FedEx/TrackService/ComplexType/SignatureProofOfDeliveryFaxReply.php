<?php
namespace FedEx\TrackService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * FedEx Signature Proof Of Delivery Fax reply.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information Service
 */
class SignatureProofOfDeliveryFaxReply
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'SignatureProofOfDeliveryFaxReply';

    /**
     * This contains the severity type of the most severe Notification in the Notifications array.
     *
     * @param \FedEx\TrackService\SimpleType\NotificationSeverityType|string $highestSeverity
     * return SignatureProofOfDeliveryFaxReply
     */
    public function setHighestSeverity($highestSeverity)
    {
        $this->HighestSeverity = $highestSeverity;
        return $this;
    }
    
    /**
     * Information about the request/reply such was the transaction successful or not, and any additional information relevant to the request and/or reply. There may be multiple Notifications in a reply.
     *
     * @param Notification[] $notifications
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
     * @param TransactionDetail $transactionDetail
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
     * @param VersionId $version
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
     * @param string $faxConfirmationNumber
     * return SignatureProofOfDeliveryFaxReply
     */
    public function setFaxConfirmationNumber($faxConfirmationNumber)
    {
        $this->FaxConfirmationNumber = $faxConfirmationNumber;
        return $this;
    }
    

    
}