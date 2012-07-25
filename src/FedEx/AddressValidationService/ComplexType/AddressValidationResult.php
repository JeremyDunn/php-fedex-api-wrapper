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