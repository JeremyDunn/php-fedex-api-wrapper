<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Identifies and describes an individual hazardous commodity. For 201001 load, this is based on data from the FedEx Ground Hazardous Materials Shipping Guide.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 *
 * @property string $Id
 * @property int $SequenceNumber
 * @property \FedEx\ShipService\SimpleType\HazardousCommodityPackingGroupType|string $PackingGroup
 * @property string $PackingInstructions
 * @property string $ProperShippingName
 * @property string $ProperShippingNameAndDescription
 * @property string $TechnicalName
 * @property string $HazardClass
 * @property string[] $SubsidiaryClasses
 * @property string $Symbols
 * @property string $TunnelRestrictionCode
 * @property string $SpecialProvisions
 * @property \FedEx\ShipService\SimpleType\HazardousCommodityAttributeType|string[] $Attributes
 * @property string $Authorization
 * @property string $LabelText

 */
class ValidatedHazardousCommodityDescription extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ValidatedHazardousCommodityDescription';

    /**
     * Regulatory identifier for a commodity (e.g. "UN ID" value).
     *
     * @param string $id
     * @return $this
     */
    public function setId($id)
    {
        $this->values['Id'] = $id;
        return $this;
    }

    /**
     * In conjunction with the regulatory identifier, this field uniquely identifies a specific hazardous materials commodity.
     *
     * @param int $sequenceNumber
     * @return $this
     */
    public function setSequenceNumber($sequenceNumber)
    {
        $this->values['SequenceNumber'] = $sequenceNumber;
        return $this;
    }

    /**
     * Set PackingGroup
     *
     * @param \FedEx\ShipService\SimpleType\HazardousCommodityPackingGroupType|string $packingGroup
     * @return $this
     */
    public function setPackingGroup($packingGroup)
    {
        $this->values['PackingGroup'] = $packingGroup;
        return $this;
    }

    /**
     * Set PackingInstructions
     *
     * @param string $packingInstructions
     * @return $this
     */
    public function setPackingInstructions($packingInstructions)
    {
        $this->values['PackingInstructions'] = $packingInstructions;
        return $this;
    }

    /**
     * Set ProperShippingName
     *
     * @param string $properShippingName
     * @return $this
     */
    public function setProperShippingName($properShippingName)
    {
        $this->values['ProperShippingName'] = $properShippingName;
        return $this;
    }

    /**
     * Fully-expanded descriptive text for a hazardous commodity.
     *
     * @param string $properShippingNameAndDescription
     * @return $this
     */
    public function setProperShippingNameAndDescription($properShippingNameAndDescription)
    {
        $this->values['ProperShippingNameAndDescription'] = $properShippingNameAndDescription;
        return $this;
    }

    /**
     * Set TechnicalName
     *
     * @param string $technicalName
     * @return $this
     */
    public function setTechnicalName($technicalName)
    {
        $this->values['TechnicalName'] = $technicalName;
        return $this;
    }

    /**
     * Set HazardClass
     *
     * @param string $hazardClass
     * @return $this
     */
    public function setHazardClass($hazardClass)
    {
        $this->values['HazardClass'] = $hazardClass;
        return $this;
    }

    /**
     * Set SubsidiaryClasses
     *
     * @param string $subsidiaryClasses
     * @return $this
     */
    public function setSubsidiaryClasses($subsidiaryClasses)
    {
        $this->values['SubsidiaryClasses'] = $subsidiaryClasses;
        return $this;
    }

    /**
     * Coded indications for special requirements or constraints.
     *
     * @param string $symbols
     * @return $this
     */
    public function setSymbols($symbols)
    {
        $this->values['Symbols'] = $symbols;
        return $this;
    }

    /**
     * Set TunnelRestrictionCode
     *
     * @param string $tunnelRestrictionCode
     * @return $this
     */
    public function setTunnelRestrictionCode($tunnelRestrictionCode)
    {
        $this->values['TunnelRestrictionCode'] = $tunnelRestrictionCode;
        return $this;
    }

    /**
     * Set SpecialProvisions
     *
     * @param string $specialProvisions
     * @return $this
     */
    public function setSpecialProvisions($specialProvisions)
    {
        $this->values['SpecialProvisions'] = $specialProvisions;
        return $this;
    }

    /**
     * Set Attributes
     *
     * @param \FedEx\ShipService\SimpleType\HazardousCommodityAttributeType[]|string[] $attributes
     * @return $this
     */
    public function setAttributes(array $attributes)
    {
        $this->values['Attributes'] = $attributes;
        return $this;
    }

    /**
     * Set Authorization
     *
     * @param string $authorization
     * @return $this
     */
    public function setAuthorization($authorization)
    {
        $this->values['Authorization'] = $authorization;
        return $this;
    }

    /**
     * Set LabelText
     *
     * @param string $labelText
     * @return $this
     */
    public function setLabelText($labelText)
    {
        $this->values['LabelText'] = $labelText;
        return $this;
    }
}
