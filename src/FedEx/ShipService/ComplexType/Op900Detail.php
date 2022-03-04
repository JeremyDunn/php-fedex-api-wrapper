<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * The instructions indicating how to print the OP-900 form for hazardous materials packages.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 *
 * @property ShippingDocumentFormat $Format
 * @property \FedEx\ShipService\SimpleType\CustomerReferenceType|string $Reference
 * @property CustomerImageUsage[] $CustomerImageUsages
 * @property string $SignatureName

 */
class Op900Detail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'Op900Detail';

    /**
     * Specifies characteristics of a shipping document to be produced.
     *
     * @param ShippingDocumentFormat $format
     * @return $this
     */
    public function setFormat(ShippingDocumentFormat $format)
    {
        $this->values['Format'] = $format;
        return $this;
    }

    /**
     * Identifies which reference type (from the package's customer references) is to be used as the source for the reference on this OP-900.
     *
     * @param \FedEx\ShipService\SimpleType\CustomerReferenceType|string $reference
     * @return $this
     */
    public function setReference($reference)
    {
        $this->values['Reference'] = $reference;
        return $this;
    }

    /**
     * Specifies the usage and identification of customer supplied images to be used on this document.
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
