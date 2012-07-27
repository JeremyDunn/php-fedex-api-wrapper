<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specifies how the recipient is identified for customs purposes; the requirements on this information vary with destination country.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
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