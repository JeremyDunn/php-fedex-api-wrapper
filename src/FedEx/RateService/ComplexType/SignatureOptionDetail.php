<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * SignatureOptionDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class SignatureOptionDetail
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'SignatureOptionDetail';

    /**
     * Set OptionType
     *
     * @param \FedEx\RateService\SimpleType\SignatureOptionType|string $optionType
     * @return SignatureOptionDetail
     */
    public function setOptionType($optionType)
    {
        $this->OptionType = $optionType;
        return $this;
    }
    
    /**
     * Returns Set OptionType
     *
     * @return \FedEx\RateService\SimpleType\SignatureOptionType|string
     */
    public function getOptionType()
    {
        return $this->OptionType;
    }
    
    /**
     * Set SignatureReleaseNumber
     *
     * @param string $signatureReleaseNumber
     * @return SignatureOptionDetail
     */
    public function setSignatureReleaseNumber($signatureReleaseNumber)
    {
        $this->SignatureReleaseNumber = $signatureReleaseNumber;
        return $this;
    }
    
    /**
     * Returns Set SignatureReleaseNumber
     *
     * @return string
     */
    public function getSignatureReleaseNumber()
    {
        return $this->SignatureReleaseNumber;
    }
    

    
}