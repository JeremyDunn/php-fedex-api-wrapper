<?php
namespace FedEx\RateService\ComplexType;

/**
 * Reference information to be associated with this package.
 *
 * @version     $Revision: 4 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information
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