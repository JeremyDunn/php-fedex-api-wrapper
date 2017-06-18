<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * The descriptive data required for a FedEx shipment containing dangerous goods (hazardous materials).
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 *
 * @property \FedEx\RateService\SimpleType\DangerousGoodsAccessibilityType|string $Accessibility
 * @property boolean $CargoAircraftOnly
 * @property \FedEx\RateService\SimpleType\HazardousCommodityOptionType|string[] $Options
 * @property HazardousCommodityContent[] $HazardousCommodities
 * @property HazardousCommodityPackagingDetail $Packaging
 * @property string $EmergencyContactNumber
 * @property string $Offeror

 */
class DangerousGoodsDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'DangerousGoodsDetail';

    /**
     * Identifies whether or not the products being shipped are required to be accessible during delivery.
     *
     * @param \FedEx\RateService\SimpleType\DangerousGoodsAccessibilityType|string $accessibility
     * @return $this
     */
    public function setAccessibility($accessibility)
    {
        $this->values['Accessibility'] = $accessibility;
        return $this;
    }

    /**
     * Shipment is packaged/documented for movement ONLY on cargo aircraft.
     *
     * @param boolean $cargoAircraftOnly
     * @return $this
     */
    public function setCargoAircraftOnly($cargoAircraftOnly)
    {
        $this->values['CargoAircraftOnly'] = $cargoAircraftOnly;
        return $this;
    }

    /**
     * Indicates which kinds of hazardous content are in the current package.
     *
     * @param \FedEx\RateService\SimpleType\HazardousCommodityOptionType[]|string[] $options
     * @return $this
     */
    public function setOptions(array $options)
    {
        $this->values['Options'] = $options;
        return $this;
    }

    /**
     * Documents the kinds and quantities of all hazardous commodities in the current package.
     *
     * @param HazardousCommodityContent[] $hazardousCommodities
     * @return $this
     */
    public function setHazardousCommodities(array $hazardousCommodities)
    {
        $this->values['HazardousCommodities'] = $hazardousCommodities;
        return $this;
    }

    /**
     * Description of the packaging of this commodity, suitable for use on OP-900 and OP-950 forms.
     *
     * @param HazardousCommodityPackagingDetail $packaging
     * @return $this
     */
    public function setPackaging(HazardousCommodityPackagingDetail $packaging)
    {
        $this->values['Packaging'] = $packaging;
        return $this;
    }

    /**
     * Telephone number to use for contact in the event of an emergency.
     *
     * @param string $emergencyContactNumber
     * @return $this
     */
    public function setEmergencyContactNumber($emergencyContactNumber)
    {
        $this->values['EmergencyContactNumber'] = $emergencyContactNumber;
        return $this;
    }

    /**
     * Offeror's name or contract number, per DOT regulation.
     *
     * @param string $offeror
     * @return $this
     */
    public function setOfferor($offeror)
    {
        $this->values['Offeror'] = $offeror;
        return $this;
    }
}
