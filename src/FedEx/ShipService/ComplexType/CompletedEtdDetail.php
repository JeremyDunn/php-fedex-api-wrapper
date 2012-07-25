<?php
namespace FedEx\ShipService\ComplexType;

/**
 * 
 *
 * @version     $Revision: 4 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class CompletedEtdDetail
    extends AbstractComplexType
{
    protected $_name = 'CompletedEtdDetail';

    /**
     * The identifier for all clearance documents associated with this shipment.
     *
     * @param string $FolderId
     * return CompletedEtdDetail
     */
    public function setFolderId($folderId)
    {
        $this->FolderId = $folderId;
        return $this;
    }
    
    /**
     * 
     *
     * @param array[UploadDocumentReferenceDetail] $UploadDocumentReferenceDetails
     * return CompletedEtdDetail
     */
    public function setUploadDocumentReferenceDetails(array $uploadDocumentReferenceDetails)
    {
        $this->UploadDocumentReferenceDetails = $uploadDocumentReferenceDetails;
        return $this;
    }
    

    
}