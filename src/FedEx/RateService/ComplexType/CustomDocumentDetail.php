<?php
namespace FedEx\RateService\ComplexType;

/**
 * Data required to produce a custom-specified document, either at shipment or package level.
 *
 * @version     $Revision: 2 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information
 */
class CustomDocumentDetail
    extends AbstractComplexType
{
    protected $_name = 'CustomDocumentDetail';

    /**
     * Common information controlling document production.
     *
     * @param ShippingDocumentFormat $Format
     * return CustomDocumentDetail
     */
    public function setFormat(ShippingDocumentFormat $format)
    {
        $this->Format = $format;
        return $this;
    }
    
    /**
     * Applicable only to documents produced on thermal printers with roll stock.
     *
     * @param LabelPrintingOrientationType $LabelPrintingOrientation
     * return CustomDocumentDetail
     */
    public function setLabelPrintingOrientation(\FedEx\RateService\SimpleType\LabelPrintingOrientationType $labelPrintingOrientation)
    {
        $this->LabelPrintingOrientation = $labelPrintingOrientation;
        return $this;
    }
    
    /**
     * Applicable only to documents produced on thermal printers with roll stock.
     *
     * @param LabelRotationType $LabelRotation
     * return CustomDocumentDetail
     */
    public function setLabelRotation(\FedEx\RateService\SimpleType\LabelRotationType $labelRotation)
    {
        $this->LabelRotation = $labelRotation;
        return $this;
    }
    
    /**
     * Identifies the formatting specification used to construct this custom document.
     *
     * @param string $SpecificationId
     * return CustomDocumentDetail
     */
    public function setSpecificationId($specificationId)
    {
        $this->SpecificationId = $specificationId;
        return $this;
    }
    

    
}