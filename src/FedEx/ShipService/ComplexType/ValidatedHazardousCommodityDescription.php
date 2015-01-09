<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Identifies and describes an individual hazardous commodity. For 201001 load, this is based on data from the FedEx Ground Hazardous Materials Shipping Guide.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class ValidatedHazardousCommodityDescription
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'ValidatedHazardousCommodityDescription';

    /**
     * Regulatory identifier for a commodity (e.g. "UN ID" value).
     *
     * @param string $id
     * @return ValidatedHazardousCommodityDescription
     */
    public function setId($id)
    {
        $this->Id = $id;
        return $this;
    }
    
    /**
     * Returns Regulatory identifier for a commodity (e.g. "UN ID" value).
     *
     * @return string
     */
    public function getId()
    {
        return $this->Id;
    }
    
    /**
     * In conjunction with the regulatory identifier, this field uniquely identifies a specific hazardous materials commodity.
     *
     * @param nonNegativeInteger $sequenceNumber
     * @return ValidatedHazardousCommodityDescription
     */
    public function setSequenceNumber($sequenceNumber)
    {
        $this->SequenceNumber = $sequenceNumber;
        return $this;
    }
    
    /**
     * Returns In conjunction with the regulatory identifier, this field uniquely identifies a specific hazardous materials commodity.
     *
     * @return nonNegativeInteger
     */
    public function getSequenceNumber()
    {
        return $this->SequenceNumber;
    }
    
    /**
     * Set PackingGroup
     *
     * @param \FedEx\ShipService\SimpleType\HazardousCommodityPackingGroupType|string $packingGroup
     * @return ValidatedHazardousCommodityDescription
     */
    public function setPackingGroup($packingGroup)
    {
        $this->PackingGroup = $packingGroup;
        return $this;
    }
    
    /**
     * Returns Set PackingGroup
     *
     * @return \FedEx\ShipService\SimpleType\HazardousCommodityPackingGroupType|string
     */
    public function getPackingGroup()
    {
        return $this->PackingGroup;
    }
    
    /**
     * Set PackingInstructions
     *
     * @param string $packingInstructions
     * @return ValidatedHazardousCommodityDescription
     */
    public function setPackingInstructions($packingInstructions)
    {
        $this->PackingInstructions = $packingInstructions;
        return $this;
    }
    
    /**
     * Returns Set PackingInstructions
     *
     * @return string
     */
    public function getPackingInstructions()
    {
        return $this->PackingInstructions;
    }
    
    /**
     * Set ProperShippingName
     *
     * @param string $properShippingName
     * @return ValidatedHazardousCommodityDescription
     */
    public function setProperShippingName($properShippingName)
    {
        $this->ProperShippingName = $properShippingName;
        return $this;
    }
    
    /**
     * Returns Set ProperShippingName
     *
     * @return string
     */
    public function getProperShippingName()
    {
        return $this->ProperShippingName;
    }
    
    /**
     * Fully-expanded descriptive text for a hazardous commodity.
     *
     * @param string $properShippingNameAndDescription
     * @return ValidatedHazardousCommodityDescription
     */
    public function setProperShippingNameAndDescription($properShippingNameAndDescription)
    {
        $this->ProperShippingNameAndDescription = $properShippingNameAndDescription;
        return $this;
    }
    
    /**
     * Returns Fully-expanded descriptive text for a hazardous commodity.
     *
     * @return string
     */
    public function getProperShippingNameAndDescription()
    {
        return $this->ProperShippingNameAndDescription;
    }
    
    /**
     * Set TechnicalName
     *
     * @param string $technicalName
     * @return ValidatedHazardousCommodityDescription
     */
    public function setTechnicalName($technicalName)
    {
        $this->TechnicalName = $technicalName;
        return $this;
    }
    
    /**
     * Returns Set TechnicalName
     *
     * @return string
     */
    public function getTechnicalName()
    {
        return $this->TechnicalName;
    }
    
    /**
     * Set HazardClass
     *
     * @param string $hazardClass
     * @return ValidatedHazardousCommodityDescription
     */
    public function setHazardClass($hazardClass)
    {
        $this->HazardClass = $hazardClass;
        return $this;
    }
    
    /**
     * Returns Set HazardClass
     *
     * @return string
     */
    public function getHazardClass()
    {
        return $this->HazardClass;
    }
    
    /**
     * Set SubsidiaryClasses
     *
     * @param string[] $subsidiaryClasses
     * @return ValidatedHazardousCommodityDescription
     */
    public function setSubsidiaryClasses(array $subsidiaryClasses)
    {
        $this->SubsidiaryClasses = $subsidiaryClasses;
        return $this;
    }
    
    /**
     * Returns Set SubsidiaryClasses
     *
     * @return string[]
     */
    public function getSubsidiaryClasses()
    {
        return $this->SubsidiaryClasses;
    }
    
    /**
     * Coded indications for special requirements or constraints.
     *
     * @param string $symbols
     * @return ValidatedHazardousCommodityDescription
     */
    public function setSymbols($symbols)
    {
        $this->Symbols = $symbols;
        return $this;
    }
    
    /**
     * Returns Coded indications for special requirements or constraints.
     *
     * @return string
     */
    public function getSymbols()
    {
        return $this->Symbols;
    }
    
    /**
     * Set SpecialProvisions
     *
     * @param string $specialProvisions
     * @return ValidatedHazardousCommodityDescription
     */
    public function setSpecialProvisions($specialProvisions)
    {
        $this->SpecialProvisions = $specialProvisions;
        return $this;
    }
    
    /**
     * Returns Set SpecialProvisions
     *
     * @return string
     */
    public function getSpecialProvisions()
    {
        return $this->SpecialProvisions;
    }
    
    /**
     * Set Authorization
     *
     * @param string $authorization
     * @return ValidatedHazardousCommodityDescription
     */
    public function setAuthorization($authorization)
    {
        $this->Authorization = $authorization;
        return $this;
    }
    
    /**
     * Returns Set Authorization
     *
     * @return string
     */
    public function getAuthorization()
    {
        return $this->Authorization;
    }
    
    /**
     * Set LabelText
     *
     * @param string $labelText
     * @return ValidatedHazardousCommodityDescription
     */
    public function setLabelText($labelText)
    {
        $this->LabelText = $labelText;
        return $this;
    }
    
    /**
     * Returns Set LabelText
     *
     * @return string
     */
    public function getLabelText()
    {
        return $this->LabelText;
    }
    

    
}