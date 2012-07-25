<?php
namespace FedEx\ShipService\ComplexType;

/**
 * Data required to produce the Freight handling-unit-level address labels. Note that the number of UNIQUE labels (the N as in 1 of N, 2 of N, etc.) is determined by total handling units.
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class FreightAddressLabelDetail
    extends AbstractComplexType
{
    protected $_name = 'FreightAddressLabelDetail';

    /**
     * 
     *
     * @param ShippingDocumentFormat $Format
     * return FreightAddressLabelDetail
     */
    public function setFormat(ShippingDocumentFormat $format)
    {
        $this->Format = $format;
        return $this;
    }
    
    /**
     * Indicates the number of copies to be produced for each unique label.
     *
     * @param nonNegativeInteger $Copies
     * return FreightAddressLabelDetail
     */
    public function setCopies($copies)
    {
        $this->Copies = $copies;
        return $this;
    }
    
    /**
     * If omitted, no doc tab will be produced (i.e. default = former NONE type).
     *
     * @param DocTabContent $DocTabContent
     * return FreightAddressLabelDetail
     */
    public function setDocTabContent(DocTabContent $docTabContent)
    {
        $this->DocTabContent = $docTabContent;
        return $this;
    }
    

    
}