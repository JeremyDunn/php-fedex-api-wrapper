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
class AddressToValidate
    extends AbstractComplexType
{
    protected $_name = 'AddressToValidate';

    /**
     * 
     *
     * @param string $AddressId
     * return AddressToValidate
     */
    public function setAddressId($addressId)
    {
        $this->AddressId = $addressId;
        return $this;
    }
    
    /**
     * 
     *
     * @param string $CompanyName
     * return AddressToValidate
     */
    public function setCompanyName($companyName)
    {
        $this->CompanyName = $companyName;
        return $this;
    }
    
    /**
     * 
     *
     * @param Address $Address
     * return AddressToValidate
     */
    public function setAddress(Address $address)
    {
        $this->Address = $address;
        return $this;
    }
    

    
}