<?php
namespace FedEx\AddressValidationService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * AddressValidationResult
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Address Validation Service
 */
class AddressValidationResult
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'AddressValidationResult';

    /**
     * Set AddressId
     *
     * @param string $addressId
     * @return AddressValidationResult
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
     * Set ProposedAddressDetails
     *
     * @param ProposedAddressDetail[] $proposedAddressDetails
     * @return AddressValidationResult
     */
    public function setProposedAddressDetails(array $proposedAddressDetails)
    {
        $this->ProposedAddressDetails = $proposedAddressDetails;
        return $this;
    }
    
    /**
     * Returns Set ProposedAddressDetails
     *
     * @return ProposedAddressDetail[]
     */
    public function getProposedAddressDetails()
    {
        return $this->ProposedAddressDetails;
    }
    

    
}