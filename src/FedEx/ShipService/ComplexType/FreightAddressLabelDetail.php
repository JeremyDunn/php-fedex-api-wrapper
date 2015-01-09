<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Data required to produce the Freight handling-unit-level address labels. Note that the number of UNIQUE labels (the N as in 1 of N, 2 of N, etc.) is determined by total handling units.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class FreightAddressLabelDetail
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'FreightAddressLabelDetail';

    /**
     * Set Format
     *
     * @param ShippingDocumentFormat $format
     * @return FreightAddressLabelDetail
     */
    public function setFormat(ShippingDocumentFormat $format)
    {
        $this->Format = $format;
        return $this;
    }
    
    /**
     * Returns Set Format
     *
     * @return ShippingDocumentFormat
     */
    public function getFormat()
    {
        return $this->Format;
    }
    
    /**
     * Indicates the number of copies to be produced for each unique label.
     *
     * @param nonNegativeInteger $copies
     * @return FreightAddressLabelDetail
     */
    public function setCopies($copies)
    {
        $this->Copies = $copies;
        return $this;
    }
    
    /**
     * Returns Indicates the number of copies to be produced for each unique label.
     *
     * @return nonNegativeInteger
     */
    public function getCopies()
    {
        return $this->Copies;
    }
    
    /**
     * Specifies the quadrant of the page on which the label printing will start.
     *
     * @param \FedEx\ShipService\SimpleType\PageQuadrantType|string $startingPosition
     * @return FreightAddressLabelDetail
     */
    public function setStartingPosition($startingPosition)
    {
        $this->StartingPosition = $startingPosition;
        return $this;
    }
    
    /**
     * Returns Specifies the quadrant of the page on which the label printing will start.
     *
     * @return \FedEx\ShipService\SimpleType\PageQuadrantType|string
     */
    public function getStartingPosition()
    {
        return $this->StartingPosition;
    }
    
    /**
     * If omitted, no doc tab will be produced (i.e. default = former NONE type).
     *
     * @param DocTabContent $docTabContent
     * @return FreightAddressLabelDetail
     */
    public function setDocTabContent(DocTabContent $docTabContent)
    {
        $this->DocTabContent = $docTabContent;
        return $this;
    }
    
    /**
     * Returns If omitted, no doc tab will be produced (i.e. default = former NONE type).
     *
     * @return DocTabContent
     */
    public function getDocTabContent()
    {
        return $this->DocTabContent;
    }
    

    
}