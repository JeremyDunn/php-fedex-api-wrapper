<?php
namespace FedEx\OpenShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * CompletedEtdDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  OpenShip Service
 *
 * @property string $FolderId
 * @property \FedEx\OpenShipService\SimpleType\CompletedEtdType|string $Type
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
     * @param \FedEx\OpenShipService\SimpleType\CompletedEtdType|string $type
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
