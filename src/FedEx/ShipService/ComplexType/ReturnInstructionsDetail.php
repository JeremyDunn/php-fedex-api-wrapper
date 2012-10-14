<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * The instructions indicating how to print the return instructions( e.g. image type) Specifies characteristics of a shipping document to be produced.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class ReturnInstructionsDetail
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'ReturnInstructionsDetail';

    /**
     * Set Format
     *
     * @param ShippingDocumentFormat $format
     * return ReturnInstructionsDetail
     */
    public function setFormat(ShippingDocumentFormat $format)
    {
        $this->Format = $format;
        return $this;
    }
    
    /**
     * Specifies additional customer provided text to be inserted into the return document.
     *
     * @param string $customText
     * return ReturnInstructionsDetail
     */
    public function setCustomText($customText)
    {
        $this->CustomText = $customText;
        return $this;
    }
    

    
}