<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Data required to produce a custom-specified document, either at shipment or package level.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class CustomDocumentDetail
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'CustomDocumentDetail';

    /**
     * Common information controlling document production.
     *
     * @param ShippingDocumentFormat $format
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
     * @param \FedEx\RateService\SimpleType\LabelPrintingOrientationType|string $labelPrintingOrientation
     * return CustomDocumentDetail
     */
    public function setLabelPrintingOrientation($labelPrintingOrientation)
    {
        $this->LabelPrintingOrientation = $labelPrintingOrientation;
        return $this;
    }
    
    /**
     * Applicable only to documents produced on thermal printers with roll stock.
     *
     * @param \FedEx\RateService\SimpleType\LabelRotationType|string $labelRotation
     * return CustomDocumentDetail
     */
    public function setLabelRotation($labelRotation)
    {
        $this->LabelRotation = $labelRotation;
        return $this;
    }
    
    /**
     * Identifies the formatting specification used to construct this custom document.
     *
     * @param string $specificationId
     * return CustomDocumentDetail
     */
    public function setSpecificationId($specificationId)
    {
        $this->SpecificationId = $specificationId;
        return $this;
    }
    

    
}