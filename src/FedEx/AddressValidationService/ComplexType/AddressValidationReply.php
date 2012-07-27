<?php
namespace FedEx\AddressValidationService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * 
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Address Validation Service
 */
class AddressValidationReply
    extends AbstractComplexType
{
    protected $_name = 'AddressValidationReply';

    /**
     * 
     *
     * @param NotificationSeverityType $HighestSeverity
     * return AddressValidationReply
     */
    public function setHighestSeverity(\FedEx\AddressValidationService\SimpleType\NotificationSeverityType $highestSeverity)
    {
        $this->HighestSeverity = $highestSeverity;
        return $this;
    }
    
    /**
     * 
     *
     * @param array[Notification] $Notifications
     * return AddressValidationReply
     */
    public function setNotifications(array $notifications)
    {
        $this->Notifications = $notifications;
        return $this;
    }
    
    /**
     * 
     *
     * @param TransactionDetail $TransactionDetail
     * return AddressValidationReply
     */
    public function setTransactionDetail(TransactionDetail $transactionDetail)
    {
        $this->TransactionDetail = $transactionDetail;
        return $this;
    }
    
    /**
     * 
     *
     * @param VersionId $Version
     * return AddressValidationReply
     */
    public function setVersion(VersionId $version)
    {
        $this->Version = $version;
        return $this;
    }
    
    /**
     * 
     *
     * @param dateTime $ReplyTimestamp
     * return AddressValidationReply
     */
    public function setReplyTimestamp($replyTimestamp)
    {
        $this->ReplyTimestamp = $replyTimestamp;
        return $this;
    }
    
    /**
     * 
     *
     * @param array[AddressValidationResult] $AddressResults
     * return AddressValidationReply
     */
    public function setAddressResults(array $addressResults)
    {
        $this->AddressResults = $addressResults;
        return $this;
    }
    

    
}