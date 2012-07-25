<?php
namespace FedEx\AddressValidationService\ComplexType;

/**
 * 
 *
 * @version     $Revision: 2 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
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