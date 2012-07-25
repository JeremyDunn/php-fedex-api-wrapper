<?php
namespace FedEx\ShipService\ComplexType;

/**
 * Represents a reference identifier printed on Freight bills of lading
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class PrintedReference
    extends AbstractComplexType
{
    protected $_name = 'PrintedReference';

    /**
     * 
     *
     * @param PrintedReferenceType $Type
     * return PrintedReference
     */
    public function setType(\FedEx\ShipService\SimpleType\PrintedReferenceType $type)
    {
        $this->Type = $type;
        return $this;
    }
    
    /**
     * 
     *
     * @param string $Value
     * return PrintedReference
     */
    public function setValue($value)
    {
        $this->Value = $value;
        return $this;
    }
    

    
}