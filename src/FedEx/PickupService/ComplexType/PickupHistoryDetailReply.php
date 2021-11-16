<?php
namespace FedEx\PickupService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * PickupHistoryDetailReply
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 *
 * @property \FedEx\PickupService\SimpleType\NotificationSeverityType|string $HighestSeverity
 * @property Notification[] $Notifications
 * @property TransactionDetail $TransactionDetail
 * @property VersionId $Version
 * @property AssociatedAccount[] $AssociatedAccountNumbers
 * @property PickupOriginDetail $OriginDetail
 * @property ExpressFreightPickupDetail $ExpressFreightDetail
 * @property int $PackageCount
 * @property Weight $TotalWeight
 * @property \FedEx\PickupService\SimpleType\CarrierCodeType|string $CarrierCode
 * @property int $OversizePackageCount
 * @property string $Remarks
 * @property string $CommodityDescription
 * @property PickupHistoryEvent $LatestEvent
 * @property PickupTagDetail $TagDetail
 * @property FreightPickupDetail $FreightPickupDetail
 * @property \FedEx\PickupService\SimpleType\CountryRelationshipType|string $CountryRelationship
 * @property \FedEx\PickupService\SimpleType\PickupType|string $PickupType

 */
class PickupHistoryDetailReply extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'PickupHistoryDetailReply';

    /**
     * Set HighestSeverity
     *
     * @param \FedEx\PickupService\SimpleType\NotificationSeverityType|string $highestSeverity
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
     * Set AssociatedAccountNumbers
     *
     * @param AssociatedAccount[] $associatedAccountNumbers
     * @return $this
     */
    public function setAssociatedAccountNumbers(array $associatedAccountNumbers)
    {
        $this->values['AssociatedAccountNumbers'] = $associatedAccountNumbers;
        return $this;
    }

    /**
     * Set OriginDetail
     *
     * @param PickupOriginDetail $originDetail
     * @return $this
     */
    public function setOriginDetail(PickupOriginDetail $originDetail)
    {
        $this->values['OriginDetail'] = $originDetail;
        return $this;
    }

    /**
     * Set ExpressFreightDetail
     *
     * @param ExpressFreightPickupDetail $expressFreightDetail
     * @return $this
     */
    public function setExpressFreightDetail(ExpressFreightPickupDetail $expressFreightDetail)
    {
        $this->values['ExpressFreightDetail'] = $expressFreightDetail;
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
     * Set TotalWeight
     *
     * @param Weight $totalWeight
     * @return $this
     */
    public function setTotalWeight(Weight $totalWeight)
    {
        $this->values['TotalWeight'] = $totalWeight;
        return $this;
    }

    /**
     * Set CarrierCode
     *
     * @param \FedEx\PickupService\SimpleType\CarrierCodeType|string $carrierCode
     * @return $this
     */
    public function setCarrierCode($carrierCode)
    {
        $this->values['CarrierCode'] = $carrierCode;
        return $this;
    }

    /**
     * Set OversizePackageCount
     *
     * @param int $oversizePackageCount
     * @return $this
     */
    public function setOversizePackageCount($oversizePackageCount)
    {
        $this->values['OversizePackageCount'] = $oversizePackageCount;
        return $this;
    }

    /**
     * Set Remarks
     *
     * @param string $remarks
     * @return $this
     */
    public function setRemarks($remarks)
    {
        $this->values['Remarks'] = $remarks;
        return $this;
    }

    /**
     * Set CommodityDescription
     *
     * @param string $commodityDescription
     * @return $this
     */
    public function setCommodityDescription($commodityDescription)
    {
        $this->values['CommodityDescription'] = $commodityDescription;
        return $this;
    }

    /**
     * Set LatestEvent
     *
     * @param PickupHistoryEvent $latestEvent
     * @return $this
     */
    public function setLatestEvent(PickupHistoryEvent $latestEvent)
    {
        $this->values['LatestEvent'] = $latestEvent;
        return $this;
    }

    /**
     * Set TagDetail
     *
     * @param PickupTagDetail $tagDetail
     * @return $this
     */
    public function setTagDetail(PickupTagDetail $tagDetail)
    {
        $this->values['TagDetail'] = $tagDetail;
        return $this;
    }

    /**
     * Set FreightPickupDetail
     *
     * @param FreightPickupDetail $freightPickupDetail
     * @return $this
     */
    public function setFreightPickupDetail(FreightPickupDetail $freightPickupDetail)
    {
        $this->values['FreightPickupDetail'] = $freightPickupDetail;
        return $this;
    }

    /**
     * Describes the country relationship (domestic and/or international) among the shipments being picked up.
     *
     * @param \FedEx\PickupService\SimpleType\CountryRelationshipType|string $countryRelationship
     * @return $this
     */
    public function setCountryRelationship($countryRelationship)
    {
        $this->values['CountryRelationship'] = $countryRelationship;
        return $this;
    }

    /**
     * Set PickupType
     *
     * @param \FedEx\PickupService\SimpleType\PickupType|string $pickupType
     * @return $this
     */
    public function setPickupType($pickupType)
    {
        $this->values['PickupType'] = $pickupType;
        return $this;
    }
}
