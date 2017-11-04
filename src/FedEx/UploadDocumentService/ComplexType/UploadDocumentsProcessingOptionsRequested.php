<?php
namespace FedEx\UploadDocumentService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * UploadDocumentsProcessingOptionsRequested
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Upload Document Service
 *
 * @property \FedEx\UploadDocumentService\SimpleType\UploadDocumentsProcessingOptionType|string[] $Options
 * @property PostShipmentUploadDetail $PostShipmentUploadDetail

 */
class UploadDocumentsProcessingOptionsRequested extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'UploadDocumentsProcessingOptionsRequested';

    /**
     * Set Options
     *
     * @param \FedEx\UploadDocumentService\SimpleType\UploadDocumentsProcessingOptionType[]|string[] $options
     * @return $this
     */
    public function setOptions(array $options)
    {
        $this->values['Options'] = $options;
        return $this;
    }

    /**
     * Set PostShipmentUploadDetail
     *
     * @param PostShipmentUploadDetail $postShipmentUploadDetail
     * @return $this
     */
    public function setPostShipmentUploadDetail(PostShipmentUploadDetail $postShipmentUploadDetail)
    {
        $this->values['PostShipmentUploadDetail'] = $postShipmentUploadDetail;
        return $this;
    }
}
