<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Data required to produce a custom-specified document, either at shipment or package level.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
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
     * @return CustomDocumentDetail
     */
    public function setFormat(ShippingDocumentFormat $format)
    {
        $this->Format = $format;
        return $this;
    }
    
    /**
     * Returns Common information controlling document production.
     *
     * @return ShippingDocumentFormat
     */
    public function getFormat()
    {
        return $this->Format;
    }
    
    /**
     * Applicable only to documents produced on thermal printers with roll stock.
     *
     * @param \FedEx\ShipService\SimpleType\LabelPrintingOrientationType|string $labelPrintingOrientation
     * @return CustomDocumentDetail
     */
    public function setLabelPrintingOrientation($labelPrintingOrientation)
    {
        $this->LabelPrintingOrientation = $labelPrintingOrientation;
        return $this;
    }
    
    /**
     * Returns Applicable only to documents produced on thermal printers with roll stock.
     *
     * @return \FedEx\ShipService\SimpleType\LabelPrintingOrientationType|string
     */
    public function getLabelPrintingOrientation()
    {
        return $this->LabelPrintingOrientation;
    }
    
    /**
     * Applicable only to documents produced on thermal printers with roll stock.
     *
     * @param \FedEx\ShipService\SimpleType\LabelRotationType|string $labelRotation
     * @return CustomDocumentDetail
     */
    public function setLabelRotation($labelRotation)
    {
        $this->LabelRotation = $labelRotation;
        return $this;
    }
    
    /**
     * Returns Applicable only to documents produced on thermal printers with roll stock.
     *
     * @return \FedEx\ShipService\SimpleType\LabelRotationType|string
     */
    public function getLabelRotation()
    {
        return $this->LabelRotation;
    }
    
    /**
     * Identifies the formatting specification used to construct this custom document.
     *
     * @param string $specificationId
     * @return CustomDocumentDetail
     */
    public function setSpecificationId($specificationId)
    {
        $this->SpecificationId = $specificationId;
        return $this;
    }
    
    /**
     * Returns Identifies the formatting specification used to construct this custom document.
     *
     * @return string
     */
    public function getSpecificationId()
    {
        return $this->SpecificationId;
    }
    
    /**
     * Identifies the individual document specified by the client.
     *
     * @param string $customDocumentIdentifier
     * @return CustomDocumentDetail
     */
    public function setCustomDocumentIdentifier($customDocumentIdentifier)
    {
        $this->CustomDocumentIdentifier = $customDocumentIdentifier;
        return $this;
    }
    
    /**
     * Returns Identifies the individual document specified by the client.
     *
     * @return string
     */
    public function getCustomDocumentIdentifier()
    {
        return $this->CustomDocumentIdentifier;
    }
    
    /**
     * If provided, thermal documents will include specified doc tab content. If omitted, document will be produced without doc tab content.
     *
     * @param DocTabContent $docTabContent
     * @return CustomDocumentDetail
     */
    public function setDocTabContent(DocTabContent $docTabContent)
    {
        $this->DocTabContent = $docTabContent;
        return $this;
    }
    
    /**
     * Returns If provided, thermal documents will include specified doc tab content. If omitted, document will be produced without doc tab content.
     *
     * @return DocTabContent
     */
    public function getDocTabContent()
    {
        return $this->DocTabContent;
    }
    

    
}