<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of shipping label to be returned in the reply
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
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
     * Specify type of label to be returned
     *
     * @param \FedEx\RateService\SimpleType\LabelFormatType|string $labelFormatType
     * @return LabelSpecification
     */
    public function setLabelFormatType($labelFormatType)
    {
        $this->LabelFormatType = $labelFormatType;
        return $this;
    }
    
    /**
     * Returns Specify type of label to be returned
     *
     * @return \FedEx\RateService\SimpleType\LabelFormatType|string
     */
    public function getLabelFormatType()
    {
        return $this->LabelFormatType;
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
     * @param \FedEx\RateService\SimpleType\ShippingDocumentImageType|string $imageType
     * @return LabelSpecification
     */
    public function setImageType($imageType)
    {
        $this->ImageType = $imageType;
        return $this;
    }
    
    /**
     * Returns 
                The type of image or printer commands the label is to be formatted in.
                DPL = Unimark thermal printer language
                EPL2 = Eltron thermal printer language
                PDF = a label returned as a pdf image
                PNG = a label returned as a png image
                ZPLII = Zebra thermal printer language
              
     *
     * @return \FedEx\RateService\SimpleType\ShippingDocumentImageType|string
     */
    public function getImageType()
    {
        return $this->ImageType;
    }
    
    /**
     * For thermal printer lables this indicates the size of the label and the location of the doc tab if present.
     *
     * @param \FedEx\RateService\SimpleType\LabelStockType|string $labelStockType
     * @return LabelSpecification
     */
    public function setLabelStockType($labelStockType)
    {
        $this->LabelStockType = $labelStockType;
        return $this;
    }
    
    /**
     * Returns For thermal printer lables this indicates the size of the label and the location of the doc tab if present.
     *
     * @return \FedEx\RateService\SimpleType\LabelStockType|string
     */
    public function getLabelStockType()
    {
        return $this->LabelStockType;
    }
    
    /**
     * This indicates if the top or bottom of the label comes out of the printer first.
     *
     * @param \FedEx\RateService\SimpleType\LabelPrintingOrientationType|string $labelPrintingOrientation
     * @return LabelSpecification
     */
    public function setLabelPrintingOrientation($labelPrintingOrientation)
    {
        $this->LabelPrintingOrientation = $labelPrintingOrientation;
        return $this;
    }
    
    /**
     * Returns This indicates if the top or bottom of the label comes out of the printer first.
     *
     * @return \FedEx\RateService\SimpleType\LabelPrintingOrientationType|string
     */
    public function getLabelPrintingOrientation()
    {
        return $this->LabelPrintingOrientation;
    }
    
    /**
     * Relative to normal orientation for the printer. RIGHT=90 degrees clockwise, UPSIDE_DOWN=180 degrees, LEFT=90 degrees counterclockwise.
     *
     * @param \FedEx\RateService\SimpleType\LabelRotationType|string $labelRotation
     * @return LabelSpecification
     */
    public function setLabelRotation($labelRotation)
    {
        $this->LabelRotation = $labelRotation;
        return $this;
    }
    
    /**
     * Returns Relative to normal orientation for the printer. RIGHT=90 degrees clockwise, UPSIDE_DOWN=180 degrees, LEFT=90 degrees counterclockwise.
     *
     * @return \FedEx\RateService\SimpleType\LabelRotationType|string
     */
    public function getLabelRotation()
    {
        return $this->LabelRotation;
    }
    
    /**
     * If present, this contact and address information will replace the return address information on the label.
     *
     * @param ContactAndAddress $printedLabelOrigin
     * @return LabelSpecification
     */
    public function setPrintedLabelOrigin(ContactAndAddress $printedLabelOrigin)
    {
        $this->PrintedLabelOrigin = $printedLabelOrigin;
        return $this;
    }
    
    /**
     * Returns If present, this contact and address information will replace the return address information on the label.
     *
     * @return ContactAndAddress
     */
    public function getPrintedLabelOrigin()
    {
        return $this->PrintedLabelOrigin;
    }
    
    /**
     * Allows customer-specified control of label content.
     *
     * @param CustomerSpecifiedLabelDetail $customerSpecifiedDetail
     * @return LabelSpecification
     */
    public function setCustomerSpecifiedDetail(CustomerSpecifiedLabelDetail $customerSpecifiedDetail)
    {
        $this->CustomerSpecifiedDetail = $customerSpecifiedDetail;
        return $this;
    }
    
    /**
     * Returns Allows customer-specified control of label content.
     *
     * @return CustomerSpecifiedLabelDetail
     */
    public function getCustomerSpecifiedDetail()
    {
        return $this->CustomerSpecifiedDetail;
    }
    

    
}