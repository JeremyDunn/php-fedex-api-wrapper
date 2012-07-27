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
    protected $_name = 'ValidatedHazardousCommodityDescription';

    /**
     * Regulatory identifier for a commodity (e.g. "UN ID" value).
     *
     * @param string $Id
     * return ValidatedHazardousCommodityDescription
     */
    public function setId($id)
    {
        $this->Id = $id;
        return $this;
    }
    
    /**
     * 
     *
     * @param HazardousCommodityPackingGroupType $PackingGroup
     * return ValidatedHazardousCommodityDescription
     */
    public function setPackingGroup(\FedEx\ShipService\SimpleType\HazardousCommodityPackingGroupType $packingGroup)
    {
        $this->PackingGroup = $packingGroup;
        return $this;
    }
    
    /**
     * 
     *
     * @param string $ProperShippingName
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
     * @param string $ProperShippingNameAndDescription
     * return ValidatedHazardousCommodityDescription
     */
    public function setProperShippingNameAndDescription($properShippingNameAndDescription)
    {
        $this->ProperShippingNameAndDescription = $properShippingNameAndDescription;
        return $this;
    }
    
    /**
     * 
     *
     * @param string $TechnicalName
     * return ValidatedHazardousCommodityDescription
     */
    public function setTechnicalName($technicalName)
    {
        $this->TechnicalName = $technicalName;
        return $this;
    }
    
    /**
     * 
     *
     * @param string $HazardClass
     * return ValidatedHazardousCommodityDescription
     */
    public function setHazardClass($hazardClass)
    {
        $this->HazardClass = $hazardClass;
        return $this;
    }
    
    /**
     * 
     *
     * @param array[string] $SubsidiaryClasses
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
     * @param string $Symbols
     * return ValidatedHazardousCommodityDescription
     */
    public function setSymbols($symbols)
    {
        $this->Symbols = $symbols;
        return $this;
    }
    
    /**
     * 
     *
     * @param string $LabelText
     * return ValidatedHazardousCommodityDescription
     */
    public function setLabelText($labelText)
    {
        $this->LabelText = $labelText;
        return $this;
    }
    

    
}