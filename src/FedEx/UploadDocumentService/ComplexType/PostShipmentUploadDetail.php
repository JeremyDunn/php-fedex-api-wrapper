<?php
namespace FedEx\UploadDocumentService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * PostShipmentUploadDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Upload Document Service
 *
 * @property string $TrackingNumber

 */
class PostShipmentUploadDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'PostShipmentUploadDetail';

    /**
     * The tracking number field should be provided when uploading documents after the shipment has been processed or confirmed. This is only applicable if the shipment has been processed with the POST_SHIPMENT_UPLOAD_REQUESTED ETD attribute.
     *
     * @param string $trackingNumber
     * @return $this
     */
    public function setTrackingNumber($trackingNumber)
    {
        $this->values['TrackingNumber'] = $trackingNumber;
        return $this;
    }
}
