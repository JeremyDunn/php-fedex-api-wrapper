<?php
namespace FedEx\CloseService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * 
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Close Service
 */
class CloseDocument
    extends AbstractComplexType
{
    protected $_name = 'CloseDocument';

    /**
     * 
     *
     * @param CloseDocumentType $Type
     * return CloseDocument
     */
    public function setType(\FedEx\CloseService\SimpleType\CloseDocumentType $type)
    {
        $this->Type = $type;
        return $this;
    }
    
    /**
     * The client's shipping cycle to which this shipment belongs.
     *
     * @param string $ShippingCycle
     * return CloseDocument
     */
    public function setShippingCycle($shippingCycle)
    {
        $this->ShippingCycle = $shippingCycle;
        return $this;
    }
    
    /**
     * 
     *
     * @param ShippingDocumentDispositionType $ShippingDocumentDisposition
     * return CloseDocument
     */
    public function setShippingDocumentDisposition(\FedEx\CloseService\SimpleType\ShippingDocumentDispositionType $shippingDocumentDisposition)
    {
        $this->ShippingDocumentDisposition = $shippingDocumentDisposition;
        return $this;
    }
    
    /**
     * The name under which a STORED or DEFERRED document is written.
     *
     * @param string $AccessReference
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
     * @param nonNegativeInteger $Resolution
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
     * @param positiveInteger $CopiesToPrint
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
     * @param array[ShippingDocumentPart] $Parts
     * return CloseDocument
     */
    public function setParts(array $parts)
    {
        $this->Parts = $parts;
        return $this;
    }
    

    
}