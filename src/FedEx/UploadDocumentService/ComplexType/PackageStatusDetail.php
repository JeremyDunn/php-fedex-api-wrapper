<?php
namespace FedEx\UploadDocumentService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * PackageStatusDetail
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Upload Document Service
 *
 * @property \FedEx\UploadDocumentService\SimpleType\PackageLineItemStatusType|string[] $Status
 * @property DeletionDetail $DeletionDetail

 */
class PackageStatusDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'PackageStatusDetail';

    /**
     * Set Status
     *
     * @param \FedEx\UploadDocumentService\SimpleType\PackageLineItemStatusType[]|string[] $status
     * @return $this
     */
    public function setStatus(array $status)
    {
        $this->values['Status'] = $status;
        return $this;
    }

    /**
     * Set DeletionDetail
     *
     * @param DeletionDetail $deletionDetail
     * @return $this
     */
    public function setDeletionDetail(DeletionDetail $deletionDetail)
    {
        $this->values['DeletionDetail'] = $deletionDetail;
        return $this;
    }
}
