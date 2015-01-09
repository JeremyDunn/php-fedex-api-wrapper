<?php
namespace FedEx\Pickup\ComplexType;

use FedEx\AbstractComplexType;

/**
 * The descriptive data returned to a client in response to a cancel dispatch request.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class PickupAvailabilityReply
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'PickupAvailabilityReply';

    /**
     * Identifies the highest severity encountered when executing the request; in order from high to low: FAILURE, ERROR, WARNING, NOTE, SUCCESS.
     *
     * @param \FedEx\Pickup\SimpleType\NotificationSeverityType|string $highestSeverity
     * @return PickupAvailabilityReply
     */
    public function setHighestSeverity($highestSeverity)
    {
        $this->HighestSeverity = $highestSeverity;
        return $this;
    }
    
    /**
     * Returns Identifies the highest severity encountered when executing the request; in order from high to low: FAILURE, ERROR, WARNING, NOTE, SUCCESS.
     *
     * @return \FedEx\Pickup\SimpleType\NotificationSeverityType|string
     */
    public function getHighestSeverity()
    {
        return $this->HighestSeverity;
    }
    
    /**
     * The descriptive data detailing the status of a sumbitted transaction.
     *
     * @param Notification[] $notifications
     * @return PickupAvailabilityReply
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
     * Descriptive data that governs data payload language/translations. The TransactionDetail from the request is echoed back to the caller in the corresponding reply.
     *
     * @param TransactionDetail $transactionDetail
     * @return PickupAvailabilityReply
     */
    public function setTransactionDetail(TransactionDetail $transactionDetail)
    {
        $this->TransactionDetail = $transactionDetail;
        return $this;
    }
    
    /**
     * Returns Descriptive data that governs data payload language/translations. The TransactionDetail from the request is echoed back to the caller in the corresponding reply.
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
     * @return PickupAvailabilityReply
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
     * the point in time when the request was processed
     *
     * @param dateTime $requestTimestamp
     * @return PickupAvailabilityReply
     */
    public function setRequestTimestamp($requestTimestamp)
    {
        $this->RequestTimestamp = $requestTimestamp;
        return $this;
    }
    
    /**
     * Returns the point in time when the request was processed
     *
     * @return dateTime
     */
    public function getRequestTimestamp()
    {
        return $this->RequestTimestamp;
    }
    
    /**
     * Identifies the options for picking up the shipment.
     *
     * @param PickupScheduleOption[] $options
     * @return PickupAvailabilityReply
     */
    public function setOptions(array $options)
    {
        $this->Options = $options;
        return $this;
    }
    
    /**
     * Returns Identifies the options for picking up the shipment.
     *
     * @return PickupScheduleOption[]
     */
    public function getOptions()
    {
        return $this->Options;
    }
    
    /**
     * Identifies whether the close time is specified by the customer or is the default time.
     *
     * @param \FedEx\Pickup\SimpleType\CloseTimeType|string $closeTimeType
     * @return PickupAvailabilityReply
     */
    public function setCloseTimeType($closeTimeType)
    {
        $this->CloseTimeType = $closeTimeType;
        return $this;
    }
    
    /**
     * Returns Identifies whether the close time is specified by the customer or is the default time.
     *
     * @return \FedEx\Pickup\SimpleType\CloseTimeType|string
     */
    public function getCloseTimeType()
    {
        return $this->CloseTimeType;
    }
    
    /**
     * Close time corresponding to the above specified type
     *
     * @param time $closeTime
     * @return PickupAvailabilityReply
     */
    public function setCloseTime(time $closeTime)
    {
        $this->CloseTime = $closeTime;
        return $this;
    }
    
    /**
     * Returns Close time corresponding to the above specified type
     *
     * @return time
     */
    public function getCloseTime()
    {
        return $this->CloseTime;
    }
    
    /**
     * Local time of the service center that will service the pickup
     *
     * @param time $localTime
     * @return PickupAvailabilityReply
     */
    public function setLocalTime(time $localTime)
    {
        $this->LocalTime = $localTime;
        return $this;
    }
    
    /**
     * Returns Local time of the service center that will service the pickup
     *
     * @return time
     */
    public function getLocalTime()
    {
        return $this->LocalTime;
    }
    

    
}