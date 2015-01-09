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
     * @return AddressValidationReply
     */
    public function setHighestSeverity($highestSeverity)
    {
        $this->HighestSeverity = $highestSeverity;
        return $this;
    }
    
    /**
     * Returns Set HighestSeverity
     *
     * @return \FedEx\AddressValidationService\SimpleType\NotificationSeverityType|string
     */
    public function getHighestSeverity()
    {
        return $this->HighestSeverity;
    }
    
    /**
     * Set Notifications
     *
     * @param Notification[] $notifications
     * @return AddressValidationReply
     */
    public function setNotifications(array $notifications)
    {
        $this->Notifications = $notifications;
        return $this;
    }
    
    /**
     * Returns Set Notifications
     *
     * @return Notification[]
     */
    public function getNotifications()
    {
        return $this->Notifications;
    }
    
    /**
     * Set TransactionDetail
     *
     * @param TransactionDetail $transactionDetail
     * @return AddressValidationReply
     */
    public function setTransactionDetail(TransactionDetail $transactionDetail)
    {
        $this->TransactionDetail = $transactionDetail;
        return $this;
    }
    
    /**
     * Returns Set TransactionDetail
     *
     * @return TransactionDetail
     */
    public function getTransactionDetail()
    {
        return $this->TransactionDetail;
    }
    
    /**
     * Set Version
     *
     * @param VersionId $version
     * @return AddressValidationReply
     */
    public function setVersion(VersionId $version)
    {
        $this->Version = $version;
        return $this;
    }
    
    /**
     * Returns Set Version
     *
     * @return VersionId
     */
    public function getVersion()
    {
        return $this->Version;
    }
    
    /**
     * Set ReplyTimestamp
     *
     * @param dateTime $replyTimestamp
     * @return AddressValidationReply
     */
    public function setReplyTimestamp($replyTimestamp)
    {
        $this->ReplyTimestamp = $replyTimestamp;
        return $this;
    }
    
    /**
     * Returns Set ReplyTimestamp
     *
     * @return dateTime
     */
    public function getReplyTimestamp()
    {
        return $this->ReplyTimestamp;
    }
    
    /**
     * Set AddressResults
     *
     * @param AddressValidationResult[] $addressResults
     * @return AddressValidationReply
     */
    public function setAddressResults(array $addressResults)
    {
        $this->AddressResults = $addressResults;
        return $this;
    }
    
    /**
     * Returns Set AddressResults
     *
     * @return AddressValidationResult[]
     */
    public function getAddressResults()
    {
        return $this->AddressResults;
    }
    

    
}