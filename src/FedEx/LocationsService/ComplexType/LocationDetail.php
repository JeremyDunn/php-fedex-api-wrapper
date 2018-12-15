<?php
namespace FedEx\LocationsService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Describes an individual location providing a set of customer service features.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Locations Service
 *
 * @property string $LocationId
 * @property string $StoreNumber
 * @property LocationContactAndAddress $LocationContactAndAddress
 * @property string $SpecialInstructions
 * @property string $GeographicCoordinates
 * @property string $TimeZoneOffset
 * @property \FedEx\LocationsService\SimpleType\FedExLocationType|string $LocationType
 * @property string $LocationTypeForDisplay
 * @property \FedEx\LocationsService\SimpleType\LocationAttributesType|string[] $Attributes
 * @property LocationCapabilityDetail[] $LocationCapabilities
 * @property LocationPackageLimitsDetail $PackageMaximumLimits
 * @property ClearanceLocationDetail $ClearanceLocationDetail
 * @property LocationIdentificationDetail[] $ServicingLocationDetails
 * @property string $AcceptedCurrency
 * @property Holiday[] $LocationHolidays
 * @property string $MapUrl
 * @property string $EntityId
 * @property LocationHours[] $NormalHours
 * @property LocationHours[] $ExceptionalHours
 * @property LocationHours[] $HoursForEffectiveDate
 * @property CarrierDetail[] $CarrierDetails

 */
class LocationDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'LocationDetail';

    /**
     * Set LocationId
     *
     * @param string $locationId
     * @return $this
     */
    public function setLocationId($locationId)
    {
        $this->values['LocationId'] = $locationId;
        return $this;
    }

    /**
     * Set StoreNumber
     *
     * @param string $storeNumber
     * @return $this
     */
    public function setStoreNumber($storeNumber)
    {
        $this->values['StoreNumber'] = $storeNumber;
        return $this;
    }

    /**
     * Set LocationContactAndAddress
     *
     * @param LocationContactAndAddress $locationContactAndAddress
     * @return $this
     */
    public function setLocationContactAndAddress(LocationContactAndAddress $locationContactAndAddress)
    {
        $this->values['LocationContactAndAddress'] = $locationContactAndAddress;
        return $this;
    }

    /**
     * Set SpecialInstructions
     *
     * @param string $specialInstructions
     * @return $this
     */
    public function setSpecialInstructions($specialInstructions)
    {
        $this->values['SpecialInstructions'] = $specialInstructions;
        return $this;
    }

    /**
     * Set GeographicCoordinates
     *
     * @param string $geographicCoordinates
     * @return $this
     */
    public function setGeographicCoordinates($geographicCoordinates)
    {
        $this->values['GeographicCoordinates'] = $geographicCoordinates;
        return $this;
    }

    /**
     * Set TimeZoneOffset
     *
     * @param string $timeZoneOffset
     * @return $this
     */
    public function setTimeZoneOffset($timeZoneOffset)
    {
        $this->values['TimeZoneOffset'] = $timeZoneOffset;
        return $this;
    }

    /**
     * Set LocationType
     *
     * @param \FedEx\LocationsService\SimpleType\FedExLocationType|string $locationType
     * @return $this
     */
    public function setLocationType($locationType)
    {
        $this->values['LocationType'] = $locationType;
        return $this;
    }

    /**
     * Branded text associated with this location type.
     *
     * @param string $locationTypeForDisplay
     * @return $this
     */
    public function setLocationTypeForDisplay($locationTypeForDisplay)
    {
        $this->values['LocationTypeForDisplay'] = $locationTypeForDisplay;
        return $this;
    }

    /**
     * Set Attributes
     *
     * @param \FedEx\LocationsService\SimpleType\LocationAttributesType[]|string[] $attributes
     * @return $this
     */
    public function setAttributes(array $attributes)
    {
        $this->values['Attributes'] = $attributes;
        return $this;
    }

    /**
     * Set LocationCapabilities
     *
     * @param LocationCapabilityDetail[] $locationCapabilities
     * @return $this
     */
    public function setLocationCapabilities(array $locationCapabilities)
    {
        $this->values['LocationCapabilities'] = $locationCapabilities;
        return $this;
    }

    /**
     * The maximum values for various package attributes that are supported at the location.
     *
     * @param LocationPackageLimitsDetail $packageMaximumLimits
     * @return $this
     */
    public function setPackageMaximumLimits(LocationPackageLimitsDetail $packageMaximumLimits)
    {
        $this->values['PackageMaximumLimits'] = $packageMaximumLimits;
        return $this;
    }

    /**
     * Details about the clearance location.
     *
     * @param ClearanceLocationDetail $clearanceLocationDetail
     * @return $this
     */
    public function setClearanceLocationDetail(ClearanceLocationDetail $clearanceLocationDetail)
    {
        $this->values['ClearanceLocationDetail'] = $clearanceLocationDetail;
        return $this;
    }

    /**
     * Details about the FedEx administrative locations that may provide services to this location.
     *
     * @param LocationIdentificationDetail[] $servicingLocationDetails
     * @return $this
     */
    public function setServicingLocationDetails(array $servicingLocationDetails)
    {
        $this->values['ServicingLocationDetails'] = $servicingLocationDetails;
        return $this;
    }

    /**
     * Set AcceptedCurrency
     *
     * @param string $acceptedCurrency
     * @return $this
     */
    public function setAcceptedCurrency($acceptedCurrency)
    {
        $this->values['AcceptedCurrency'] = $acceptedCurrency;
        return $this;
    }

    /**
     * Set LocationHolidays
     *
     * @param Holiday[] $locationHolidays
     * @return $this
     */
    public function setLocationHolidays(array $locationHolidays)
    {
        $this->values['LocationHolidays'] = $locationHolidays;
        return $this;
    }

    /**
     * Set MapUrl
     *
     * @param string $mapUrl
     * @return $this
     */
    public function setMapUrl($mapUrl)
    {
        $this->values['MapUrl'] = $mapUrl;
        return $this;
    }

    /**
     * Set EntityId
     *
     * @param string $entityId
     * @return $this
     */
    public function setEntityId($entityId)
    {
        $this->values['EntityId'] = $entityId;
        return $this;
    }

    /**
     * Normal operating hours for the location.
     *
     * @param LocationHours[] $normalHours
     * @return $this
     */
    public function setNormalHours(array $normalHours)
    {
        $this->values['NormalHours'] = $normalHours;
        return $this;
    }

    /**
     * Operating hours for the location that are exception from the normal hours of operation.
     *
     * @param LocationHours[] $exceptionalHours
     * @return $this
     */
    public function setExceptionalHours(array $exceptionalHours)
    {
        $this->values['ExceptionalHours'] = $exceptionalHours;
        return $this;
    }

    /**
     * Set HoursForEffectiveDate
     *
     * @param LocationHours[] $hoursForEffectiveDate
     * @return $this
     */
    public function setHoursForEffectiveDate(array $hoursForEffectiveDate)
    {
        $this->values['HoursForEffectiveDate'] = $hoursForEffectiveDate;
        return $this;
    }

    /**
     * Set CarrierDetails
     *
     * @param CarrierDetail[] $carrierDetails
     * @return $this
     */
    public function setCarrierDetails(array $carrierDetails)
    {
        $this->values['CarrierDetails'] = $carrierDetails;
        return $this;
    }
}
