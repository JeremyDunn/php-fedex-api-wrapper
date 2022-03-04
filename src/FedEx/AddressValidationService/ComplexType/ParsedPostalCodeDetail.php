<?php
namespace FedEx\AddressValidationService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * ParsedPostalCodeDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Address Validation Service
 *
 * @property string $Base
 * @property string $AddOn
 * @property string $DeliveryPoint

 */
class ParsedPostalCodeDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ParsedPostalCodeDetail';

    /**
     * Set Base
     *
     * @param string $base
     * @return $this
     */
    public function setBase($base)
    {
        $this->values['Base'] = $base;
        return $this;
    }

    /**
     * Set AddOn
     *
     * @param string $addOn
     * @return $this
     */
    public function setAddOn($addOn)
    {
        $this->values['AddOn'] = $addOn;
        return $this;
    }

    /**
     * Set DeliveryPoint
     *
     * @param string $deliveryPoint
     * @return $this
     */
    public function setDeliveryPoint($deliveryPoint)
    {
        $this->values['DeliveryPoint'] = $deliveryPoint;
        return $this;
    }
}
