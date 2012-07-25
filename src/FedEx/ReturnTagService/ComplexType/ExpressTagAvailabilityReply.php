<?php
namespace FedEx\ReturnTagService\ComplexType;

/**
 * FedEx Express Tag Availability reply.
 *
 * @version     $Revision: 2 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Return Tag Service
 */
class ExpressTagAvailabilityReply
    extends AbstractComplexType
{
    protected $_name = 'ExpressTagAvailabilityReply';

    /**
     * Identifies the highest severity encountered when executing the request; in order from high to low: FAILURE, ERROR, WARNING, NOTE, SUCCESS.
     *
     * @param NotificationSeverityType $HighestSeverity
     * return ExpressTagAvailabilityReply
     */
    public function setHighestSeverity(\FedEx\ReturnTagService\SimpleType\NotificationSeverityType $highestSeverity)
    {
        $this->HighestSeverity = $highestSeverity;
        return $this;
    }
    
    /**
     * The descriptive data detailing the status of a sumbitted transaction.
     *
     * @param array[Notification] $Notifications
     * return ExpressTagAvailabilityReply
     */
    public function setNotifications(array $notifications)
    {
        $this->Notifications = $notifications;
        return $this;
    }
    
    /**
     * Descriptive data that governs data payload language/translations.  The TransactionDetail from the request is echoed back to the caller in the corresponding reply.
     *
     * @param TransactionDetail $TransactionDetail
     * return ExpressTagAvailabilityReply
     */
    public function setTransactionDetail(TransactionDetail $transactionDetail)
    {
        $this->TransactionDetail = $transactionDetail;
        return $this;
    }
    
    /**
     * Identifies the version/level of a service operation expected by a caller (in each request) and performed by the callee (in each reply).
     *
     * @param VersionId $Version
     * return ExpressTagAvailabilityReply
     */
    public function setVersion(VersionId $version)
    {
        $this->Version = $version;
        return $this;
    }
    
    /**
     * This is the minimum time window that must be allocated for the FedEx courier to make the pickup. This is a length of time. The difference between the Business close time, (or the local Cutoff time if it is earlier than  the Business Close time), and the Ready Time must be equal to or exceed the access time.
     *
     * @param time $AccessTime
     * return ExpressTagAvailabilityReply
     */
    public function setAccessTime(time $accessTime)
    {
        $this->AccessTime = $accessTime;
        return $this;
    }
    
    /**
     * Latest time a FedEx courier will be available to pick up the package from the Sender.
     *
     * @param time $ReadyTime
     * return ExpressTagAvailabilityReply
     */
    public function setReadyTime(time $readyTime)
    {
        $this->ReadyTime = $readyTime;
        return $this;
    }
    
    /**
     * Indicates the Express Tag Service availability at the sender postal code indicated in the request.
     *
     * @param ExpressTagAvailabilityType $Availability
     * return ExpressTagAvailabilityReply
     */
    public function setAvailability(\FedEx\ReturnTagService\SimpleType\ExpressTagAvailabilityType $availability)
    {
        $this->Availability = $availability;
        return $this;
    }
    

    
}