<?php
namespace FedEx\AddressValidationService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * ParsedAddressPart
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Address Validation Service
 *
 * @property ParsedElement[] $Elements

 */
class ParsedAddressPart extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ParsedAddressPart';

    /**
     * Set Elements
     *
     * @param ParsedElement[] $elements
     * @return $this
     */
    public function setElements(array $elements)
    {
        $this->values['Elements'] = $elements;
        return $this;
    }
}
