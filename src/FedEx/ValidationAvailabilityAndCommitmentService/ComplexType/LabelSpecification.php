<?php
namespace FedEx\ValidationAvailabilityAndCommitmentService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * LabelSpecification
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Validation Availability And Commitment Service Service
 *
 * @property LabelSpecificationProcessingOptionsRequested $ProcessingOptionsRequested
 * @property ShippingDocumentDispositionDetail[] $Dispositions
 * @property \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\LabelFormatType|string $LabelFormatType
 * @property \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\ShippingDocumentImageType|string $ImageType
 * @property \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\LabelStockType|string $LabelStockType
 * @property \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\LabelPrintingOrientationType|string $LabelPrintingOrientation
 * @property \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\LabelRotationType|string $LabelRotation
 * @property \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\LabelOrderType|string $LabelOrder
 * @property Localization $Localization
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
     * Set ProcessingOptionsRequested
     *
     * @param LabelSpecificationProcessingOptionsRequested $processingOptionsRequested
     * @return $this
     */
    public function setProcessingOptionsRequested(LabelSpecificationProcessingOptionsRequested $processingOptionsRequested)
    {
        $this->values['ProcessingOptionsRequested'] = $processingOptionsRequested;
        return $this;
    }

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
     * @param \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\LabelFormatType|string $labelFormatType
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
     * @param \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\ShippingDocumentImageType|string $imageType
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
     * @param \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\LabelStockType|string $labelStockType
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
     * @param \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\LabelPrintingOrientationType|string $labelPrintingOrientation
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
     * @param \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\LabelRotationType|string $labelRotation
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
     * @param \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\LabelOrderType|string $labelOrder
     * @return $this
     */
    public function setLabelOrder($labelOrder)
    {
        $this->values['LabelOrder'] = $labelOrder;
        return $this;
    }

    /**
     * Governs the language to be used in the labels generated for this shipment.
     *
     * @param Localization $localization
     * @return $this
     */
    public function setLocalization(Localization $localization)
    {
        $this->values['Localization'] = $localization;
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
