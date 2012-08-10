<?php
namespace FedEx\CourierDispatchService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * The descriptive data returned to a client in response to a courier dispatch (i.e. package pickup) request.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Courier Dispatch Service
 */
class CourierDispatchReply
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'CourierDispatchReply';

    /**
     * Identifies the highest severity encountered when executing the request; in order from high to low: FAILURE, ERROR, WARNING, NOTE, SUCCESS.
     *
     * @param \FedEx\CourierDispatchService\SimpleType\NotificationSeverityType|string $highestSeverity
     * return CourierDispatchReply
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
     * return CourierDispatchReply
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
     * return CourierDispatchReply
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
     * return CourierDispatchReply
     */
    public function setVersion(VersionId $version)
    {
        $this->Version = $version;
        return $this;
    }
    
    /**
     * Identifies the confirmation number assigned by FedEx for the request.
     *
     * @param string $dispatchConfirmationNumber
     * return CourierDispatchReply
     */
    public function setDispatchConfirmationNumber($dispatchConfirmationNumber)
    {
        $this->DispatchConfirmationNumber = $dispatchConfirmationNumber;
        return $this;
    }
    
    /**
     * Identifies the FedEx Location identifier responsible for dispatching the courier to pickup the package.
     *
     * @param string $location
     * return CourierDispatchReply
     */
    public function setLocation($location)
    {
        $this->Location = $location;
        return $this;
    }
    
    /**
     * Identifies the FedEx system code associated with the message text in the reply.
     *
     * @param string $messageCode
     * return CourierDispatchReply
     */
    public function setMessageCode($messageCode)
    {
        $this->MessageCode = $messageCode;
        return $this;
    }
    
    /**
     * Identifies the message text from the FedEx system regarding whether or not the pickup request was successfully scheduled or not.
     *
     * @param string $message
     * return CourierDispatchReply
     */
    public function setMessage($message)
    {
        $this->Message = $message;
        return $this;
    }
    
    /**
     * Identifies the Package Return Program control number.
     *
     * @param string $pRPControlNumber
     * return CourierDispatchReply
     */
    public function setPRPControlNumber($pRPControlNumber)
    {
        $this->PRPControlNumber = $pRPControlNumber;
        return $this;
    }
    

    
}