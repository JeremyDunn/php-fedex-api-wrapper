<?php
namespace FedEx\AddressValidationService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * AddressValidationOptions
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Address Validation Service
 */
class AddressValidationOptions
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'AddressValidationOptions';

    /**
     * Set VerifyAddresses
     *
     * @param boolean $verifyAddresses
     * @return AddressValidationOptions
     */
    public function setVerifyAddresses($verifyAddresses)
    {
        $this->VerifyAddresses = $verifyAddresses;
        return $this;
    }
    
    /**
     * Returns Set VerifyAddresses
     *
     * @return boolean
     */
    public function getVerifyAddresses()
    {
        return $this->VerifyAddresses;
    }
    
    /**
     * Set CheckResidentialStatus
     *
     * @param boolean $checkResidentialStatus
     * @return AddressValidationOptions
     */
    public function setCheckResidentialStatus($checkResidentialStatus)
    {
        $this->CheckResidentialStatus = $checkResidentialStatus;
        return $this;
    }
    
    /**
     * Returns Set CheckResidentialStatus
     *
     * @return boolean
     */
    public function getCheckResidentialStatus()
    {
        return $this->CheckResidentialStatus;
    }
    
    /**
     * Set MaximumNumberOfMatches
     *
     * @param  $maximumNumberOfMatches
     * @return AddressValidationOptions
     */
    public function setMaximumNumberOfMatches( $maximumNumberOfMatches)
    {
        $this->MaximumNumberOfMatches = $maximumNumberOfMatches;
        return $this;
    }
    
    /**
     * Returns Set MaximumNumberOfMatches
     *
     * @return 
     */
    public function getMaximumNumberOfMatches()
    {
        return $this->MaximumNumberOfMatches;
    }
    
    /**
     * Set StreetAccuracy
     *
     * @param \FedEx\AddressValidationService\SimpleType\AddressValidationAccuracyType|string $streetAccuracy
     * @return AddressValidationOptions
     */
    public function setStreetAccuracy($streetAccuracy)
    {
        $this->StreetAccuracy = $streetAccuracy;
        return $this;
    }
    
    /**
     * Returns Set StreetAccuracy
     *
     * @return \FedEx\AddressValidationService\SimpleType\AddressValidationAccuracyType|string
     */
    public function getStreetAccuracy()
    {
        return $this->StreetAccuracy;
    }
    
    /**
     * Set DirectionalAccuracy
     *
     * @param \FedEx\AddressValidationService\SimpleType\AddressValidationAccuracyType|string $directionalAccuracy
     * @return AddressValidationOptions
     */
    public function setDirectionalAccuracy($directionalAccuracy)
    {
        $this->DirectionalAccuracy = $directionalAccuracy;
        return $this;
    }
    
    /**
     * Returns Set DirectionalAccuracy
     *
     * @return \FedEx\AddressValidationService\SimpleType\AddressValidationAccuracyType|string
     */
    public function getDirectionalAccuracy()
    {
        return $this->DirectionalAccuracy;
    }
    
    /**
     * Set CompanyNameAccuracy
     *
     * @param \FedEx\AddressValidationService\SimpleType\AddressValidationAccuracyType|string $companyNameAccuracy
     * @return AddressValidationOptions
     */
    public function setCompanyNameAccuracy($companyNameAccuracy)
    {
        $this->CompanyNameAccuracy = $companyNameAccuracy;
        return $this;
    }
    
    /**
     * Returns Set CompanyNameAccuracy
     *
     * @return \FedEx\AddressValidationService\SimpleType\AddressValidationAccuracyType|string
     */
    public function getCompanyNameAccuracy()
    {
        return $this->CompanyNameAccuracy;
    }
    
    /**
     * Set ConvertToUpperCase
     *
     * @param boolean $convertToUpperCase
     * @return AddressValidationOptions
     */
    public function setConvertToUpperCase($convertToUpperCase)
    {
        $this->ConvertToUpperCase = $convertToUpperCase;
        return $this;
    }
    
    /**
     * Returns Set ConvertToUpperCase
     *
     * @return boolean
     */
    public function getConvertToUpperCase()
    {
        return $this->ConvertToUpperCase;
    }
    
    /**
     * Set RecognizeAlternateCityNames
     *
     * @param boolean $recognizeAlternateCityNames
     * @return AddressValidationOptions
     */
    public function setRecognizeAlternateCityNames($recognizeAlternateCityNames)
    {
        $this->RecognizeAlternateCityNames = $recognizeAlternateCityNames;
        return $this;
    }
    
    /**
     * Returns Set RecognizeAlternateCityNames
     *
     * @return boolean
     */
    public function getRecognizeAlternateCityNames()
    {
        return $this->RecognizeAlternateCityNames;
    }
    
    /**
     * Set ReturnParsedElements
     *
     * @param boolean $returnParsedElements
     * @return AddressValidationOptions
     */
    public function setReturnParsedElements($returnParsedElements)
    {
        $this->ReturnParsedElements = $returnParsedElements;
        return $this;
    }
    
    /**
     * Returns Set ReturnParsedElements
     *
     * @return boolean
     */
    public function getReturnParsedElements()
    {
        return $this->ReturnParsedElements;
    }
    

    
}