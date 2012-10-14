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

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'ShippingDocument';

    /**
     * Shipping Document Type
     *
     * @param \FedEx\ShipService\SimpleType\ReturnedShippingDocumentType|string $type
     * return ShippingDocument
     */
    public function setType($type)
    {
        $this->Type = $type;
        return $this;
    }
    
    /**
     * Specifies how this document image/file is organized.
     *
     * @param \FedEx\ShipService\SimpleType\ShippingDocumentGroupingType|string $grouping
     * return ShippingDocument
     */
    public function setGrouping($grouping)
    {
        $this->Grouping = $grouping;
        return $this;
    }
    
    /**
     * Set ShippingDocumentDisposition
     *
     * @param \FedEx\ShipService\SimpleType\ShippingDocumentDispositionType|string $shippingDocumentDisposition
     * return ShippingDocument
     */
    public function setShippingDocumentDisposition($shippingDocumentDisposition)
    {
        $this->ShippingDocumentDisposition = $shippingDocumentDisposition;
        return $this;
    }
    
    /**
     * The name under which a STORED or DEFERRED document is written.
     *
     * @param string $accessReference
     * return ShippingDocument
     */
    public function setAccessReference($accessReference)
    {
        $this->AccessReference = $accessReference;
        return $this;
    }
    
    /**
     * Specifies the image type of this shipping document.
     *
     * @param \FedEx\ShipService\SimpleType\ShippingDocumentImageType|string $imageType
     * return ShippingDocument
     */
    public function setImageType($imageType)
    {
        $this->ImageType = $imageType;
        return $this;
    }
    
    /**
     * Specifies the image resolution in DPI (dots per inch).
     *
     * @param nonNegativeInteger $resolution
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
     * @param nonNegativeInteger $copiesToPrint
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
     * @param ShippingDocumentPart[] $parts
     * return ShippingDocument
     */
    public function setParts(array $parts)
    {
        $this->Parts = $parts;
        return $this;
    }
    

    
}