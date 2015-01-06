<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * The descriptive data required for a FedEx shipment containing dangerous goods (hazardous materials).
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class DangerousGoodsDetail
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'DangerousGoodsDetail';

    /**
     * Identifies whether or not the products being shipped are required to be accessible during delivery.
     *
     * @param \FedEx\RateService\SimpleType\DangerousGoodsAccessibilityType|string $accessibility
     * @return DangerousGoodsDetail
     */
    public function setAccessibility($accessibility)
    {
        $this->Accessibility = $accessibility;
        return $this;
    }
    
    /**
     * Returns Identifies whether or not the products being shipped are required to be accessible during delivery.
     *
     * @return \FedEx\RateService\SimpleType\DangerousGoodsAccessibilityType|string
     */
    public function getAccessibility()
    {
        return $this->Accessibility;
    }
    
    /**
     * Shipment is packaged/documented for movement ONLY on cargo aircraft.
     *
     * @param boolean $cargoAircraftOnly
     * @return DangerousGoodsDetail
     */
    public function setCargoAircraftOnly($cargoAircraftOnly)
    {
        $this->CargoAircraftOnly = $cargoAircraftOnly;
        return $this;
    }
    
    /**
     * Returns Shipment is packaged/documented for movement ONLY on cargo aircraft.
     *
     * @return boolean
     */
    public function getCargoAircraftOnly()
    {
        return $this->CargoAircraftOnly;
    }
    
    /**
     * Indicates which kinds of hazardous content are in the current package.
     *
     * @param HazardousCommodityOptionType[] $options
     * @return DangerousGoodsDetail
     */
    public function setOptions(array $options)
    {
        $this->Options = $options;
        return $this;
    }
    
    /**
     * Returns Indicates which kinds of hazardous content are in the current package.
     *
     * @return HazardousCommodityOptionType[]
     */
    public function getOptions()
    {
        return $this->Options;
    }
    
    /**
     * Documents the kinds and quantities of all hazardous commodities in the current package.
     *
     * @param HazardousCommodityContent[] $hazardousCommodities
     * @return DangerousGoodsDetail
     */
    public function setHazardousCommodities(array $hazardousCommodities)
    {
        $this->HazardousCommodities = $hazardousCommodities;
        return $this;
    }
    
    /**
     * Returns Documents the kinds and quantities of all hazardous commodities in the current package.
     *
     * @return HazardousCommodityContent[]
     */
    public function getHazardousCommodities()
    {
        return $this->HazardousCommodities;
    }
    
    /**
     * Description of the packaging of this commodity, suitable for use on OP-900 and OP-950 forms.
     *
     * @param HazardousCommodityPackagingDetail $packaging
     * @return DangerousGoodsDetail
     */
    public function setPackaging(HazardousCommodityPackagingDetail $packaging)
    {
        $this->Packaging = $packaging;
        return $this;
    }
    
    /**
     * Returns Description of the packaging of this commodity, suitable for use on OP-900 and OP-950 forms.
     *
     * @return HazardousCommodityPackagingDetail
     */
    public function getPackaging()
    {
        return $this->Packaging;
    }
    
    /**
     * Telephone number to use for contact in the event of an emergency.
     *
     * @param string $emergencyContactNumber
     * @return DangerousGoodsDetail
     */
    public function setEmergencyContactNumber($emergencyContactNumber)
    {
        $this->EmergencyContactNumber = $emergencyContactNumber;
        return $this;
    }
    
    /**
     * Returns Telephone number to use for contact in the event of an emergency.
     *
     * @return string
     */
    public function getEmergencyContactNumber()
    {
        return $this->EmergencyContactNumber;
    }
    
    /**
     * Offeror's name or contract number, per DOT regulation.
     *
     * @param string $offeror
     * @return DangerousGoodsDetail
     */
    public function setOfferor($offeror)
    {
        $this->Offeror = $offeror;
        return $this;
    }
    
    /**
     * Returns Offeror's name or contract number, per DOT regulation.
     *
     * @return string
     */
    public function getOfferor()
    {
        return $this->Offeror;
    }
    

    
}