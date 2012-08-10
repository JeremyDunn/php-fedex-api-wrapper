<?php
namespace FedEx\CloseService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * CloseDocument
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Close Service
 */
class CloseDocument
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'CloseDocument';

    /**
     * Set Type
     *
     * @param \FedEx\CloseService\SimpleType\CloseDocumentType|string $type
     * return CloseDocument
     */
    public function setType($type)
    {
        $this->Type = $type;
        return $this;
    }
    
    /**
     * The client's shipping cycle to which this shipment belongs.
     *
     * @param string $shippingCycle
     * return CloseDocument
     */
    public function setShippingCycle($shippingCycle)
    {
        $this->ShippingCycle = $shippingCycle;
        return $this;
    }
    
    /**
     * Set ShippingDocumentDisposition
     *
     * @param \FedEx\CloseService\SimpleType\ShippingDocumentDispositionType|string $shippingDocumentDisposition
     * return CloseDocument
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
     * return CloseDocument
     */
    public function setAccessReference($accessReference)
    {
        $this->AccessReference = $accessReference;
        return $this;
    }
    
    /**
     * Specifies the image resolution in DPI (dots per inch).
     *
     * @param nonNegativeInteger $resolution
     * return CloseDocument
     */
    public function setResolution($resolution)
    {
        $this->Resolution = $resolution;
        return $this;
    }
    
    /**
     * Number of copies to print.
     *
     * @param positiveInteger $copiesToPrint
     * return CloseDocument
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
     * return CloseDocument
     */
    public function setParts(array $parts)
    {
        $this->Parts = $parts;
        return $this;
    }
    

    
}