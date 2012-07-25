<?php
namespace FedEx\UploadDocumentService\ComplexType;

/**
 * 
 *
 * @version     $Revision: 2 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
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