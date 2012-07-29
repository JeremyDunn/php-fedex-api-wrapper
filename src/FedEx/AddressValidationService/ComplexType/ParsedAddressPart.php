<?php
namespace FedEx\AddressValidationService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * ParsedAddressPart
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Address Validation Service
 */
class ParsedAddressPart
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'ParsedAddressPart';

    /**
     * Set Elements
     *
     * @param ParsedElement[] $elements
     * return ParsedAddressPart
     */
    public function setElements(array $elements)
    {
        $this->Elements = $elements;
        return $this;
    }
    

    
}