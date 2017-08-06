<?php
namespace FedEx\OpenShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * The instructions indicating how to print the return instructions( e.g. image type) Specifies characteristics of a shipping document to be produced.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  OpenShip Service
 *
 * @property ShippingDocumentFormat $Format
 * @property string $CustomText

 */
class ReturnInstructionsDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ReturnInstructionsDetail';

    /**
     * Set Format
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
     * Specifies additional customer provided text to be inserted into the return document.
     *
     * @param string $customText
     * @return $this
     */
    public function setCustomText($customText)
    {
        $this->values['CustomText'] = $customText;
        return $this;
    }
}
