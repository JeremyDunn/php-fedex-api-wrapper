<?php
namespace FedEx\ShipService\ComplexType;

/**
 * Data required to produce a custom-specified document, either at shipment or package level.
 *
 * @version     $Revision: 4 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
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
    public function setLabelPrintingOrientation(\FedEx\ShipService\SimpleType\LabelPrintingOrientationType $labelPrintingOrientation)
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
    public function setLabelRotation(\FedEx\ShipService\SimpleType\LabelRotationType $labelRotation)
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
    
    /**
     * Identifies the individual document specified by the client.
     *
     * @param string $CustomDocumentIdentifier
     * return CustomDocumentDetail
     */
    public function setCustomDocumentIdentifier($customDocumentIdentifier)
    {
        $this->CustomDocumentIdentifier = $customDocumentIdentifier;
        return $this;
    }
    
    /**
     * If provided, thermal documents will include specified doc tab content. If omitted, document will be produced without doc tab content.
     *
     * @param DocTabContent $DocTabContent
     * return CustomDocumentDetail
     */
    public function setDocTabContent(DocTabContent $docTabContent)
    {
        $this->DocTabContent = $docTabContent;
        return $this;
    }
    

    
}