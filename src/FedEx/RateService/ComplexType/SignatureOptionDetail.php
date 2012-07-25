<?php
namespace FedEx\RateService\ComplexType;

/**
 * The descriptive data required for FedEx delivery signature services.
 *
 * @version     $Revision: 2 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information
 */
class SignatureOptionDetail
    extends AbstractComplexType
{
    protected $_name = 'SignatureOptionDetail';

    /**
     * Identifies the delivery signature services option selected by the customer for this shipment. See OptionType for the list of valid values.
     *
     * @param SignatureOptionType $OptionType
     * return SignatureOptionDetail
     */
    public function setOptionType(\FedEx\RateService\SimpleType\SignatureOptionType $optionType)
    {
        $this->OptionType = $optionType;
        return $this;
    }
    
    /**
     * Identifies the delivery signature release authorization number.
     *
     * @param string $SignatureReleaseNumber
     * return SignatureOptionDetail
     */
    public function setSignatureReleaseNumber($signatureReleaseNumber)
    {
        $this->SignatureReleaseNumber = $signatureReleaseNumber;
        return $this;
    }
    

    
}