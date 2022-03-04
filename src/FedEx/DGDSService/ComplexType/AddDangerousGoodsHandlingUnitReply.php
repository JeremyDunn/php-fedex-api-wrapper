<?php
namespace FedEx\DGDSService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * AddDangerousGoodsHandlingUnitReply
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Dangerous Goods Data Service
 *
 * @property \FedEx\DGDSService\SimpleType\NotificationSeverityType|string $HighestSeverity
 * @property Notification[] $Notifications
 * @property TransactionDetail $TransactionDetail
 * @property VersionId $Version
 * @property CompletedDangerousGoodsShipmentDetail $CompletedShipmentDetail
 * @property CompletedDangerousGoodsHandlingUnitGroup $CompletedHandlingUnitGroup

 */
class AddDangerousGoodsHandlingUnitReply extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'AddDangerousGoodsHandlingUnitReply';

    /**
     * Set HighestSeverity
     *
     * @param \FedEx\DGDSService\SimpleType\NotificationSeverityType|string $highestSeverity
     * @return $this
     */
    public function setHighestSeverity($highestSeverity)
    {
        $this->values['HighestSeverity'] = $highestSeverity;
        return $this;
    }

    /**
     * Set Notifications
     *
     * @param Notification[] $notifications
     * @return $this
     */
    public function setNotifications(array $notifications)
    {
        $this->values['Notifications'] = $notifications;
        return $this;
    }

    /**
     * Set TransactionDetail
     *
     * @param TransactionDetail $transactionDetail
     * @return $this
     */
    public function setTransactionDetail(TransactionDetail $transactionDetail)
    {
        $this->values['TransactionDetail'] = $transactionDetail;
        return $this;
    }

    /**
     * Set Version
     *
     * @param VersionId $version
     * @return $this
     */
    public function setVersion(VersionId $version)
    {
        $this->values['Version'] = $version;
        return $this;
    }

    /**
     * Set CompletedShipmentDetail
     *
     * @param CompletedDangerousGoodsShipmentDetail $completedShipmentDetail
     * @return $this
     */
    public function setCompletedShipmentDetail(CompletedDangerousGoodsShipmentDetail $completedShipmentDetail)
    {
        $this->values['CompletedShipmentDetail'] = $completedShipmentDetail;
        return $this;
    }

    /**
     * Set CompletedHandlingUnitGroup
     *
     * @param CompletedDangerousGoodsHandlingUnitGroup $completedHandlingUnitGroup
     * @return $this
     */
    public function setCompletedHandlingUnitGroup(CompletedDangerousGoodsHandlingUnitGroup $completedHandlingUnitGroup)
    {
        $this->values['CompletedHandlingUnitGroup'] = $completedHandlingUnitGroup;
        return $this;
    }
}
