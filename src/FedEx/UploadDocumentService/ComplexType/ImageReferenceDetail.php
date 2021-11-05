<?php
namespace FedEx\UploadDocumentService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * ImageReferenceDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Upload Document Service
 *
 * @property \FedEx\UploadDocumentService\SimpleType\ImageId|string $Id
 * @property string $InternalId
 * @property \FedEx\UploadDocumentService\SimpleType\InternalImageType|string $InternalImageType

 */
class ImageReferenceDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ImageReferenceDetail';

    /**
     * Set Id
     *
     * @param \FedEx\UploadDocumentService\SimpleType\ImageId|string $id
     * @return $this
     */
    public function setId($id)
    {
        $this->values['Id'] = $id;
        return $this;
    }

    /**
     * Represents the internal index used by INET to identify an image
     *
     * @param string $internalId
     * @return $this
     */
    public function setInternalId($internalId)
    {
        $this->values['InternalId'] = $internalId;
        return $this;
    }

    /**
     * Represents the internal image type used by INET
     *
     * @param \FedEx\UploadDocumentService\SimpleType\InternalImageType|string $internalImageType
     * @return $this
     */
    public function setInternalImageType($internalImageType)
    {
        $this->values['InternalImageType'] = $internalImageType;
        return $this;
    }
}
