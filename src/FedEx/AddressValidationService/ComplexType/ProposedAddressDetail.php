<?php
namespace FedEx\AddressValidationService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * ProposedAddressDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Address Validation Service
 */
class ProposedAddressDetail
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'ProposedAddressDetail';

    /**
     * Set Score
     *
     * @param integer $score
     * return ProposedAddressDetail
     */
    public function setScore(integer $score)
    {
        $this->Score = $score;
        return $this;
    }
    
    /**
     * Set Changes
     *
     * @param AddressValidationChangeType[] $changes
     * return ProposedAddressDetail
     */
    public function setChanges(array $changes)
    {
        $this->Changes = $changes;
        return $this;
    }
    
    /**
     * Set ResidentialStatus
     *
     * @param \FedEx\AddressValidationService\SimpleType\ResidentialStatusType|string $residentialStatus
     * return ProposedAddressDetail
     */
    public function setResidentialStatus($residentialStatus)
    {
        $this->ResidentialStatus = $residentialStatus;
        return $this;
    }
    
    /**
     * Set DeliveryPointValidation
     *
     * @param \FedEx\AddressValidationService\SimpleType\DeliveryPointValidationType|string $deliveryPointValidation
     * return ProposedAddressDetail
     */
    public function setDeliveryPointValidation($deliveryPointValidation)
    {
        $this->DeliveryPointValidation = $deliveryPointValidation;
        return $this;
    }
    
    /**
     * Set CompanyName
     *
     * @param string $companyName
     * return ProposedAddressDetail
     */
    public function setCompanyName($companyName)
    {
        $this->CompanyName = $companyName;
        return $this;
    }
    
    /**
     * Set Address
     *
     * @param Address $address
     * return ProposedAddressDetail
     */
    public function setAddress(Address $address)
    {
        $this->Address = $address;
        return $this;
    }
    
    /**
     * Set ParsedCompanyName
     *
     * @param ParsedAddressPart $parsedCompanyName
     * return ProposedAddressDetail
     */
    public function setParsedCompanyName(ParsedAddressPart $parsedCompanyName)
    {
        $this->ParsedCompanyName = $parsedCompanyName;
        return $this;
    }
    
    /**
     * Set ParsedAddress
     *
     * @param ParsedAddress $parsedAddress
     * return ProposedAddressDetail
     */
    public function setParsedAddress(ParsedAddress $parsedAddress)
    {
        $this->ParsedAddress = $parsedAddress;
        return $this;
    }
    
    /**
     * Set RemovedNonAddressData
     *
     * @param string $removedNonAddressData
     * return ProposedAddressDetail
     */
    public function setRemovedNonAddressData($removedNonAddressData)
    {
        $this->RemovedNonAddressData = $removedNonAddressData;
        return $this;
    }
    

    
}