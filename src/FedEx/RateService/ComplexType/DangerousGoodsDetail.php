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
     * return DangerousGoodsDetail
     */
    public function setAccessibility($accessibility)
    {
        $this->Accessibility = $accessibility;
        return $this;
    }
    
    /**
     * Shipment is packaged/documented for movement ONLY on cargo aircraft.
     *
     * @param boolean $cargoAircraftOnly
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
     * @param HazardousCommodityOptionType[] $options
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
     * @param HazardousCommodityContent[] $hazardousCommodities
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
     * @param HazardousCommodityPackagingDetail $packaging
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
     * @param string $emergencyContactNumber
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
     * @param string $offeror
     * return DangerousGoodsDetail
     */
    public function setOfferor($offeror)
    {
        $this->Offeror = $offeror;
        return $this;
    }
    

    
}