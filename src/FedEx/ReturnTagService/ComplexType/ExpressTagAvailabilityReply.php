<?php
namespace FedEx\ReturnTagService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * FedEx Express Tag Availability reply.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Return Tag Service
 */
class ExpressTagAvailabilityReply
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'ExpressTagAvailabilityReply';

    /**
     * Identifies the highest severity encountered when executing the request; in order from high to low: FAILURE, ERROR, WARNING, NOTE, SUCCESS.
     *
     * @param \FedEx\ReturnTagService\SimpleType\NotificationSeverityType|string $highestSeverity
     * @return ExpressTagAvailabilityReply
     */
    public function setHighestSeverity($highestSeverity)
    {
        $this->HighestSeverity = $highestSeverity;
        return $this;
    }
    
    /**
     * Returns Identifies the highest severity encountered when executing the request; in order from high to low: FAILURE, ERROR, WARNING, NOTE, SUCCESS.
     *
     * @return \FedEx\ReturnTagService\SimpleType\NotificationSeverityType|string
     */
    public function getHighestSeverity()
    {
        return $this->HighestSeverity;
    }
    
    /**
     * The descriptive data detailing the status of a sumbitted transaction.
     *
     * @param Notification[] $notifications
     * @return ExpressTagAvailabilityReply
     */
    public function setNotifications(array $notifications)
    {
        $this->Notifications = $notifications;
        return $this;
    }
    
    /**
     * Returns The descriptive data detailing the status of a sumbitted transaction.
     *
     * @return Notification[]
     */
    public function getNotifications()
    {
        return $this->Notifications;
    }
    
    /**
     * Descriptive data that governs data payload language/translations.  The TransactionDetail from the request is echoed back to the caller in the corresponding reply.
     *
     * @param TransactionDetail $transactionDetail
     * @return ExpressTagAvailabilityReply
     */
    public function setTransactionDetail(TransactionDetail $transactionDetail)
    {
        $this->TransactionDetail = $transactionDetail;
        return $this;
    }
    
    /**
     * Returns Descriptive data that governs data payload language/translations.  The TransactionDetail from the request is echoed back to the caller in the corresponding reply.
     *
     * @return TransactionDetail
     */
    public function getTransactionDetail()
    {
        return $this->TransactionDetail;
    }
    
    /**
     * Identifies the version/level of a service operation expected by a caller (in each request) and performed by the callee (in each reply).
     *
     * @param VersionId $version
     * @return ExpressTagAvailabilityReply
     */
    public function setVersion(VersionId $version)
    {
        $this->Version = $version;
        return $this;
    }
    
    /**
     * Returns Identifies the version/level of a service operation expected by a caller (in each request) and performed by the callee (in each reply).
     *
     * @return VersionId
     */
    public function getVersion()
    {
        return $this->Version;
    }
    
    /**
     * This is the minimum time window that must be allocated for the FedEx courier to make the pickup. This is a length of time. The difference between the Business close time, (or the local Cutoff time if it is earlier than  the Business Close time), and the Ready Time must be equal to or exceed the access time.
     *
     * @param time $accessTime
     * @return ExpressTagAvailabilityReply
     */
    public function setAccessTime(time $accessTime)
    {
        $this->AccessTime = $accessTime;
        return $this;
    }
    
    /**
     * Returns This is the minimum time window that must be allocated for the FedEx courier to make the pickup. This is a length of time. The difference between the Business close time, (or the local Cutoff time if it is earlier than  the Business Close time), and the Ready Time must be equal to or exceed the access time.
     *
     * @return time
     */
    public function getAccessTime()
    {
        return $this->AccessTime;
    }
    
    /**
     * Latest time a FedEx courier will be available to pick up the package from the Sender.
     *
     * @param time $readyTime
     * @return ExpressTagAvailabilityReply
     */
    public function setReadyTime(time $readyTime)
    {
        $this->ReadyTime = $readyTime;
        return $this;
    }
    
    /**
     * Returns Latest time a FedEx courier will be available to pick up the package from the Sender.
     *
     * @return time
     */
    public function getReadyTime()
    {
        return $this->ReadyTime;
    }
    
    /**
     * Indicates the Express Tag Service availability at the sender postal code indicated in the request.
     *
     * @param \FedEx\ReturnTagService\SimpleType\ExpressTagAvailabilityType|string $availability
     * @return ExpressTagAvailabilityReply
     */
    public function setAvailability($availability)
    {
        $this->Availability = $availability;
        return $this;
    }
    
    /**
     * Returns Indicates the Express Tag Service availability at the sender postal code indicated in the request.
     *
     * @return \FedEx\ReturnTagService\SimpleType\ExpressTagAvailabilityType|string
     */
    public function getAvailability()
    {
        return $this->Availability;
    }
    

    
}