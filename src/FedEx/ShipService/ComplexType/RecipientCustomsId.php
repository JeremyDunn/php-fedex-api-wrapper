<?php
namespace FedEx\ShipService\ComplexType;

/**
 * Specifies how the recipient is identified for customs purposes; the requirements on this information vary with destination country.
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class RecipientCustomsId
    extends AbstractComplexType
{
    protected $_name = 'RecipientCustomsId';

    /**
     * Specifies the kind of identification being used.
     *
     * @param RecipientCustomsIdType $Type
     * return RecipientCustomsId
     */
    public function setType(\FedEx\ShipService\SimpleType\RecipientCustomsIdType $type)
    {
        $this->Type = $type;
        return $this;
    }
    
    /**
     * Contains the actual ID value, of the type specified above.
     *
     * @param string $Value
     * return RecipientCustomsId
     */
    public function setValue($value)
    {
        $this->Value = $value;
        return $this;
    }
    

    
}