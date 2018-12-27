<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * LabelSpecification
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 *
 * @property ShippingDocumentDispositionDetail[] $Dispositions
 * @property \FedEx\ShipService\SimpleType\LabelFormatType|string $LabelFormatType
 * @property \FedEx\ShipService\SimpleType\ShippingDocumentImageType|string $ImageType
 * @property \FedEx\ShipService\SimpleType\LabelStockType|string $LabelStockType
 * @property \FedEx\ShipService\SimpleType\LabelPrintingOrientationType|string $LabelPrintingOrientation
 * @property \FedEx\ShipService\SimpleType\LabelOrderType|string $LabelOrder
 * @property ContactAndAddress $PrintedLabelOrigin
 * @property CustomerSpecifiedLabelDetail $CustomerSpecifiedDetail

 */
class LabelSpecification extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'LabelSpecification';

    /**
     * Specifies how to create, organize, and return the document.
     *
     * @param ShippingDocumentDispositionDetail[] $dispositions
     * @return $this
     */
    public function setDispositions(array $dispositions)
    {
        $this->values['Dispositions'] = $dispositions;
        return $this;
    }

    /**
     * Set LabelFormatType
     *
     * @param \FedEx\ShipService\SimpleType\LabelFormatType|string $labelFormatType
     * @return $this
     */
    public function setLabelFormatType($labelFormatType)
    {
        $this->values['LabelFormatType'] = $labelFormatType;
        return $this;
    }

    /**
     * Set ImageType
     *
     * @param \FedEx\ShipService\SimpleType\ShippingDocumentImageType|string $imageType
     * @return $this
     */
    public function setImageType($imageType)
    {
        $this->values['ImageType'] = $imageType;
        return $this;
    }

    /**
     * Set LabelStockType
     *
     * @param \FedEx\ShipService\SimpleType\LabelStockType|string $labelStockType
     * @return $this
     */
    public function setLabelStockType($labelStockType)
    {
        $this->values['LabelStockType'] = $labelStockType;
        return $this;
    }

    /**
     * Set LabelPrintingOrientation
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
     * Specifies the order in which the labels are requested to be returned
     *
     * @param \FedEx\ShipService\SimpleType\LabelOrderType|string $labelOrder
     * @return $this
     */
    public function setLabelOrder($labelOrder)
    {
        $this->values['LabelOrder'] = $labelOrder;
        return $this;
    }

    /**
     * Set PrintedLabelOrigin
     *
     * @param ContactAndAddress $printedLabelOrigin
     * @return $this
     */
    public function setPrintedLabelOrigin(ContactAndAddress $printedLabelOrigin)
    {
        $this->values['PrintedLabelOrigin'] = $printedLabelOrigin;
        return $this;
    }

    /**
     * Set CustomerSpecifiedDetail
     *
     * @param CustomerSpecifiedLabelDetail $customerSpecifiedDetail
     * @return $this
     */
    public function setCustomerSpecifiedDetail(CustomerSpecifiedLabelDetail $customerSpecifiedDetail)
    {
        $this->values['CustomerSpecifiedDetail'] = $customerSpecifiedDetail;
        return $this;
    }
}
