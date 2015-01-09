<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * The instructions indicating how to print the OP-900 form for hazardous materials packages.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class Op900Detail
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'Op900Detail';

    /**
     * Specifies characteristics of a shipping document to be produced.
     *
     * @param ShippingDocumentFormat $format
     * @return Op900Detail
     */
    public function setFormat(ShippingDocumentFormat $format)
    {
        $this->Format = $format;
        return $this;
    }
    
    /**
     * Returns Specifies characteristics of a shipping document to be produced.
     *
     * @return ShippingDocumentFormat
     */
    public function getFormat()
    {
        return $this->Format;
    }
    
    /**
     * Identifies which reference type (from the package's customer references) is to be used as the source for the reference on this OP-900.
     *
     * @param \FedEx\RateService\SimpleType\CustomerReferenceType|string $reference
     * @return Op900Detail
     */
    public function setReference($reference)
    {
        $this->Reference = $reference;
        return $this;
    }
    
    /**
     * Returns Identifies which reference type (from the package's customer references) is to be used as the source for the reference on this OP-900.
     *
     * @return \FedEx\RateService\SimpleType\CustomerReferenceType|string
     */
    public function getReference()
    {
        return $this->Reference;
    }
    
    /**
     * Specifies the usage and identification of customer supplied images to be used on this document.
     *
     * @param CustomerImageUsage[] $customerImageUsages
     * @return Op900Detail
     */
    public function setCustomerImageUsages(array $customerImageUsages)
    {
        $this->CustomerImageUsages = $customerImageUsages;
        return $this;
    }
    
    /**
     * Returns Specifies the usage and identification of customer supplied images to be used on this document.
     *
     * @return CustomerImageUsage[]
     */
    public function getCustomerImageUsages()
    {
        return $this->CustomerImageUsages;
    }
    
    /**
     * Data field to be used when a name is to be printed in the document instead of (or in addition to) a signature image.
     *
     * @param string $signatureName
     * @return Op900Detail
     */
    public function setSignatureName($signatureName)
    {
        $this->SignatureName = $signatureName;
        return $this;
    }
    
    /**
     * Returns Data field to be used when a name is to be printed in the document instead of (or in addition to) a signature image.
     *
     * @return string
     */
    public function getSignatureName()
    {
        return $this->SignatureName;
    }
    

    
}