<?php
namespace FedEx\UploadDocumentService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * DeletionDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Upload Document Service
 *
 * @property \FedEx\UploadDocumentService\SimpleType\DeleteRecordedShipmentRequestServiceLevel|string $DeleteStatus

 */
class DeletionDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'DeletionDetail';

    /**
     * Set DeleteStatus
     *
     * @param \FedEx\UploadDocumentService\SimpleType\DeleteRecordedShipmentRequestServiceLevel|string $deleteStatus
     * @return $this
     */
    public function setDeleteStatus($deleteStatus)
    {
        $this->values['DeleteStatus'] = $deleteStatus;
        return $this;
    }
}
