<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Identifies and describes an individual hazardous commodity. For 201001 load, this is based on data from the FedEx Ground Hazardous Materials Shipping Guide.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class HazardousCommodityDescription
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'HazardousCommodityDescription';

    /**
     * Regulatory identifier for a commodity (e.g. "UN ID" value).
     *
     * @param string $id
     * return HazardousCommodityDescription
     */
    public function setId($id)
    {
        $this->Id = $id;
        return $this;
    }
    
    /**
     * Set PackingGroup
     *
     * @param \FedEx\RateService\SimpleType\HazardousCommodityPackingGroupType|string $packingGroup
     * return HazardousCommodityDescription
     */
    public function setPackingGroup($packingGroup)
    {
        $this->PackingGroup = $packingGroup;
        return $this;
    }
    
    /**
     * Set ProperShippingName
     *
     * @param string $properShippingName
     * return HazardousCommodityDescription
     */
    public function setProperShippingName($properShippingName)
    {
        $this->ProperShippingName = $properShippingName;
        return $this;
    }
    
    /**
     * Set TechnicalName
     *
     * @param string $technicalName
     * return HazardousCommodityDescription
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
     * return HazardousCommodityDescription
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
     * return HazardousCommodityDescription
     */
    public function setSubsidiaryClasses(array $subsidiaryClasses)
    {
        $this->SubsidiaryClasses = $subsidiaryClasses;
        return $this;
    }
    
    /**
     * Set LabelText
     *
     * @param string $labelText
     * return HazardousCommodityDescription
     */
    public function setLabelText($labelText)
    {
        $this->LabelText = $labelText;
        return $this;
    }
    

    
}