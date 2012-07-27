<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * All package-level shipping documents (other than labels and barcodes).
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class ShippingDocument
    extends AbstractComplexType
{
    protected $_name = 'ShippingDocument';

    /**
     * Shipping Document Type
     *
     * @param ReturnedShippingDocumentType $Type
     * return ShippingDocument
     */
    public function setType(\FedEx\ShipService\SimpleType\ReturnedShippingDocumentType $type)
    {
        $this->Type = $type;
        return $this;
    }
    
    /**
     * Specifies how this document image/file is organized.
     *
     * @param ShippingDocumentGroupingType $Grouping
     * return ShippingDocument
     */
    public function setGrouping(\FedEx\ShipService\SimpleType\ShippingDocumentGroupingType $grouping)
    {
        $this->Grouping = $grouping;
        return $this;
    }
    
    /**
     * 
     *
     * @param ShippingDocumentDispositionType $ShippingDocumentDisposition
     * return ShippingDocument
     */
    public function setShippingDocumentDisposition(\FedEx\ShipService\SimpleType\ShippingDocumentDispositionType $shippingDocumentDisposition)
    {
        $this->ShippingDocumentDisposition = $shippingDocumentDisposition;
        return $this;
    }
    
    /**
     * The name under which a STORED or DEFERRED document is written.
     *
     * @param string $AccessReference
     * return ShippingDocument
     */
    public function setAccessReference($accessReference)
    {
        $this->AccessReference = $accessReference;
        return $this;
    }
    
    /**
     * Specifies the image resolution in DPI (dots per inch).
     *
     * @param nonNegativeInteger $Resolution
     * return ShippingDocument
     */
    public function setResolution($resolution)
    {
        $this->Resolution = $resolution;
        return $this;
    }
    
    /**
     * Can be zero for documents whose disposition implies that no content is included.
     *
     * @param nonNegativeInteger $CopiesToPrint
     * return ShippingDocument
     */
    public function setCopiesToPrint($copiesToPrint)
    {
        $this->CopiesToPrint = $copiesToPrint;
        return $this;
    }
    
    /**
     * One or more document parts which make up a single logical document, such as multiple pages of a single form.
     *
     * @param array[ShippingDocumentPart] $Parts
     * return ShippingDocument
     */
    public function setParts(array $parts)
    {
        $this->Parts = $parts;
        return $this;
    }
    

    
}