<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * ShipmentVariationOptionDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 *
 * @property string $Id
 * @property string[] $Values

 */
class ShipmentVariationOptionDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipmentVariationOptionDetail';

    /**
     * Specifies the name or the key for the shipment variation.
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
     * The values that are valid for the specified shipment variation in the context of the current shipment.
     *
     * @param string $values
     * @return $this
     */
    public function setValues($values)
    {
        $this->values['Values'] = $values;
        return $this;
    }
}
