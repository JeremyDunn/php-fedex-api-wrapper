<?php
namespace FedEx\UploadDocumentService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * SignatureOptionDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Upload Document Service
 *
 * @property \FedEx\UploadDocumentService\SimpleType\SignatureOptionType|string $OptionType
 * @property string $SignatureReleaseNumber

 */
class SignatureOptionDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'SignatureOptionDetail';

    /**
     * Set OptionType
     *
     * @param \FedEx\UploadDocumentService\SimpleType\SignatureOptionType|string $optionType
     * @return $this
     */
    public function setOptionType($optionType)
    {
        $this->values['OptionType'] = $optionType;
        return $this;
    }

    /**
     * Set SignatureReleaseNumber
     *
     * @param string $signatureReleaseNumber
     * @return $this
     */
    public function setSignatureReleaseNumber($signatureReleaseNumber)
    {
        $this->values['SignatureReleaseNumber'] = $signatureReleaseNumber;
        return $this;
    }
}
