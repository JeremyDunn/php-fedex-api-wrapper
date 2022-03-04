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
 * @property string $ClientReferenceId
 * @property \FedEx\AddressValidationService\SimpleType\OperationalAddressStateType|string $State
 * @property \FedEx\AddressValidationService\SimpleType\FedExAddressClassificationType|string $Classification
 * @property Contact $EffectiveContact
 * @property Address $EffectiveAddress
 * @property ParsedAddressPartsDetail $ParsedAddressPartsDetail
 * @property AddressAttribute[] $Attributes

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
     * The client reference id for the validated address.
     *
     * @param string $clientReferenceId
     * @return $this
     */
    public function setClientReferenceId($clientReferenceId)
    {
        $this->values['ClientReferenceId'] = $clientReferenceId;
        return $this;
    }

    /**
     * Specifies the degree to SHARE service was able to cannonicalise the address provided, as per USPS standards and match it to an address already in the internal FedEx address repository.
     *
     * @param \FedEx\AddressValidationService\SimpleType\OperationalAddressStateType|string $state
     * @return $this
     */
    public function setState($state)
    {
        $this->values['State'] = $state;
        return $this;
    }

    /**
     * Set Classification
     *
     * @param \FedEx\AddressValidationService\SimpleType\FedExAddressClassificationType|string $classification
     * @return $this
     */
    public function setClassification($classification)
    {
        $this->values['Classification'] = $classification;
        return $this;
    }

    /**
     * Set EffectiveContact
     *
     * @param Contact $effectiveContact
     * @return $this
     */
    public function setEffectiveContact(Contact $effectiveContact)
    {
        $this->values['EffectiveContact'] = $effectiveContact;
        return $this;
    }

    /**
     * Set EffectiveAddress
     *
     * @param Address $effectiveAddress
     * @return $this
     */
    public function setEffectiveAddress(Address $effectiveAddress)
    {
        $this->values['EffectiveAddress'] = $effectiveAddress;
        return $this;
    }

    /**
     * Set ParsedAddressPartsDetail
     *
     * @param ParsedAddressPartsDetail $parsedAddressPartsDetail
     * @return $this
     */
    public function setParsedAddressPartsDetail(ParsedAddressPartsDetail $parsedAddressPartsDetail)
    {
        $this->values['ParsedAddressPartsDetail'] = $parsedAddressPartsDetail;
        return $this;
    }

    /**
     * Additional attributes about the validated address from FedEx address respository..
     *
     * @param AddressAttribute[] $attributes
     * @return $this
     */
    public function setAttributes(array $attributes)
    {
        $this->values['Attributes'] = $attributes;
        return $this;
    }
}
