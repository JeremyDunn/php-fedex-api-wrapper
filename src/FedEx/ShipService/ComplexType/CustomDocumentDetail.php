<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Data required to produce a custom-specified document, either at shipment or package level.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 *
 * @property ShippingDocumentFormat $Format
 * @property \FedEx\ShipService\SimpleType\LabelPrintingOrientationType|string $LabelPrintingOrientation
 * @property \FedEx\ShipService\SimpleType\LabelRotationType|string $LabelRotation
 * @property string $SpecificationId
 * @property string $CustomDocumentIdentifier
 * @property DocTabContent $DocTabContent
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
     * @param \FedEx\ShipService\SimpleType\LabelPrintingOrientationType|string $labelPrintingOrientation
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
     * @param \FedEx\ShipService\SimpleType\LabelRotationType|string $labelRotation
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
     * Identifies the individual document specified by the client.
     *
     * @param string $customDocumentIdentifier
     * @return $this
     */
    public function setCustomDocumentIdentifier($customDocumentIdentifier)
    {
        $this->values['CustomDocumentIdentifier'] = $customDocumentIdentifier;
        return $this;
    }

    /**
     * If provided, thermal documents will include specified doc tab content. If omitted, document will be produced without doc tab content.
     *
     * @param DocTabContent $docTabContent
     * @return $this
     */
    public function setDocTabContent(DocTabContent $docTabContent)
    {
        $this->values['DocTabContent'] = $docTabContent;
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
