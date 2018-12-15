<?php
namespace FedEx\LocationsService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specifies additional constraints on the attributes of the locations being searched.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Locations Service
 *
 * @property Distance $RadiusDistance
 * @property string $DropOffTimeNeeded
 * @property \FedEx\LocationsService\SimpleType\LocationSearchFilterType|string[] $ResultsFilters
 * @property \FedEx\LocationsService\SimpleType\SupportedRedirectToHoldServiceType|string[] $SupportedRedirectToHoldServices
 * @property \FedEx\LocationsService\SimpleType\LocationAttributesType|string[] $RequiredLocationAttributes
 * @property LocationCapabilityDetail[] $RequiredLocationCapabilities
 * @property LocationSupportedShipmentDetail $ShipmentDetail
 * @property int $ResultsToSkip
 * @property int $ResultsRequested
 * @property \FedEx\LocationsService\SimpleType\LocationContentOptionType|string[] $LocationContentOptions
 * @property \FedEx\LocationsService\SimpleType\FedExLocationType|string[] $LocationTypesToInclude

 */
class SearchLocationConstraints extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'SearchLocationConstraints';

    /**
     * Specifies value and units of the radius around the address to search for FedEx locations.
     *
     * @param Distance $radiusDistance
     * @return $this
     */
    public function setRadiusDistance(Distance $radiusDistance)
    {
        $this->values['RadiusDistance'] = $radiusDistance;
        return $this;
    }

    /**
     * Set DropOffTimeNeeded
     *
     * @param string $dropOffTimeNeeded
     * @return $this
     */
    public function setDropOffTimeNeeded($dropOffTimeNeeded)
    {
        $this->values['DropOffTimeNeeded'] = $dropOffTimeNeeded;
        return $this;
    }

    /**
     * Specifies the criteria used to filter the results of locations search.
     *
     * @param \FedEx\LocationsService\SimpleType\LocationSearchFilterType[]|string[] $resultsFilters
     * @return $this
     */
    public function setResultsFilters(array $resultsFilters)
    {
        $this->values['ResultsFilters'] = $resultsFilters;
        return $this;
    }

    /**
     * DEPRECATED as of July 2017; See requiredLocationCapabilities.
     *
     * @param \FedEx\LocationsService\SimpleType\SupportedRedirectToHoldServiceType[]|string[] $supportedRedirectToHoldServices
     * @return $this
     */
    public function setSupportedRedirectToHoldServices(array $supportedRedirectToHoldServices)
    {
        $this->values['SupportedRedirectToHoldServices'] = $supportedRedirectToHoldServices;
        return $this;
    }

    /**
     * Set RequiredLocationAttributes
     *
     * @param \FedEx\LocationsService\SimpleType\LocationAttributesType[]|string[] $requiredLocationAttributes
     * @return $this
     */
    public function setRequiredLocationAttributes(array $requiredLocationAttributes)
    {
        $this->values['RequiredLocationAttributes'] = $requiredLocationAttributes;
        return $this;
    }

    /**
     * Set RequiredLocationCapabilities
     *
     * @param LocationCapabilityDetail[] $requiredLocationCapabilities
     * @return $this
     */
    public function setRequiredLocationCapabilities(array $requiredLocationCapabilities)
    {
        $this->values['RequiredLocationCapabilities'] = $requiredLocationCapabilities;
        return $this;
    }

    /**
     * Set ShipmentDetail
     *
     * @param LocationSupportedShipmentDetail $shipmentDetail
     * @return $this
     */
    public function setShipmentDetail(LocationSupportedShipmentDetail $shipmentDetail)
    {
        $this->values['ShipmentDetail'] = $shipmentDetail;
        return $this;
    }

    /**
     * Set ResultsToSkip
     *
     * @param int $resultsToSkip
     * @return $this
     */
    public function setResultsToSkip($resultsToSkip)
    {
        $this->values['ResultsToSkip'] = $resultsToSkip;
        return $this;
    }

    /**
     * Set ResultsRequested
     *
     * @param int $resultsRequested
     * @return $this
     */
    public function setResultsRequested($resultsRequested)
    {
        $this->values['ResultsRequested'] = $resultsRequested;
        return $this;
    }

    /**
     * Set LocationContentOptions
     *
     * @param \FedEx\LocationsService\SimpleType\LocationContentOptionType[]|string[] $locationContentOptions
     * @return $this
     */
    public function setLocationContentOptions(array $locationContentOptions)
    {
        $this->values['LocationContentOptions'] = $locationContentOptions;
        return $this;
    }

    /**
     * Set LocationTypesToInclude
     *
     * @param \FedEx\LocationsService\SimpleType\FedExLocationType[]|string[] $locationTypesToInclude
     * @return $this
     */
    public function setLocationTypesToInclude(array $locationTypesToInclude)
    {
        $this->values['LocationTypesToInclude'] = $locationTypesToInclude;
        return $this;
    }
}
