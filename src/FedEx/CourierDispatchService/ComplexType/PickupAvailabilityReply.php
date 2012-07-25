<?php
namespace FedEx\CourierDispatchService\ComplexType;

/**
 * The descriptive data returned to a client in response to a cancel dispatch request.
 *
 * @version     $Revision: 2 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Courier Dispatch Service
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
    public function setHighestSeverity(\FedEx\CourierDispatchService\SimpleType\NotificationSeverityType $highestSeverity)
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
    

    
}