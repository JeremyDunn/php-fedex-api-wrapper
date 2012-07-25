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
class ProposedAddressDetail
    extends AbstractComplexType
{
    protected $_name = 'ProposedAddressDetail';

    /**
     * 
     *
     * @param integer $Score
     * return ProposedAddressDetail
     */
    public function setScore(integer $score)
    {
        $this->Score = $score;
        return $this;
    }
    
    /**
     * 
     *
     * @param array[AddressValidationChangeType] $Changes
     * return ProposedAddressDetail
     */
    public function setChanges(array $changes)
    {
        $this->Changes = $changes;
        return $this;
    }
    
    /**
     * 
     *
     * @param ResidentialStatusType $ResidentialStatus
     * return ProposedAddressDetail
     */
    public function setResidentialStatus(\FedEx\AddressValidationService\SimpleType\ResidentialStatusType $residentialStatus)
    {
        $this->ResidentialStatus = $residentialStatus;
        return $this;
    }
    
    /**
     * 
     *
     * @param DeliveryPointValidationType $DeliveryPointValidation
     * return ProposedAddressDetail
     */
    public function setDeliveryPointValidation(\FedEx\AddressValidationService\SimpleType\DeliveryPointValidationType $deliveryPointValidation)
    {
        $this->DeliveryPointValidation = $deliveryPointValidation;
        return $this;
    }
    
    /**
     * 
     *
     * @param string $CompanyName
     * return ProposedAddressDetail
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
     * return ProposedAddressDetail
     */
    public function setAddress(Address $address)
    {
        $this->Address = $address;
        return $this;
    }
    
    /**
     * 
     *
     * @param ParsedAddressPart $ParsedCompanyName
     * return ProposedAddressDetail
     */
    public function setParsedCompanyName(ParsedAddressPart $parsedCompanyName)
    {
        $this->ParsedCompanyName = $parsedCompanyName;
        return $this;
    }
    
    /**
     * 
     *
     * @param ParsedAddress $ParsedAddress
     * return ProposedAddressDetail
     */
    public function setParsedAddress(ParsedAddress $parsedAddress)
    {
        $this->ParsedAddress = $parsedAddress;
        return $this;
    }
    
    /**
     * 
     *
     * @param string $RemovedNonAddressData
     * return ProposedAddressDetail
     */
    public function setRemovedNonAddressData($removedNonAddressData)
    {
        $this->RemovedNonAddressData = $removedNonAddressData;
        return $this;
    }
    

    
}