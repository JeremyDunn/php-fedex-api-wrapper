<?php
namespace FedEx\AddressValidationService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * AddressValidationOptions
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Address Validation Service
 *
 * @property boolean $VerifyAddresses
 * @property boolean $CheckResidentialStatus
 * @property  $MaximumNumberOfMatches
 * @property \FedEx\AddressValidationService\SimpleType\AddressValidationAccuracyType|string $StreetAccuracy
 * @property \FedEx\AddressValidationService\SimpleType\AddressValidationAccuracyType|string $DirectionalAccuracy
 * @property \FedEx\AddressValidationService\SimpleType\AddressValidationAccuracyType|string $CompanyNameAccuracy
 * @property boolean $ConvertToUpperCase
 * @property boolean $RecognizeAlternateCityNames
 * @property boolean $ReturnParsedElements

 */
class AddressValidationOptions extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'AddressValidationOptions';

    /**
     * Set VerifyAddresses
     *
     * @param boolean $verifyAddresses
     * @return $this
     */
    public function setVerifyAddresses($verifyAddresses)
    {
        $this->values['VerifyAddresses'] = $verifyAddresses;
        return $this;
    }

    /**
     * Set CheckResidentialStatus
     *
     * @param boolean $checkResidentialStatus
     * @return $this
     */
    public function setCheckResidentialStatus($checkResidentialStatus)
    {
        $this->values['CheckResidentialStatus'] = $checkResidentialStatus;
        return $this;
    }

    /**
     * Set MaximumNumberOfMatches
     *
     * @param  $maximumNumberOfMatches
     * @return $this
     */
    public function setMaximumNumberOfMatches($maximumNumberOfMatches)
    {
        $this->values['MaximumNumberOfMatches'] = $maximumNumberOfMatches;
        return $this;
    }

    /**
     * Set StreetAccuracy
     *
     * @param \FedEx\AddressValidationService\SimpleType\AddressValidationAccuracyType|string $streetAccuracy
     * @return $this
     */
    public function setStreetAccuracy($streetAccuracy)
    {
        $this->values['StreetAccuracy'] = $streetAccuracy;
        return $this;
    }

    /**
     * Set DirectionalAccuracy
     *
     * @param \FedEx\AddressValidationService\SimpleType\AddressValidationAccuracyType|string $directionalAccuracy
     * @return $this
     */
    public function setDirectionalAccuracy($directionalAccuracy)
    {
        $this->values['DirectionalAccuracy'] = $directionalAccuracy;
        return $this;
    }

    /**
     * Set CompanyNameAccuracy
     *
     * @param \FedEx\AddressValidationService\SimpleType\AddressValidationAccuracyType|string $companyNameAccuracy
     * @return $this
     */
    public function setCompanyNameAccuracy($companyNameAccuracy)
    {
        $this->values['CompanyNameAccuracy'] = $companyNameAccuracy;
        return $this;
    }

    /**
     * Set ConvertToUpperCase
     *
     * @param boolean $convertToUpperCase
     * @return $this
     */
    public function setConvertToUpperCase($convertToUpperCase)
    {
        $this->values['ConvertToUpperCase'] = $convertToUpperCase;
        return $this;
    }

    /**
     * Set RecognizeAlternateCityNames
     *
     * @param boolean $recognizeAlternateCityNames
     * @return $this
     */
    public function setRecognizeAlternateCityNames($recognizeAlternateCityNames)
    {
        $this->values['RecognizeAlternateCityNames'] = $recognizeAlternateCityNames;
        return $this;
    }

    /**
     * Set ReturnParsedElements
     *
     * @param boolean $returnParsedElements
     * @return $this
     */
    public function setReturnParsedElements($returnParsedElements)
    {
        $this->values['ReturnParsedElements'] = $returnParsedElements;
        return $this;
    }
}
