<?php
namespace FedEx\PickupService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Allows clients the ability to specify variations in their capabilities that may impact the set of features that are enabled in the called service. In a typical use case, id may correspond to the name of an initiative (or one feature of an initiative) and the values may contain SUPPORTED to indicate that the client is prepared to accept the feature.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 *
 * @property string $Id
 * @property string[] $Values

 */
class VariationOptionDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'VariationOptionDetail';

    /**
     * Specifies the name or the key for the variation.
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
     * Specifies a set of values associated with this id that parameterize the variation.
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
