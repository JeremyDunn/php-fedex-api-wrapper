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
class AddressValidationOptions
    extends AbstractComplexType
{
    protected $_name = 'AddressValidationOptions';

    /**
     * 
     *
     * @param boolean $VerifyAddresses
     * return AddressValidationOptions
     */
    public function setVerifyAddresses($verifyAddresses)
    {
        $this->VerifyAddresses = $verifyAddresses;
        return $this;
    }
    
    /**
     * 
     *
     * @param boolean $CheckResidentialStatus
     * return AddressValidationOptions
     */
    public function setCheckResidentialStatus($checkResidentialStatus)
    {
        $this->CheckResidentialStatus = $checkResidentialStatus;
        return $this;
    }
    
    /**
     * 
     *
     * @param  $MaximumNumberOfMatches
     * return AddressValidationOptions
     */
    public function setMaximumNumberOfMatches( $maximumNumberOfMatches)
    {
        $this->MaximumNumberOfMatches = $maximumNumberOfMatches;
        return $this;
    }
    
    /**
     * 
     *
     * @param AddressValidationAccuracyType $StreetAccuracy
     * return AddressValidationOptions
     */
    public function setStreetAccuracy(\FedEx\AddressValidationService\SimpleType\AddressValidationAccuracyType $streetAccuracy)
    {
        $this->StreetAccuracy = $streetAccuracy;
        return $this;
    }
    
    /**
     * 
     *
     * @param AddressValidationAccuracyType $DirectionalAccuracy
     * return AddressValidationOptions
     */
    public function setDirectionalAccuracy(\FedEx\AddressValidationService\SimpleType\AddressValidationAccuracyType $directionalAccuracy)
    {
        $this->DirectionalAccuracy = $directionalAccuracy;
        return $this;
    }
    
    /**
     * 
     *
     * @param AddressValidationAccuracyType $CompanyNameAccuracy
     * return AddressValidationOptions
     */
    public function setCompanyNameAccuracy(\FedEx\AddressValidationService\SimpleType\AddressValidationAccuracyType $companyNameAccuracy)
    {
        $this->CompanyNameAccuracy = $companyNameAccuracy;
        return $this;
    }
    
    /**
     * 
     *
     * @param boolean $ConvertToUpperCase
     * return AddressValidationOptions
     */
    public function setConvertToUpperCase($convertToUpperCase)
    {
        $this->ConvertToUpperCase = $convertToUpperCase;
        return $this;
    }
    
    /**
     * 
     *
     * @param boolean $RecognizeAlternateCityNames
     * return AddressValidationOptions
     */
    public function setRecognizeAlternateCityNames($recognizeAlternateCityNames)
    {
        $this->RecognizeAlternateCityNames = $recognizeAlternateCityNames;
        return $this;
    }
    
    /**
     * 
     *
     * @param boolean $ReturnParsedElements
     * return AddressValidationOptions
     */
    public function setReturnParsedElements($returnParsedElements)
    {
        $this->ReturnParsedElements = $returnParsedElements;
        return $this;
    }
    

    
}