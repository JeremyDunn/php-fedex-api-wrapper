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
     * @return CreatePickupReply
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
     * @return CreatePickupReply
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
     * @return CreatePickupReply
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
     * @return CreatePickupReply
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
     * Identifies the confirmation number assigned by FedEx for the request.
     *
     * @param string $pickupConfirmationNumber
     * @return CreatePickupReply
     */
    public function setPickupConfirmationNumber($pickupConfirmationNumber)
    {
        $this->PickupConfirmationNumber = $pickupConfirmationNumber;
        return $this;
    }
    
    /**
     * Returns Identifies the confirmation number assigned by FedEx for the request.
     *
     * @return string
     */
    public function getPickupConfirmationNumber()
    {
        return $this->PickupConfirmationNumber;
    }
    
    /**
     * Identifies the FedEx Location identifier responsible for processing the pickup of the package.
     *
     * @param string $location
     * @return CreatePickupReply
     */
    public function setLocation($location)
    {
        $this->Location = $location;
        return $this;
    }
    
    /**
     * Returns Identifies the FedEx Location identifier responsible for processing the pickup of the package.
     *
     * @return string
     */
    public function getLocation()
    {
        return $this->Location;
    }
    
    /**
     * Coded value supplied by dispatch system.
     *
     * @param string $messageCode
     * @return CreatePickupReply
     */
    public function setMessageCode($messageCode)
    {
        $this->MessageCode = $messageCode;
        return $this;
    }
    
    /**
     * Returns Coded value supplied by dispatch system.
     *
     * @return string
     */
    public function getMessageCode()
    {
        return $this->MessageCode;
    }
    
    /**
     * Message supplied by dispatch system.
     *
     * @param string $message
     * @return CreatePickupReply
     */
    public function setMessage($message)
    {
        $this->Message = $message;
        return $this;
    }
    
    /**
     * Returns Message supplied by dispatch system.
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->Message;
    }
    
    /**
     * Package Return Program control number
     *
     * @param string $pRPControlNumber
     * @return CreatePickupReply
     */
    public function setPRPControlNumber($pRPControlNumber)
    {
        $this->PRPControlNumber = $pRPControlNumber;
        return $this;
    }
    
    /**
     * Returns Package Return Program control number
     *
     * @return string
     */
    public function getPRPControlNumber()
    {
        return $this->PRPControlNumber;
    }
    
    /**
     * Used with "stay late" requests; postal-code specific.
     *
     * @param time $lastAccessTime
     * @return CreatePickupReply
     */
    public function setLastAccessTime(time $lastAccessTime)
    {
        $this->LastAccessTime = $lastAccessTime;
        return $this;
    }
    
    /**
     * Returns Used with "stay late" requests; postal-code specific.
     *
     * @return time
     */
    public function getLastAccessTime()
    {
        return $this->LastAccessTime;
    }
    
    /**
     * Data resulting from the processing of an LTL Freight pickup request.
     *
     * @param CompletedFreightPickupDetail $completedFreightPickupDetail
     * @return CreatePickupReply
     */
    public function setCompletedFreightPickupDetail(CompletedFreightPickupDetail $completedFreightPickupDetail)
    {
        $this->CompletedFreightPickupDetail = $completedFreightPickupDetail;
        return $this;
    }
    
    /**
     * Returns Data resulting from the processing of an LTL Freight pickup request.
     *
     * @return CompletedFreightPickupDetail
     */
    public function getCompletedFreightPickupDetail()
    {
        return $this->CompletedFreightPickupDetail;
    }
    

    
}