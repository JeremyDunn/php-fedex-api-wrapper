<?php
namespace FedEx\AddressValidationService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * ParsedStreetLineDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Address Validation Service
 *
 * @property string $HouseNumber
 * @property string $PreStreetType
 * @property string $LeadingDirectional
 * @property string $StreetName
 * @property string $StreetSuffix
 * @property string $TrailingDirectional
 * @property string $UnitLabel
 * @property string $UnitNumber
 * @property string $RuralRoute
 * @property string $POBox
 * @property string $Building
 * @property string $Organization

 */
class ParsedStreetLineDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ParsedStreetLineDetail';

    /**
     * Set HouseNumber
     *
     * @param string $houseNumber
     * @return $this
     */
    public function setHouseNumber($houseNumber)
    {
        $this->values['HouseNumber'] = $houseNumber;
        return $this;
    }

    /**
     * Set PreStreetType
     *
     * @param string $preStreetType
     * @return $this
     */
    public function setPreStreetType($preStreetType)
    {
        $this->values['PreStreetType'] = $preStreetType;
        return $this;
    }

    /**
     * Set LeadingDirectional
     *
     * @param string $leadingDirectional
     * @return $this
     */
    public function setLeadingDirectional($leadingDirectional)
    {
        $this->values['LeadingDirectional'] = $leadingDirectional;
        return $this;
    }

    /**
     * Set StreetName
     *
     * @param string $streetName
     * @return $this
     */
    public function setStreetName($streetName)
    {
        $this->values['StreetName'] = $streetName;
        return $this;
    }

    /**
     * Set StreetSuffix
     *
     * @param string $streetSuffix
     * @return $this
     */
    public function setStreetSuffix($streetSuffix)
    {
        $this->values['StreetSuffix'] = $streetSuffix;
        return $this;
    }

    /**
     * Set TrailingDirectional
     *
     * @param string $trailingDirectional
     * @return $this
     */
    public function setTrailingDirectional($trailingDirectional)
    {
        $this->values['TrailingDirectional'] = $trailingDirectional;
        return $this;
    }

    /**
     * Set UnitLabel
     *
     * @param string $unitLabel
     * @return $this
     */
    public function setUnitLabel($unitLabel)
    {
        $this->values['UnitLabel'] = $unitLabel;
        return $this;
    }

    /**
     * Set UnitNumber
     *
     * @param string $unitNumber
     * @return $this
     */
    public function setUnitNumber($unitNumber)
    {
        $this->values['UnitNumber'] = $unitNumber;
        return $this;
    }

    /**
     * Set RuralRoute
     *
     * @param string $ruralRoute
     * @return $this
     */
    public function setRuralRoute($ruralRoute)
    {
        $this->values['RuralRoute'] = $ruralRoute;
        return $this;
    }

    /**
     * Set POBox
     *
     * @param string $pOBox
     * @return $this
     */
    public function setPOBox($pOBox)
    {
        $this->values['POBox'] = $pOBox;
        return $this;
    }

    /**
     * Set Building
     *
     * @param string $building
     * @return $this
     */
    public function setBuilding($building)
    {
        $this->values['Building'] = $building;
        return $this;
    }

    /**
     * Set Organization
     *
     * @param string $organization
     * @return $this
     */
    public function setOrganization($organization)
    {
        $this->values['Organization'] = $organization;
        return $this;
    }
}
