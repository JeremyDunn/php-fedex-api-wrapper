<?php
namespace FedEx\AddressValidationService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * ProposedAddressDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Address Validation Service
 *
 * @property int $Score
 * @property \FedEx\AddressValidationService\SimpleType\AddressValidationChangeType|string[] $Changes
 * @property \FedEx\AddressValidationService\SimpleType\ResidentialStatusType|string $ResidentialStatus
 * @property \FedEx\AddressValidationService\SimpleType\DeliveryPointValidationType|string $DeliveryPointValidation
 * @property string $CompanyName
 * @property Address $Address
 * @property ParsedAddressPart $ParsedCompanyName
 * @property ParsedAddress $ParsedAddress
 * @property string $RemovedNonAddressData

 */
class ProposedAddressDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ProposedAddressDetail';

    /**
     * Set Score
     *
     * @param int $score
     * @return $this
     */
    public function setScore($score)
    {
        $this->values['Score'] = $score;
        return $this;
    }

    /**
     * Set Changes
     *
     * @param \FedEx\AddressValidationService\SimpleType\AddressValidationChangeType[]|string[] $changes
     * @return $this
     */
    public function setChanges(array $changes)
    {
        $this->values['Changes'] = $changes;
        return $this;
    }

    /**
     * Set ResidentialStatus
     *
     * @param \FedEx\AddressValidationService\SimpleType\ResidentialStatusType|string $residentialStatus
     * @return $this
     */
    public function setResidentialStatus($residentialStatus)
    {
        $this->values['ResidentialStatus'] = $residentialStatus;
        return $this;
    }

    /**
     * Set DeliveryPointValidation
     *
     * @param \FedEx\AddressValidationService\SimpleType\DeliveryPointValidationType|string $deliveryPointValidation
     * @return $this
     */
    public function setDeliveryPointValidation($deliveryPointValidation)
    {
        $this->values['DeliveryPointValidation'] = $deliveryPointValidation;
        return $this;
    }

    /**
     * Set CompanyName
     *
     * @param string $companyName
     * @return $this
     */
    public function setCompanyName($companyName)
    {
        $this->values['CompanyName'] = $companyName;
        return $this;
    }

    /**
     * Set Address
     *
     * @param Address $address
     * @return $this
     */
    public function setAddress(Address $address)
    {
        $this->values['Address'] = $address;
        return $this;
    }

    /**
     * Set ParsedCompanyName
     *
     * @param ParsedAddressPart $parsedCompanyName
     * @return $this
     */
    public function setParsedCompanyName(ParsedAddressPart $parsedCompanyName)
    {
        $this->values['ParsedCompanyName'] = $parsedCompanyName;
        return $this;
    }

    /**
     * Set ParsedAddress
     *
     * @param ParsedAddress $parsedAddress
     * @return $this
     */
    public function setParsedAddress(ParsedAddress $parsedAddress)
    {
        $this->values['ParsedAddress'] = $parsedAddress;
        return $this;
    }

    /**
     * Set RemovedNonAddressData
     *
     * @param string $removedNonAddressData
     * @return $this
     */
    public function setRemovedNonAddressData($removedNonAddressData)
    {
        $this->values['RemovedNonAddressData'] = $removedNonAddressData;
        return $this;
    }
}
