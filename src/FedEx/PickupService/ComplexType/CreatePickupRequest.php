<?php
namespace FedEx\PickupService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * CreatePickupRequest
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 *
 * @property WebAuthenticationDetail $WebAuthenticationDetail
 * @property ClientDetail $ClientDetail
 * @property TransactionDetail $TransactionDetail
 * @property VersionId $Version
 * @property AssociatedAccount $AssociatedAccountNumber
 * @property string $TrackingNumber
 * @property PickupOriginDetail $OriginDetail
 * @property \FedEx\PickupService\SimpleType\PickupServiceCategoryType|string $PickupServiceCategory
 * @property FreightPickupDetail $FreightPickupDetail
 * @property ExpressFreightPickupDetail $ExpressFreightDetail
 * @property int $PackageCount
 * @property Weight $TotalWeight
 * @property \FedEx\PickupService\SimpleType\CarrierCodeType|string $CarrierCode
 * @property int $OversizePackageCount
 * @property string $Remarks
 * @property string $CommodityDescription
 * @property \FedEx\PickupService\SimpleType\CountryRelationshipType|string $CountryRelationship

 */
class CreatePickupRequest extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'CreatePickupRequest';

    /**
     * Descriptive data to be used in authentication of the sender's identity (and right to use FedEx web services).
     *
     * @param WebAuthenticationDetail $webAuthenticationDetail
     * @return $this
     */
    public function setWebAuthenticationDetail(WebAuthenticationDetail $webAuthenticationDetail)
    {
        $this->values['WebAuthenticationDetail'] = $webAuthenticationDetail;
        return $this;
    }

    /**
     * Set ClientDetail
     *
     * @param ClientDetail $clientDetail
     * @return $this
     */
    public function setClientDetail(ClientDetail $clientDetail)
    {
        $this->values['ClientDetail'] = $clientDetail;
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
     * Set AssociatedAccountNumber
     *
     * @param AssociatedAccount $associatedAccountNumber
     * @return $this
     */
    public function setAssociatedAccountNumber(AssociatedAccount $associatedAccountNumber)
    {
        $this->values['AssociatedAccountNumber'] = $associatedAccountNumber;
        return $this;
    }

    /**
     * Specifies the tracking number to be used for processing a pickup for a return shipment.
     *
     * @param string $trackingNumber
     * @return $this
     */
    public function setTrackingNumber($trackingNumber)
    {
        $this->values['TrackingNumber'] = $trackingNumber;
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
     * Set PickupServiceCategory
     *
     * @param \FedEx\PickupService\SimpleType\PickupServiceCategoryType|string $pickupServiceCategory
     * @return $this
     */
    public function setPickupServiceCategory($pickupServiceCategory)
    {
        $this->values['PickupServiceCategory'] = $pickupServiceCategory;
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
     * This field is being deprecated and will not be removed in the June 2014 load.
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
}
