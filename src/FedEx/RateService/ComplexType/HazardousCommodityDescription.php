<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Identifies and describes an individual hazardous commodity. For 201001 load, this is based on data from the FedEx Ground Hazardous Materials Shipping Guide.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 *
 * @property string $Id
 * @property \FedEx\RateService\SimpleType\HazardousCommodityPackingGroupType|string $PackingGroup
 * @property string $ProperShippingName
 * @property string $TechnicalName
 * @property string $HazardClass
 * @property string[] $SubsidiaryClasses
 * @property string $LabelText

 */
class HazardousCommodityDescription extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'HazardousCommodityDescription';

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
     * Set PackingGroup
     *
     * @param \FedEx\RateService\SimpleType\HazardousCommodityPackingGroupType|string $packingGroup
     * @return $this
     */
    public function setPackingGroup($packingGroup)
    {
        $this->values['PackingGroup'] = $packingGroup;
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
