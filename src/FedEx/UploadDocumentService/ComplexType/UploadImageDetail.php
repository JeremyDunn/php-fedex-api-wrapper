<?php
namespace FedEx\UploadDocumentService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * 
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Upload Document Service
 */
class UploadImageDetail
    extends AbstractComplexType
{
    protected $_name = 'UploadImageDetail';

    /**
     * 
     *
     * @param ImageId $Id
     * return UploadImageDetail
     */
    public function setId(\FedEx\UploadDocumentService\SimpleType\ImageId $id)
    {
        $this->Id = $id;
        return $this;
    }
    
    /**
     * 
     *
     * @param base64Binary $Image
     * return UploadImageDetail
     */
    public function setImage($image)
    {
        $this->Image = $image;
        return $this;
    }
    

    
}