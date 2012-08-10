<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * ProcessTagReply
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class ProcessTagReply
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'ProcessTagReply';

    /**
     * Set HighestSeverity
     *
     * @param \FedEx\ShipService\SimpleType\NotificationSeverityType|string $highestSeverity
     * return ProcessTagReply
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
     * return ProcessTagReply
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
     * return ProcessTagReply
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
     * return ProcessTagReply
     */
    public function setVersion(VersionId $version)
    {
        $this->Version = $version;
        return $this;
    }
    
    /**
     * Set CompletedShipmentDetail
     *
     * @param CompletedShipmentDetail $completedShipmentDetail
     * return ProcessTagReply
     */
    public function setCompletedShipmentDetail(CompletedShipmentDetail $completedShipmentDetail)
    {
        $this->CompletedShipmentDetail = $completedShipmentDetail;
        return $this;
    }
    

    
}