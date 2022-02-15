<?php
namespace FedEx\UploadDocumentService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * CompletedEtdDetail
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Upload Document Service
 *
 * @property string $FolderId
 * @property \FedEx\UploadDocumentService\SimpleType\CompletedEtdType|string $Type
 * @property UploadDocumentReferenceDetail[] $UploadDocumentReferenceDetails

 */
class CompletedEtdDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'CompletedEtdDetail';

    /**
     * The identifier for all clearance documents associated with this shipment.
     *
     * @param string $folderId
     * @return $this
     */
    public function setFolderId($folderId)
    {
        $this->values['FolderId'] = $folderId;
        return $this;
    }

    /**
     * Set Type
     *
     * @param \FedEx\UploadDocumentService\SimpleType\CompletedEtdType|string $type
     * @return $this
     */
    public function setType($type)
    {
        $this->values['Type'] = $type;
        return $this;
    }

    /**
     * Set UploadDocumentReferenceDetails
     *
     * @param UploadDocumentReferenceDetail[] $uploadDocumentReferenceDetails
     * @return $this
     */
    public function setUploadDocumentReferenceDetails(array $uploadDocumentReferenceDetails)
    {
        $this->values['UploadDocumentReferenceDetails'] = $uploadDocumentReferenceDetails;
        return $this;
    }
}
