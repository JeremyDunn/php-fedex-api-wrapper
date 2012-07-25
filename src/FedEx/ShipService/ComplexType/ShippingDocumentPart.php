<?php
namespace FedEx\ShipService\ComplexType;

/**
 * A single part of a shipping document, such as one page of a multiple-page document whose format requires a separate image per page.
 *
 * @version     $Revision: 4 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class ShippingDocumentPart
    extends AbstractComplexType
{
    protected $_name = 'ShippingDocumentPart';

    /**
     * The one-origin position of this part within a document.
     *
     * @param positiveInteger $DocumentPartSequenceNumber
     * return ShippingDocumentPart
     */
    public function setDocumentPartSequenceNumber($documentPartSequenceNumber)
    {
        $this->DocumentPartSequenceNumber = $documentPartSequenceNumber;
        return $this;
    }
    
    /**
     * Graphic or printer commands for this image within a document.
     *
     * @param base64Binary $Image
     * return ShippingDocumentPart
     */
    public function setImage($image)
    {
        $this->Image = $image;
        return $this;
    }
    

    
}