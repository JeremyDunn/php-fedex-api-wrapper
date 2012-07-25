<?php
namespace FedEx\ShipService\ComplexType;

/**
 * Description of shipping label to be returned in the reply
 *
 * @version     $Revision: 2 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class LabelSpecification
    extends AbstractComplexType
{
    protected $_name = 'LabelSpecification';

    /**
     * Specifies how to create, organize, and return the document.
     *
     * @param array[ShippingDocumentDispositionDetail] $Dispositions
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
     * @param LabelFormatType $LabelFormatType
     * return LabelSpecification
     */
    public function setLabelFormatType(\FedEx\ShipService\SimpleType\LabelFormatType $labelFormatType)
    {
        $this->LabelFormatType = $labelFormatType;
        return $this;
    }
    
    /**
     * Specifies the image format used for a shipping document.
     *
     * @param ShippingDocumentImageType $ImageType
     * return LabelSpecification
     */
    public function setImageType(\FedEx\ShipService\SimpleType\ShippingDocumentImageType $imageType)
    {
        $this->ImageType = $imageType;
        return $this;
    }
    
    /**
     * For thermal printer lables this indicates the size of the label and the location of the doc tab if present.
     *
     * @param LabelStockType $LabelStockType
     * return LabelSpecification
     */
    public function setLabelStockType(\FedEx\ShipService\SimpleType\LabelStockType $labelStockType)
    {
        $this->LabelStockType = $labelStockType;
        return $this;
    }
    
    /**
     * This indicates if the top or bottom of the label comes out of the printer first.
     *
     * @param LabelPrintingOrientationType $LabelPrintingOrientation
     * return LabelSpecification
     */
    public function setLabelPrintingOrientation(\FedEx\ShipService\SimpleType\LabelPrintingOrientationType $labelPrintingOrientation)
    {
        $this->LabelPrintingOrientation = $labelPrintingOrientation;
        return $this;
    }
    
    /**
     * If present, this contact and address information will replace the return address information on the label.
     *
     * @param ContactAndAddress $PrintedLabelOrigin
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
     * @param CustomerSpecifiedLabelDetail $CustomerSpecifiedDetail
     * return LabelSpecification
     */
    public function setCustomerSpecifiedDetail(CustomerSpecifiedLabelDetail $customerSpecifiedDetail)
    {
        $this->CustomerSpecifiedDetail = $customerSpecifiedDetail;
        return $this;
    }
    

    
}