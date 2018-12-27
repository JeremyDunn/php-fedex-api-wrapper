<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Data required to produce a custom-specified document, either at shipment or package level.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 *
 * @property ShippingDocumentFormat $Format
 * @property \FedEx\RateService\SimpleType\LabelPrintingOrientationType|string $LabelPrintingOrientation
 * @property \FedEx\RateService\SimpleType\LabelRotationType|string $LabelRotation
 * @property string $SpecificationId
 * @property CustomLabelDetail $CustomContent

 */
class CustomDocumentDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'CustomDocumentDetail';

    /**
     * Common information controlling document production.
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
     * Applicable only to documents produced on thermal printers with roll stock.
     *
     * @param \FedEx\RateService\SimpleType\LabelPrintingOrientationType|string $labelPrintingOrientation
     * @return $this
     */
    public function setLabelPrintingOrientation($labelPrintingOrientation)
    {
        $this->values['LabelPrintingOrientation'] = $labelPrintingOrientation;
        return $this;
    }

    /**
     * Applicable only to documents produced on thermal printers with roll stock.
     *
     * @param \FedEx\RateService\SimpleType\LabelRotationType|string $labelRotation
     * @return $this
     */
    public function setLabelRotation($labelRotation)
    {
        $this->values['LabelRotation'] = $labelRotation;
        return $this;
    }

    /**
     * Identifies the formatting specification used to construct this custom document.
     *
     * @param string $specificationId
     * @return $this
     */
    public function setSpecificationId($specificationId)
    {
        $this->values['SpecificationId'] = $specificationId;
        return $this;
    }

    /**
     * Set CustomContent
     *
     * @param CustomLabelDetail $customContent
     * @return $this
     */
    public function setCustomContent(CustomLabelDetail $customContent)
    {
        $this->values['CustomContent'] = $customContent;
        return $this;
    }
}
