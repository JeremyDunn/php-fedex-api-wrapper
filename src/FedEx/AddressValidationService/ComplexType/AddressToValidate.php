<?php
namespace FedEx\AddressValidationService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * AddressToValidate
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Address Validation Service
 */
class AddressToValidate
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'AddressToValidate';

    /**
     * Set AddressId
     *
     * @param string $addressId
     * @return AddressToValidate
     */
    public function setAddressId($addressId)
    {
        $this->AddressId = $addressId;
        return $this;
    }
    
    /**
     * Returns Set AddressId
     *
     * @return string
     */
    public function getAddressId()
    {
        return $this->AddressId;
    }
    
    /**
     * Set CompanyName
     *
     * @param string $companyName
     * @return AddressToValidate
     */
    public function setCompanyName($companyName)
    {
        $this->CompanyName = $companyName;
        return $this;
    }
    
    /**
     * Returns Set CompanyName
     *
     * @return string
     */
    public function getCompanyName()
    {
        return $this->CompanyName;
    }
    
    /**
     * Set Address
     *
     * @param Address $address
     * @return AddressToValidate
     */
    public function setAddress(Address $address)
    {
        $this->Address = $address;
        return $this;
    }
    
    /**
     * Returns Set Address
     *
     * @return Address
     */
    public function getAddress()
    {
        return $this->Address;
    }
    

    
}