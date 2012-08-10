<?php
namespace FedEx\Pickup\ComplexType;

use FedEx\AbstractComplexType;

/**
 * The descriptive data returned to a client in response to a shipment pickup request.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class CreatePickupReply
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'CreatePickupReply';

    /**
     * Identifies the highest severity encountered when executing the request; in order from high to low: FAILURE, ERROR, WARNING, NOTE, SUCCESS.
     *
     * @param \FedEx\Pickup\SimpleType\NotificationSeverityType|string $highestSeverity
     * return CreatePickupReply
     */
    public function setHighestSeverity($highestSeverity)
    {
        $this->HighestSeverity = $highestSeverity;
        return $this;
    }
    
    /**
     * The descriptive data detailing the status of a sumbitted transaction.
     *
     * @param Notification[] $notifications
     * return CreatePickupReply
     */
    public function setNotifications(array $notifications)
    {
        $this->Notifications = $notifications;
        return $this;
    }
    
    /**
     * Descriptive data that governs data payload language/translations. The TransactionDetail from the request is echoed back to the caller in the corresponding reply.
     *
     * @param TransactionDetail $transactionDetail
     * return CreatePickupReply
     */
    public function setTransactionDetail(TransactionDetail $transactionDetail)
    {
        $this->TransactionDetail = $transactionDetail;
        return $this;
    }
    
    /**
     * Identifies the version/level of a service operation expected by a caller (in each request) and performed by the callee (in each reply).
     *
     * @param VersionId $version
     * return CreatePickupReply
     */
    public function setVersion(VersionId $version)
    {
        $this->Version = $version;
        return $this;
    }
    
    /**
     * Identifies the confirmation number assigned by FedEx for the request.
     *
     * @param string $pickupConfirmationNumber
     * return CreatePickupReply
     */
    public function setPickupConfirmationNumber($pickupConfirmationNumber)
    {
        $this->PickupConfirmationNumber = $pickupConfirmationNumber;
        return $this;
    }
    
    /**
     * Identifies the FedEx Location identifier responsible for processing the pickup of the package.
     *
     * @param string $location
     * return CreatePickupReply
     */
    public function setLocation($location)
    {
        $this->Location = $location;
        return $this;
    }
    
    /**
     * Coded value supplied by dispatch system.
     *
     * @param string $messageCode
     * return CreatePickupReply
     */
    public function setMessageCode($messageCode)
    {
        $this->MessageCode = $messageCode;
        return $this;
    }
    
    /**
     * Message supplied by dispatch system.
     *
     * @param string $message
     * return CreatePickupReply
     */
    public function setMessage($message)
    {
        $this->Message = $message;
        return $this;
    }
    
    /**
     * Package Return Program control number
     *
     * @param string $pRPControlNumber
     * return CreatePickupReply
     */
    public function setPRPControlNumber($pRPControlNumber)
    {
        $this->PRPControlNumber = $pRPControlNumber;
        return $this;
    }
    
    /**
     * Used with "stay late" requests; postal-code specific.
     *
     * @param time $lastAccessTime
     * return CreatePickupReply
     */
    public function setLastAccessTime(time $lastAccessTime)
    {
        $this->LastAccessTime = $lastAccessTime;
        return $this;
    }
    
    /**
     * Data resulting from the processing of an LTL Freight pickup request.
     *
     * @param CompletedFreightPickupDetail $completedFreightPickupDetail
     * return CreatePickupReply
     */
    public function setCompletedFreightPickupDetail(CompletedFreightPickupDetail $completedFreightPickupDetail)
    {
        $this->CompletedFreightPickupDetail = $completedFreightPickupDetail;
        return $this;
    }
    

    
}