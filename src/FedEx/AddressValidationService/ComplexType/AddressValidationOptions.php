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
     * return AddressValidationOptions
     */
    public function setVerifyAddresses($verifyAddresses)
    {
        $this->VerifyAddresses = $verifyAddresses;
        return $this;
    }
    
    /**
     * Set CheckResidentialStatus
     *
     * @param boolean $checkResidentialStatus
     * return AddressValidationOptions
     */
    public function setCheckResidentialStatus($checkResidentialStatus)
    {
        $this->CheckResidentialStatus = $checkResidentialStatus;
        return $this;
    }
    
    /**
     * Set MaximumNumberOfMatches
     *
     * @param  $maximumNumberOfMatches
     * return AddressValidationOptions
     */
    public function setMaximumNumberOfMatches( $maximumNumberOfMatches)
    {
        $this->MaximumNumberOfMatches = $maximumNumberOfMatches;
        return $this;
    }
    
    /**
     * Set StreetAccuracy
     *
     * @param \FedEx\AddressValidationService\SimpleType\AddressValidationAccuracyType|string $streetAccuracy
     * return AddressValidationOptions
     */
    public function setStreetAccuracy($streetAccuracy)
    {
        $this->StreetAccuracy = $streetAccuracy;
        return $this;
    }
    
    /**
     * Set DirectionalAccuracy
     *
     * @param \FedEx\AddressValidationService\SimpleType\AddressValidationAccuracyType|string $directionalAccuracy
     * return AddressValidationOptions
     */
    public function setDirectionalAccuracy($directionalAccuracy)
    {
        $this->DirectionalAccuracy = $directionalAccuracy;
        return $this;
    }
    
    /**
     * Set CompanyNameAccuracy
     *
     * @param \FedEx\AddressValidationService\SimpleType\AddressValidationAccuracyType|string $companyNameAccuracy
     * return AddressValidationOptions
     */
    public function setCompanyNameAccuracy($companyNameAccuracy)
    {
        $this->CompanyNameAccuracy = $companyNameAccuracy;
        return $this;
    }
    
    /**
     * Set ConvertToUpperCase
     *
     * @param boolean $convertToUpperCase
     * return AddressValidationOptions
     */
    public function setConvertToUpperCase($convertToUpperCase)
    {
        $this->ConvertToUpperCase = $convertToUpperCase;
        return $this;
    }
    
    /**
     * Set RecognizeAlternateCityNames
     *
     * @param boolean $recognizeAlternateCityNames
     * return AddressValidationOptions
     */
    public function setRecognizeAlternateCityNames($recognizeAlternateCityNames)
    {
        $this->RecognizeAlternateCityNames = $recognizeAlternateCityNames;
        return $this;
    }
    
    /**
     * Set ReturnParsedElements
     *
     * @param boolean $returnParsedElements
     * return AddressValidationOptions
     */
    public function setReturnParsedElements($returnParsedElements)
    {
        $this->ReturnParsedElements = $returnParsedElements;
        return $this;
    }
    

    
}