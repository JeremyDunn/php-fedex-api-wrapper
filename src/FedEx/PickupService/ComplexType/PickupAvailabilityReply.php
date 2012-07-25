<?php
namespace FedEx\PickupService\ComplexType;

/**
 * The descriptive data returned to a client in response to a cancel dispatch request.
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class PickupAvailabilityReply
    extends AbstractComplexType
{
    protected $_name = 'PickupAvailabilityReply';

    /**
     * Identifies the highest severity encountered when executing the request; in order from high to low: FAILURE, ERROR, WARNING, NOTE, SUCCESS.
     *
     * @param NotificationSeverityType $HighestSeverity
     * return PickupAvailabilityReply
     */
    public function setHighestSeverity(\FedEx\PickupService\SimpleType\NotificationSeverityType $highestSeverity)
    {
        $this->HighestSeverity = $highestSeverity;
        return $this;
    }
    
    /**
     * The descriptive data detailing the status of a sumbitted transaction.
     *
     * @param array[Notification] $Notifications
     * return PickupAvailabilityReply
     */
    public function setNotifications(array $notifications)
    {
        $this->Notifications = $notifications;
        return $this;
    }
    
    /**
     * Descriptive data that governs data payload language/translations. The TransactionDetail from the request is echoed back to the caller in the corresponding reply.
     *
     * @param TransactionDetail $TransactionDetail
     * return PickupAvailabilityReply
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
     * return PickupAvailabilityReply
     */
    public function setVersion(VersionId $version)
    {
        $this->Version = $version;
        return $this;
    }
    
    /**
     * the point in time when the request was processed
     *
     * @param dateTime $RequestTimestamp
     * return PickupAvailabilityReply
     */
    public function setRequestTimestamp($requestTimestamp)
    {
        $this->RequestTimestamp = $requestTimestamp;
        return $this;
    }
    
    /**
     * Identifies the options for picking up the shipment.
     *
     * @param array[PickupScheduleOption] $Options
     * return PickupAvailabilityReply
     */
    public function setOptions(array $options)
    {
        $this->Options = $options;
        return $this;
    }
    
    /**
     * Identifies whether the close time is specified by the customer or is the default time.
     *
     * @param CloseTimeType $CloseTimeType
     * return PickupAvailabilityReply
     */
    public function setCloseTimeType(\FedEx\PickupService\SimpleType\CloseTimeType $closeTimeType)
    {
        $this->CloseTimeType = $closeTimeType;
        return $this;
    }
    
    /**
     * Close time corresponding to the above specified type
     *
     * @param time $CloseTime
     * return PickupAvailabilityReply
     */
    public function setCloseTime(time $closeTime)
    {
        $this->CloseTime = $closeTime;
        return $this;
    }
    
    /**
     * Local time of the service center that will service the pickup
     *
     * @param time $LocalTime
     * return PickupAvailabilityReply
     */
    public function setLocalTime(time $localTime)
    {
        $this->LocalTime = $localTime;
        return $this;
    }
    

    
}