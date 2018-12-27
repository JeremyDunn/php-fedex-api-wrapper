<?php
namespace FedEx\TrackService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * AvailableImagesDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information Service
 *
 * @property \FedEx\TrackService\SimpleType\AvailableImageType|string $Type
 * @property \FedEx\TrackService\SimpleType\ImageSizeType|string $Size

 */
class AvailableImagesDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'AvailableImagesDetail';

    /**
     * Set Type
     *
     * @param \FedEx\TrackService\SimpleType\AvailableImageType|string $type
     * @return $this
     */
    public function setType($type)
    {
        $this->values['Type'] = $type;
        return $this;
    }

    /**
     * Set Size
     *
     * @param \FedEx\TrackService\SimpleType\ImageSizeType|string $size
     * @return $this
     */
    public function setSize($size)
    {
        $this->values['Size'] = $size;
        return $this;
    }
}
