<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of shipping label to be returned in the reply
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class LabelSpecification
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'LabelSpecification';

    /**
     * Specifies how to create, organize, and return the document.
     *
     * @param ShippingDocumentDispositionDetail[] $dispositions
     * return LabelSpecification
     */
    public function setDispositions(array $dispositions)
    {
        $this->Dispositions = $dispositions;
        return $this;
    }
    
    /**
     * Specify type of label to be returned
     *
     * @param \FedEx\ShipService\SimpleType\LabelFormatType|string $labelFormatType
     * return LabelSpecification
     */
    public function setLabelFormatType($labelFormatType)
    {
        $this->LabelFormatType = $labelFormatType;
        return $this;
    }
    
    /**
     * Specifies the image format used for a shipping document.
     *
     * @param \FedEx\ShipService\SimpleType\ShippingDocumentImageType|string $imageType
     * return LabelSpecification
     */
    public function setImageType($imageType)
    {
        $this->ImageType = $imageType;
        return $this;
    }
    
    /**
     * For thermal printer lables this indicates the size of the label and the location of the doc tab if present.
     *
     * @param \FedEx\ShipService\SimpleType\LabelStockType|string $labelStockType
     * return LabelSpecification
     */
    public function setLabelStockType($labelStockType)
    {
        $this->LabelStockType = $labelStockType;
        return $this;
    }
    
    /**
     * This indicates if the top or bottom of the label comes out of the printer first.
     *
     * @param \FedEx\ShipService\SimpleType\LabelPrintingOrientationType|string $labelPrintingOrientation
     * return LabelSpecification
     */
    public function setLabelPrintingOrientation($labelPrintingOrientation)
    {
        $this->LabelPrintingOrientation = $labelPrintingOrientation;
        return $this;
    }
    
    /**
     * If present, this contact and address information will replace the return address information on the label.
     *
     * @param ContactAndAddress $printedLabelOrigin
     * return LabelSpecification
     */
    public function setPrintedLabelOrigin(ContactAndAddress $printedLabelOrigin)
    {
        $this->PrintedLabelOrigin = $printedLabelOrigin;
        return $this;
    }
    
    /**
     * Allows customer-specified control of label content.
     *
     * @param CustomerSpecifiedLabelDetail $customerSpecifiedDetail
     * return LabelSpecification
     */
    public function setCustomerSpecifiedDetail(CustomerSpecifiedLabelDetail $customerSpecifiedDetail)
    {
        $this->CustomerSpecifiedDetail = $customerSpecifiedDetail;
        return $this;
    }
    

    
}