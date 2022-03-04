<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * LabelSpecification
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 *
 * @property \FedEx\RateService\SimpleType\LabelFormatType|string $LabelFormatType
 * @property \FedEx\RateService\SimpleType\ShippingDocumentImageType|string $ImageType
 * @property \FedEx\RateService\SimpleType\LabelStockType|string $LabelStockType
 * @property \FedEx\RateService\SimpleType\LabelPrintingOrientationType|string $LabelPrintingOrientation
 * @property \FedEx\RateService\SimpleType\LabelRotationType|string $LabelRotation
 * @property \FedEx\RateService\SimpleType\LabelOrderType|string $LabelOrder
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
     * Set LabelFormatType
     *
     * @param \FedEx\RateService\SimpleType\LabelFormatType|string $labelFormatType
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
     * @param \FedEx\RateService\SimpleType\ShippingDocumentImageType|string $imageType
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
     * @param \FedEx\RateService\SimpleType\LabelStockType|string $labelStockType
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
     * @param \FedEx\RateService\SimpleType\LabelPrintingOrientationType|string $labelPrintingOrientation
     * @return $this
     */
    public function setLabelPrintingOrientation($labelPrintingOrientation)
    {
        $this->values['LabelPrintingOrientation'] = $labelPrintingOrientation;
        return $this;
    }

    /**
     * Set LabelRotation
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
     * Specifies the order in which the labels are requested to be returned
     *
     * @param \FedEx\RateService\SimpleType\LabelOrderType|string $labelOrder
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
