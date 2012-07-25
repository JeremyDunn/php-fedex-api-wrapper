<?php
namespace FedEx\ShipService\ComplexType;

/**
 * Reference information to be associated with this package.
 *
 * @version     $Revision: 2 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class CustomerReference
    extends AbstractComplexType
{
    protected $_name = 'CustomerReference';

    /**
     * The reference type to be associated with this reference data.
     *
     * @param CustomerReferenceType $CustomerReferenceType
     * return CustomerReference
     */
    public function setCustomerReferenceType(\FedEx\ShipService\SimpleType\CustomerReferenceType $customerReferenceType)
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