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
     * return ValidatedHazardousCommodityDescription
     */
    public function setId($id)
    {
        $this->Id = $id;
        return $this;
    }
    
    /**
     * In conjunction with the regulatory identifier, this field uniquely identifies a specific hazardous materials commodity.
     *
     * @param nonNegativeInteger $sequenceNumber
     * return ValidatedHazardousCommodityDescription
     */
    public function setSequenceNumber($sequenceNumber)
    {
        $this->SequenceNumber = $sequenceNumber;
        return $this;
    }
    
    /**
     * Set PackingGroup
     *
     * @param \FedEx\ShipService\SimpleType\HazardousCommodityPackingGroupType|string $packingGroup
     * return ValidatedHazardousCommodityDescription
     */
    public function setPackingGroup($packingGroup)
    {
        $this->PackingGroup = $packingGroup;
        return $this;
    }
    
    /**
     * Set PackingInstructions
     *
     * @param string $packingInstructions
     * return ValidatedHazardousCommodityDescription
     */
    public function setPackingInstructions($packingInstructions)
    {
        $this->PackingInstructions = $packingInstructions;
        return $this;
    }
    
    /**
     * Set ProperShippingName
     *
     * @param string $properShippingName
     * return ValidatedHazardousCommodityDescription
     */
    public function setProperShippingName($properShippingName)
    {
        $this->ProperShippingName = $properShippingName;
        return $this;
    }
    
    /**
     * Fully-expanded descriptive text for a hazardous commodity.
     *
     * @param string $properShippingNameAndDescription
     * return ValidatedHazardousCommodityDescription
     */
    public function setProperShippingNameAndDescription($properShippingNameAndDescription)
    {
        $this->ProperShippingNameAndDescription = $properShippingNameAndDescription;
        return $this;
    }
    
    /**
     * Set TechnicalName
     *
     * @param string $technicalName
     * return ValidatedHazardousCommodityDescription
     */
    public function setTechnicalName($technicalName)
    {
        $this->TechnicalName = $technicalName;
        return $this;
    }
    
    /**
     * Set HazardClass
     *
     * @param string $hazardClass
     * return ValidatedHazardousCommodityDescription
     */
    public function setHazardClass($hazardClass)
    {
        $this->HazardClass = $hazardClass;
        return $this;
    }
    
    /**
     * Set SubsidiaryClasses
     *
     * @param string[] $subsidiaryClasses
     * return ValidatedHazardousCommodityDescription
     */
    public function setSubsidiaryClasses(array $subsidiaryClasses)
    {
        $this->SubsidiaryClasses = $subsidiaryClasses;
        return $this;
    }
    
    /**
     * Coded indications for special requirements or constraints.
     *
     * @param string $symbols
     * return ValidatedHazardousCommodityDescription
     */
    public function setSymbols($symbols)
    {
        $this->Symbols = $symbols;
        return $this;
    }
    
    /**
     * Set SpecialProvisions
     *
     * @param string $specialProvisions
     * return ValidatedHazardousCommodityDescription
     */
    public function setSpecialProvisions($specialProvisions)
    {
        $this->SpecialProvisions = $specialProvisions;
        return $this;
    }
    
    /**
     * Set Authorization
     *
     * @param string $authorization
     * return ValidatedHazardousCommodityDescription
     */
    public function setAuthorization($authorization)
    {
        $this->Authorization = $authorization;
        return $this;
    }
    
    /**
     * Set LabelText
     *
     * @param string $labelText
     * return ValidatedHazardousCommodityDescription
     */
    public function setLabelText($labelText)
    {
        $this->LabelText = $labelText;
        return $this;
    }
    

    
}