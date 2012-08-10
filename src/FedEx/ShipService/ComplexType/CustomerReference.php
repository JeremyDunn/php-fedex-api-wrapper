<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Reference information to be associated with this package.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class CustomerReference
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'CustomerReference';

    /**
     * The reference type to be associated with this reference data.
     *
     * @param \FedEx\ShipService\SimpleType\CustomerReferenceType|string $customerReferenceType
     * return CustomerReference
     */
    public function setCustomerReferenceType($customerReferenceType)
    {
        $this->CustomerReferenceType = $customerReferenceType;
        return $this;
    }
    
    /**
     * Set Value
     *
     * @param string $value
     * return CustomerReference
     */
    public function setValue($value)
    {
        $this->Value = $value;
        return $this;
    }
    

    
}