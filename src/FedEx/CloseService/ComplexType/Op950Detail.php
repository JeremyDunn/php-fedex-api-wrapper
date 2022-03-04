<?php
namespace FedEx\CloseService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * The instructions indicating how to print the OP-950 form for hazardous materials.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Close Service
 *
 * @property CloseDocumentFormat $Format
 * @property CustomerImageUsage[] $CustomerImageUsages
 * @property string $SignatureName

 */
class Op950Detail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'Op950Detail';

    /**
     * Specifies characteristics of a shipping document to be produced.
     *
     * @param CloseDocumentFormat $format
     * @return $this
     */
    public function setFormat(CloseDocumentFormat $format)
    {
        $this->values['Format'] = $format;
        return $this;
    }

    /**
     * Specifies the usage and identification of a customer supplied image to be used on this document.
     *
     * @param CustomerImageUsage[] $customerImageUsages
     * @return $this
     */
    public function setCustomerImageUsages(array $customerImageUsages)
    {
        $this->values['CustomerImageUsages'] = $customerImageUsages;
        return $this;
    }

    /**
     * Data field to be used when a name is to be printed in the document instead of (or in addition to) a signature image.
     *
     * @param string $signatureName
     * @return $this
     */
    public function setSignatureName($signatureName)
    {
        $this->values['SignatureName'] = $signatureName;
        return $this;
    }
}
