<?php
namespace FedEx\AddressValidationService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * 
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Address Validation Service
 */
class ParsedAddressPart
    extends AbstractComplexType
{
    protected $_name = 'ParsedAddressPart';

    /**
     * 
     *
     * @param array[ParsedElement] $Elements
     * return ParsedAddressPart
     */
    public function setElements(array $elements)
    {
        $this->Elements = $elements;
        return $this;
    }
    

    
}