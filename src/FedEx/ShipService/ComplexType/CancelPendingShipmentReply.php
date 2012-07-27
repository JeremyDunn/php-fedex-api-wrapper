<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * 
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class CancelPendingShipmentReply
    extends AbstractComplexType
{
    protected $_name = 'CancelPendingShipmentReply';

    /**
     * 
     *
     * @param NotificationSeverityType $HighestSeverity
     * return CancelPendingShipmentReply
     */
    public function setHighestSeverity(\FedEx\ShipService\SimpleType\NotificationSeverityType $highestSeverity)
    {
        $this->HighestSeverity = $highestSeverity;
        return $this;
    }
    
    /**
     * 
     *
     * @param array[Notification] $Notifications
     * return CancelPendingShipmentReply
     */
    public function setNotifications(array $notifications)
    {
        $this->Notifications = $notifications;
        return $this;
    }
    
    /**
     * 
     *
     * @param TransactionDetail $TransactionDetail
     * return CancelPendingShipmentReply
     */
    public function setTransactionDetail(TransactionDetail $transactionDetail)
    {
        $this->TransactionDetail = $transactionDetail;
        return $this;
    }
    
    /**
     * 
     *
     * @param VersionId $Version
     * return CancelPendingShipmentReply
     */
    public function setVersion(VersionId $version)
    {
        $this->Version = $version;
        return $this;
    }
    

    
}