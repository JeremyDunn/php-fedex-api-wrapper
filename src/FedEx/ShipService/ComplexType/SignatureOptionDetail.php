<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * The descriptive data required for FedEx delivery signature services.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
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
    public function setOptionType(\FedEx\ShipService\SimpleType\SignatureOptionType $optionType)
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