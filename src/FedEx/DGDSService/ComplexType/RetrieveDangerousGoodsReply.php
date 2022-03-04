<?php
namespace FedEx\DGDSService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * RetrieveDangerousGoodsReply
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Dangerous Goods Data Service
 *
 * @property \FedEx\DGDSService\SimpleType\NotificationSeverityType|string $HighestSeverity
 * @property Notification[] $Notifications
 * @property TransactionDetail $TransactionDetail
 * @property VersionId $Version
 * @property RecordedDangerousGoodsShipmentDetail $ShipmentDetail
 * @property RecordedDangerousGoodsHandlingUnitGroup[] $HandlingUnitGroups

 */
class RetrieveDangerousGoodsReply extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'RetrieveDangerousGoodsReply';

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
     * Set ShipmentDetail
     *
     * @param RecordedDangerousGoodsShipmentDetail $shipmentDetail
     * @return $this
     */
    public function setShipmentDetail(RecordedDangerousGoodsShipmentDetail $shipmentDetail)
    {
        $this->values['ShipmentDetail'] = $shipmentDetail;
        return $this;
    }

    /**
     * Set HandlingUnitGroups
     *
     * @param RecordedDangerousGoodsHandlingUnitGroup[] $handlingUnitGroups
     * @return $this
     */
    public function setHandlingUnitGroups(array $handlingUnitGroups)
    {
        $this->values['HandlingUnitGroups'] = $handlingUnitGroups;
        return $this;
    }
}
