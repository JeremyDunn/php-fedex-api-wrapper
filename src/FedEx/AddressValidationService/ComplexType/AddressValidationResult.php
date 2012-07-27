<?php
namespace FedEx\AddressValidationService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * 
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Address Validation Service
 */
class AddressValidationResult
    extends AbstractComplexType
{
    protected $_name = 'AddressValidationResult';

    /**
     * 
     *
     * @param string $AddressId
     * return AddressValidationResult
     */
    public function setAddressId($addressId)
    {
        $this->AddressId = $addressId;
        return $this;
    }
    
    /**
     * 
     *
     * @param array[ProposedAddressDetail] $ProposedAddressDetails
     * return AddressValidationResult
     */
    public function setProposedAddressDetails(array $proposedAddressDetails)
    {
        $this->ProposedAddressDetails = $proposedAddressDetails;
        return $this;
    }
    

    
}