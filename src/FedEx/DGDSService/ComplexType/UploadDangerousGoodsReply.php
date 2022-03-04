<?php
namespace FedEx\DGDSService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * UploadDangerousGoodsReply
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Dangerous Goods Data Service
 *
 * @property \FedEx\DGDSService\SimpleType\NotificationSeverityType|string $HighestSeverity
 * @property Notification[] $Notifications
 * @property TransactionDetail $TransactionDetail
 * @property VersionId $Version
 * @property string $UploadId
 * @property TrackingId $MasterTrackingId
 * @property CompletedDangerousGoodsShipmentDetail $CompletedShipmentDetail
 * @property CompletedDangerousGoodsHandlingUnitGroup[] $CompletedHandlingUnitGroups

 */
class UploadDangerousGoodsReply extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'UploadDangerousGoodsReply';

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
     * The identifier of the upload, which can be used for subsequent retrieval or modification transactions.
     *
     * @param string $uploadId
     * @return $this
     */
    public function setUploadId($uploadId)
    {
        $this->values['UploadId'] = $uploadId;
        return $this;
    }

    /**
     * Set MasterTrackingId
     *
     * @param TrackingId $masterTrackingId
     * @return $this
     */
    public function setMasterTrackingId(TrackingId $masterTrackingId)
    {
        $this->values['MasterTrackingId'] = $masterTrackingId;
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
     * Set CompletedHandlingUnitGroups
     *
     * @param CompletedDangerousGoodsHandlingUnitGroup[] $completedHandlingUnitGroups
     * @return $this
     */
    public function setCompletedHandlingUnitGroups(array $completedHandlingUnitGroups)
    {
        $this->values['CompletedHandlingUnitGroups'] = $completedHandlingUnitGroups;
        return $this;
    }
}
