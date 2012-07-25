<?php
namespace FedEx\CloseService\ComplexType;

/**
 * The instructions indicating how to print the OP-950 form for hazardous materials.
 *
 * @version     $Revision: 2 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Close Service
 */
class Op950Detail
    extends AbstractComplexType
{
    protected $_name = 'Op950Detail';

    /**
     * Specifies characteristics of a shipping document to be produced.
     *
     * @param CloseDocumentFormat $Format
     * return Op950Detail
     */
    public function setFormat(CloseDocumentFormat $format)
    {
        $this->Format = $format;
        return $this;
    }
    
    /**
     * Specifies the usage and identification of a customer supplied image to be used on this document.
     *
     * @param array[CustomerImageUsage] $CustomerImageUsages
     * return Op950Detail
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
     * return Op950Detail
     */
    public function setSignatureName($signatureName)
    {
        $this->SignatureName = $signatureName;
        return $this;
    }
    

    
}