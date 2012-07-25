<?php
namespace FedEx\RateService\ComplexType;

/**
 * Description of shipping label to be returned in the reply
 *
 * @version     $Revision: 2 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information
 */
class LabelSpecification
    extends AbstractComplexType
{
    protected $_name = 'LabelSpecification';

    /**
     * Specify type of label to be returned
     *
     * @param LabelFormatType $LabelFormatType
     * return LabelSpecification
     */
    public function setLabelFormatType(\FedEx\RateService\SimpleType\LabelFormatType $labelFormatType)
    {
        $this->LabelFormatType = $labelFormatType;
        return $this;
    }
    
    /**
     * 
                The type of image or printer commands the label is to be formatted in.
                DPL = Unimark thermal printer language
                EPL2 = Eltron thermal printer language
                PDF = a label returned as a pdf image
                PNG = a label returned as a png image
                ZPLII = Zebra thermal printer language
              
     *
     * @param ShippingDocumentImageType $ImageType
     * return LabelSpecification
     */
    public function setImageType(\FedEx\RateService\SimpleType\ShippingDocumentImageType $imageType)
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
    public function setLabelStockType(\FedEx\RateService\SimpleType\LabelStockType $labelStockType)
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
    public function setLabelPrintingOrientation(\FedEx\RateService\SimpleType\LabelPrintingOrientationType $labelPrintingOrientation)
    {
        $this->LabelPrintingOrientation = $labelPrintingOrientation;
        return $this;
    }
    
    /**
     * Relative to normal orientation for the printer. RIGHT=90 degrees clockwise, UPSIDE_DOWN=180 degrees, LEFT=90 degrees counterclockwise.
     *
     * @param LabelRotationType $LabelRotation
     * return LabelSpecification
     */
    public function setLabelRotation(\FedEx\RateService\SimpleType\LabelRotationType $labelRotation)
    {
        $this->LabelRotation = $labelRotation;
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