<?php
namespace FedEx\CloseService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * SmartPostCloseReply
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Close Service
 */
class SmartPostCloseReply
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'SmartPostCloseReply';

    /**
     * Set HighestSeverity
     *
     * @param \FedEx\CloseService\SimpleType\NotificationSeverityType|string $highestSeverity
     * return SmartPostCloseReply
     */
    public function setHighestSeverity($highestSeverity)
    {
        $this->HighestSeverity = $highestSeverity;
        return $this;
    }
    
    /**
     * Set Notifications
     *
     * @param Notification[] $notifications
     * return SmartPostCloseReply
     */
    public function setNotifications(array $notifications)
    {
        $this->Notifications = $notifications;
        return $this;
    }
    
    /**
     * Set TransactionDetail
     *
     * @param TransactionDetail $transactionDetail
     * return SmartPostCloseReply
     */
    public function setTransactionDetail(TransactionDetail $transactionDetail)
    {
        $this->TransactionDetail = $transactionDetail;
        return $this;
    }
    
    /**
     * Set Version
     *
     * @param VersionId $version
     * return SmartPostCloseReply
     */
    public function setVersion(VersionId $version)
    {
        $this->Version = $version;
        return $this;
    }
    

    
}