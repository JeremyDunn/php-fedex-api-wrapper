<?php
namespace FedEx\TrackService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * TrackingSignatureProofOfDeliveryDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information Service
 *
 * @property TrackingDocumentFormat $DocumentFormat

 */
class TrackingSignatureProofOfDeliveryDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'TrackingSignatureProofOfDeliveryDetail';

    /**
     * Set DocumentFormat
     *
     * @param TrackingDocumentFormat $documentFormat
     * @return $this
     */
    public function setDocumentFormat(TrackingDocumentFormat $documentFormat)
    {
        $this->values['DocumentFormat'] = $documentFormat;
        return $this;
    }
}
