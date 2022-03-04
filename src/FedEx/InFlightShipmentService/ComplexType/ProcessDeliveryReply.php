<?php
namespace FedEx\InFlightShipmentService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Reply parameter of IFSS method to process a specific delivery option
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  In Flight Shipment Service
 *
 * @property \FedEx\InFlightShipmentService\SimpleType\NotificationSeverityType|string $HighestSeverity
 * @property Notification[] $Notifications
 * @property TransactionDetail $TransactionDetail
 * @property VersionId $Version
 * @property string $Confirmation
 * @property TrackingId $MasterTrackingNumber
 * @property int $PackageCount
 * @property string $EstimatedDeliveryTimestamp

 */
class ProcessDeliveryReply extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ProcessDeliveryReply';

    /**
     * Set HighestSeverity
     *
     * @param \FedEx\InFlightShipmentService\SimpleType\NotificationSeverityType|string $highestSeverity
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
     * Set Confirmation
     *
     * @param string $confirmation
     * @return $this
     */
    public function setConfirmation($confirmation)
    {
        $this->values['Confirmation'] = $confirmation;
        return $this;
    }

    /**
     * Set MasterTrackingNumber
     *
     * @param TrackingId $masterTrackingNumber
     * @return $this
     */
    public function setMasterTrackingNumber(TrackingId $masterTrackingNumber)
    {
        $this->values['MasterTrackingNumber'] = $masterTrackingNumber;
        return $this;
    }

    /**
     * Set PackageCount
     *
     * @param int $packageCount
     * @return $this
     */
    public function setPackageCount($packageCount)
    {
        $this->values['PackageCount'] = $packageCount;
        return $this;
    }

    /**
     * Projected delivery time based on delivery option requested.
     *
     * @param string $estimatedDeliveryTimestamp
     * @return $this
     */
    public function setEstimatedDeliveryTimestamp($estimatedDeliveryTimestamp)
    {
        $this->values['EstimatedDeliveryTimestamp'] = $estimatedDeliveryTimestamp;
        return $this;
    }
}
