<?php
namespace FedEx\TrackService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * TrackingDocumentDispositionDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information Service
 *
 * @property \FedEx\TrackService\SimpleType\TrackingDocumentDispositionType|string $DispositionType
 * @property TrackingDocumentEmailDetail $EMailDetail

 */
class TrackingDocumentDispositionDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'TrackingDocumentDispositionDetail';

    /**
     * Set DispositionType
     *
     * @param \FedEx\TrackService\SimpleType\TrackingDocumentDispositionType|string $dispositionType
     * @return $this
     */
    public function setDispositionType($dispositionType)
    {
        $this->values['DispositionType'] = $dispositionType;
        return $this;
    }

    /**
     * Set EMailDetail
     *
     * @param TrackingDocumentEmailDetail $eMailDetail
     * @return $this
     */
    public function setEMailDetail(TrackingDocumentEmailDetail $eMailDetail)
    {
        $this->values['EMailDetail'] = $eMailDetail;
        return $this;
    }
}
