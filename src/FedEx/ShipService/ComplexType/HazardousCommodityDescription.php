<?php
namespace FedEx\ShipService\ComplexType;

/**
 * Identifies and describes an individual hazardous commodity. For 201001 load, this is based on data from the FedEx Ground Hazardous Materials Shipping Guide.
 *
 * @version     $Revision: 4 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class HazardousCommodityDescription
    extends AbstractComplexType
{
    protected $_name = 'HazardousCommodityDescription';

    /**
     * Regulatory identifier for a commodity (e.g. "UN ID" value).
     *
     * @param string $Id
     * return HazardousCommodityDescription
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
     * return HazardousCommodityDescription
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
     * return HazardousCommodityDescription
     */
    public function setProperShippingName($properShippingName)
    {
        $this->ProperShippingName = $properShippingName;
        return $this;
    }
    
    /**
     * 
     *
     * @param string $TechnicalName
     * return HazardousCommodityDescription
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
     * return HazardousCommodityDescription
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
     * return HazardousCommodityDescription
     */
    public function setSubsidiaryClasses(array $subsidiaryClasses)
    {
        $this->SubsidiaryClasses = $subsidiaryClasses;
        return $this;
    }
    
    /**
     * 
     *
     * @param string $LabelText
     * return HazardousCommodityDescription
     */
    public function setLabelText($labelText)
    {
        $this->LabelText = $labelText;
        return $this;
    }
    

    
}