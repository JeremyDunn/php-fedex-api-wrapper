<?php
namespace FedEx\CourierDispatchService\ComplexType;

/**
 * The descriptive data returned to a client in response to a courier dispatch (i.e. package pickup) request.
 *
 * @version     $Revision: 2 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Courier Dispatch Service
 */
class CourierDispatchReply
    extends AbstractComplexType
{
    protected $_name = 'CourierDispatchReply';

    /**
     * Identifies the highest severity encountered when executing the request; in order from high to low: FAILURE, ERROR, WARNING, NOTE, SUCCESS.
     *
     * @param NotificationSeverityType $HighestSeverity
     * return CourierDispatchReply
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
     * @param TransactionDetail $TransactionDetail
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
     * @param VersionId $Version
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
     * @param string $DispatchConfirmationNumber
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
     * @param string $Location
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
     * @param string $MessageCode
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
     * @param string $Message
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
     * @param string $PRPControlNumber
     * return CourierDispatchReply
     */
    public function setPRPControlNumber($pRPControlNumber)
    {
        $this->PRPControlNumber = $pRPControlNumber;
        return $this;
    }
    

    
}