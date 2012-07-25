<?php
namespace FedEx\RateService\ComplexType;

/**
 * The instructions indicating how to print the OP-900 form for hazardous materials packages.
 *
 * @version     $Revision: 4 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information
 */
class Op900Detail
    extends AbstractComplexType
{
    protected $_name = 'Op900Detail';

    /**
     * Specifies characteristics of a shipping document to be produced.
     *
     * @param ShippingDocumentFormat $Format
     * return Op900Detail
     */
    public function setFormat(ShippingDocumentFormat $format)
    {
        $this->Format = $format;
        return $this;
    }
    
    /**
     * Identifies which reference type (from the package's customer references) is to be used as the source for the reference on this OP-900.
     *
     * @param CustomerReferenceType $Reference
     * return Op900Detail
     */
    public function setReference(\FedEx\RateService\SimpleType\CustomerReferenceType $reference)
    {
        $this->Reference = $reference;
        return $this;
    }
    
    /**
     * Specifies the usage and identification of customer supplied images to be used on this document.
     *
     * @param array[CustomerImageUsage] $CustomerImageUsages
     * return Op900Detail
     */
    public function setCustomerImageUsages(array $customerImageUsages)
    {
        $this->CustomerImageUsages = $customerImageUsages;
        return $this;
    }
    
    /**
     * Data field to be used when a name is to be printed in the document instead of (or in addition to) a signature image.
     *
     * @param string $SignatureName
     * return Op900Detail
     */
    public function setSignatureName($signatureName)
    {
        $this->SignatureName = $signatureName;
        return $this;
    }
    

    
}