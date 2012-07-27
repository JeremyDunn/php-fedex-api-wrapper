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
    protected $_name = 'DangerousGoodsDetail';

    /**
     * Identifies whether or not the products being shipped are required to be accessible during delivery.
     *
     * @param DangerousGoodsAccessibilityType $Accessibility
     * return DangerousGoodsDetail
     */
    public function setAccessibility(\FedEx\RateService\SimpleType\DangerousGoodsAccessibilityType $accessibility)
    {
        $this->Accessibility = $accessibility;
        return $this;
    }
    
    /**
     * Shipment is packaged/documented for movement ONLY on cargo aircraft.
     *
     * @param boolean $CargoAircraftOnly
     * return DangerousGoodsDetail
     */
    public function setCargoAircraftOnly($cargoAircraftOnly)
    {
        $this->CargoAircraftOnly = $cargoAircraftOnly;
        return $this;
    }
    
    /**
     * Indicates which kinds of hazardous content are in the current package.
     *
     * @param array[HazardousCommodityOptionType] $Options
     * return DangerousGoodsDetail
     */
    public function setOptions(array $options)
    {
        $this->Options = $options;
        return $this;
    }
    
    /**
     * Documents the kinds and quantities of all hazardous commodities in the current package.
     *
     * @param array[HazardousCommodityContent] $HazardousCommodities
     * return DangerousGoodsDetail
     */
    public function setHazardousCommodities(array $hazardousCommodities)
    {
        $this->HazardousCommodities = $hazardousCommodities;
        return $this;
    }
    
    /**
     * Description of the packaging of this commodity, suitable for use on OP-900 and OP-950 forms.
     *
     * @param HazardousCommodityPackagingDetail $Packaging
     * return DangerousGoodsDetail
     */
    public function setPackaging(HazardousCommodityPackagingDetail $packaging)
    {
        $this->Packaging = $packaging;
        return $this;
    }
    
    /**
     * Telephone number to use for contact in the event of an emergency.
     *
     * @param string $EmergencyContactNumber
     * return DangerousGoodsDetail
     */
    public function setEmergencyContactNumber($emergencyContactNumber)
    {
        $this->EmergencyContactNumber = $emergencyContactNumber;
        return $this;
    }
    
    /**
     * Offeror's name or contract number, per DOT regulation.
     *
     * @param string $Offeror
     * return DangerousGoodsDetail
     */
    public function setOfferor($offeror)
    {
        $this->Offeror = $offeror;
        return $this;
    }
    

    
}