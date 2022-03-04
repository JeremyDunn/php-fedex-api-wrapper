<?php
namespace FedEx\OpenShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * CreateConsolidationReply
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  OpenShip Service
 *
 * @property \FedEx\OpenShipService\SimpleType\NotificationSeverityType|string $HighestSeverity
 * @property Notification[] $Notifications
 * @property TransactionDetail $TransactionDetail
 * @property VersionId $Version
 * @property ConsolidationKey $ConsolidationKey
 * @property TrackingId[] $TrackingIds
 * @property RequestedDistributionLocation[] $EffectiveDistributionLocations

 */
class CreateConsolidationReply extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'CreateConsolidationReply';

    /**
     * Set HighestSeverity
     *
     * @param \FedEx\OpenShipService\SimpleType\NotificationSeverityType|string $highestSeverity
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
     * Set ConsolidationKey
     *
     * @param ConsolidationKey $consolidationKey
     * @return $this
     */
    public function setConsolidationKey(ConsolidationKey $consolidationKey)
    {
        $this->values['ConsolidationKey'] = $consolidationKey;
        return $this;
    }

    /**
     * Initially contains only Master Air Way Bill tracking ID.
     *
     * @param TrackingId[] $trackingIds
     * @return $this
     */
    public function setTrackingIds(array $trackingIds)
    {
        $this->values['TrackingIds'] = $trackingIds;
        return $this;
    }

    /**
     * Set EffectiveDistributionLocations
     *
     * @param RequestedDistributionLocation[] $effectiveDistributionLocations
     * @return $this
     */
    public function setEffectiveDistributionLocations(array $effectiveDistributionLocations)
    {
        $this->values['EffectiveDistributionLocations'] = $effectiveDistributionLocations;
        return $this;
    }
}
