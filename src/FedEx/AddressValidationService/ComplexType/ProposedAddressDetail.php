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
     * @return ProposedAddressDetail
     */
    public function setScore(integer $score)
    {
        $this->Score = $score;
        return $this;
    }
    
    /**
     * Returns Set Score
     *
     * @return integer
     */
    public function getScore()
    {
        return $this->Score;
    }
    
    /**
     * Set Changes
     *
     * @param AddressValidationChangeType[] $changes
     * @return ProposedAddressDetail
     */
    public function setChanges(array $changes)
    {
        $this->Changes = $changes;
        return $this;
    }
    
    /**
     * Returns Set Changes
     *
     * @return AddressValidationChangeType[]
     */
    public function getChanges()
    {
        return $this->Changes;
    }
    
    /**
     * Set ResidentialStatus
     *
     * @param \FedEx\AddressValidationService\SimpleType\ResidentialStatusType|string $residentialStatus
     * @return ProposedAddressDetail
     */
    public function setResidentialStatus($residentialStatus)
    {
        $this->ResidentialStatus = $residentialStatus;
        return $this;
    }
    
    /**
     * Returns Set ResidentialStatus
     *
     * @return \FedEx\AddressValidationService\SimpleType\ResidentialStatusType|string
     */
    public function getResidentialStatus()
    {
        return $this->ResidentialStatus;
    }
    
    /**
     * Set DeliveryPointValidation
     *
     * @param \FedEx\AddressValidationService\SimpleType\DeliveryPointValidationType|string $deliveryPointValidation
     * @return ProposedAddressDetail
     */
    public function setDeliveryPointValidation($deliveryPointValidation)
    {
        $this->DeliveryPointValidation = $deliveryPointValidation;
        return $this;
    }
    
    /**
     * Returns Set DeliveryPointValidation
     *
     * @return \FedEx\AddressValidationService\SimpleType\DeliveryPointValidationType|string
     */
    public function getDeliveryPointValidation()
    {
        return $this->DeliveryPointValidation;
    }
    
    /**
     * Set CompanyName
     *
     * @param string $companyName
     * @return ProposedAddressDetail
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
     * @return ProposedAddressDetail
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
    
    /**
     * Set ParsedCompanyName
     *
     * @param ParsedAddressPart $parsedCompanyName
     * @return ProposedAddressDetail
     */
    public function setParsedCompanyName(ParsedAddressPart $parsedCompanyName)
    {
        $this->ParsedCompanyName = $parsedCompanyName;
        return $this;
    }
    
    /**
     * Returns Set ParsedCompanyName
     *
     * @return ParsedAddressPart
     */
    public function getParsedCompanyName()
    {
        return $this->ParsedCompanyName;
    }
    
    /**
     * Set ParsedAddress
     *
     * @param ParsedAddress $parsedAddress
     * @return ProposedAddressDetail
     */
    public function setParsedAddress(ParsedAddress $parsedAddress)
    {
        $this->ParsedAddress = $parsedAddress;
        return $this;
    }
    
    /**
     * Returns Set ParsedAddress
     *
     * @return ParsedAddress
     */
    public function getParsedAddress()
    {
        return $this->ParsedAddress;
    }
    
    /**
     * Set RemovedNonAddressData
     *
     * @param string $removedNonAddressData
     * @return ProposedAddressDetail
     */
    public function setRemovedNonAddressData($removedNonAddressData)
    {
        $this->RemovedNonAddressData = $removedNonAddressData;
        return $this;
    }
    
    /**
     * Returns Set RemovedNonAddressData
     *
     * @return string
     */
    public function getRemovedNonAddressData()
    {
        return $this->RemovedNonAddressData;
    }
    

    
}