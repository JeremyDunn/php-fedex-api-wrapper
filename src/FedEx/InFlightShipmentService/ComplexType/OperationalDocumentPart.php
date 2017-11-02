<?php
namespace FedEx\InFlightShipmentService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * A single part of an operational document, such as one page of a multiple-page document whose format requires a separate image per page.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  In Flight Shipment Service
 *
 * @property int $DocumentPartSequenceNumber
 * @property string $Image

 */
class OperationalDocumentPart extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'OperationalDocumentPart';

    /**
     * The one-origin position of this part within a document.
     *
     * @param int $documentPartSequenceNumber
     * @return $this
     */
    public function setDocumentPartSequenceNumber($documentPartSequenceNumber)
    {
        $this->values['DocumentPartSequenceNumber'] = $documentPartSequenceNumber;
        return $this;
    }

    /**
     * Graphic or printer commands for this image within a document.
     *
     * @param string $image
     * @return $this
     */
    public function setImage($image)
    {
        $this->values['Image'] = $image;
        return $this;
    }
}
