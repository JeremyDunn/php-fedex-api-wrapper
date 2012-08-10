<?php
namespace FedEx\AddressValidationService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * AddressValidationReply
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Address Validation Service
 */
class AddressValidationReply
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'AddressValidationReply';

    /**
     * Set HighestSeverity
     *
     * @param \FedEx\AddressValidationService\SimpleType\NotificationSeverityType|string $highestSeverity
     * return AddressValidationReply
     */
    public function setHighestSeverity($highestSeverity)
    {
        $this->HighestSeverity = $highestSeverity;
        return $this;
    }
    
    /**
     * Set Notifications
     *
     * @param Notification[] $notifications
     * return AddressValidationReply
     */
    public function setNotifications(array $notifications)
    {
        $this->Notifications = $notifications;
        return $this;
    }
    
    /**
     * Set TransactionDetail
     *
     * @param TransactionDetail $transactionDetail
     * return AddressValidationReply
     */
    public function setTransactionDetail(TransactionDetail $transactionDetail)
    {
        $this->TransactionDetail = $transactionDetail;
        return $this;
    }
    
    /**
     * Set Version
     *
     * @param VersionId $version
     * return AddressValidationReply
     */
    public function setVersion(VersionId $version)
    {
        $this->Version = $version;
        return $this;
    }
    
    /**
     * Set ReplyTimestamp
     *
     * @param dateTime $replyTimestamp
     * return AddressValidationReply
     */
    public function setReplyTimestamp($replyTimestamp)
    {
        $this->ReplyTimestamp = $replyTimestamp;
        return $this;
    }
    
    /**
     * Set AddressResults
     *
     * @param AddressValidationResult[] $addressResults
     * return AddressValidationReply
     */
    public function setAddressResults(array $addressResults)
    {
        $this->AddressResults = $addressResults;
        return $this;
    }
    

    
}