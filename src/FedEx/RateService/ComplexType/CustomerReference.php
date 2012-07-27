<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Reference information to be associated with this package.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class CustomerReference
    extends AbstractComplexType
{
    protected $_name = 'CustomerReference';

    /**
     * 
     *
     * @param CustomerReferenceType $CustomerReferenceType
     * return CustomerReference
     */
    public function setCustomerReferenceType(\FedEx\RateService\SimpleType\CustomerReferenceType $customerReferenceType)
    {
        $this->CustomerReferenceType = $customerReferenceType;
        return $this;
    }
    
    /**
     * 
     *
     * @param string $Value
     * return CustomerReference
     */
    public function setValue($value)
    {
        $this->Value = $value;
        return $this;
    }
    

    
}