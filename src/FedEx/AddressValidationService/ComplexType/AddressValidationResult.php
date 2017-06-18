<?php
namespace FedEx\AddressValidationService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * AddressValidationResult
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Address Validation Service
 *
 * @property string $AddressId
 * @property ProposedAddressDetail[] $ProposedAddressDetails

 */
class AddressValidationResult extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'AddressValidationResult';

    /**
     * Set AddressId
     *
     * @param string $addressId
     * @return $this
     */
    public function setAddressId($addressId)
    {
        $this->values['AddressId'] = $addressId;
        return $this;
    }

    /**
     * Set ProposedAddressDetails
     *
     * @param ProposedAddressDetail[] $proposedAddressDetails
     * @return $this
     */
    public function setProposedAddressDetails(array $proposedAddressDetails)
    {
        $this->values['ProposedAddressDetails'] = $proposedAddressDetails;
        return $this;
    }
}
