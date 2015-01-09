<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * CompletedEtdDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class CompletedEtdDetail
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'CompletedEtdDetail';

    /**
     * The identifier for all clearance documents associated with this shipment.
     *
     * @param string $folderId
     * @return CompletedEtdDetail
     */
    public function setFolderId($folderId)
    {
        $this->FolderId = $folderId;
        return $this;
    }
    
    /**
     * Returns The identifier for all clearance documents associated with this shipment.
     *
     * @return string
     */
    public function getFolderId()
    {
        return $this->FolderId;
    }
    
    /**
     * Set UploadDocumentReferenceDetails
     *
     * @param UploadDocumentReferenceDetail[] $uploadDocumentReferenceDetails
     * @return CompletedEtdDetail
     */
    public function setUploadDocumentReferenceDetails(array $uploadDocumentReferenceDetails)
    {
        $this->UploadDocumentReferenceDetails = $uploadDocumentReferenceDetails;
        return $this;
    }
    
    /**
     * Returns Set UploadDocumentReferenceDetails
     *
     * @return UploadDocumentReferenceDetail[]
     */
    public function getUploadDocumentReferenceDetails()
    {
        return $this->UploadDocumentReferenceDetails;
    }
    

    
}