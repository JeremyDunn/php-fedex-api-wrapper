<?php
namespace FedEx\UploadDocumentService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specifies a single type of weighing performed on a shipment
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Upload Document Service
 *
 * @property \FedEx\UploadDocumentService\SimpleType\WeighingScaleType|string $Type

 */
class WeighingDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'WeighingDetail';

    /**
     * Type of scale used
     *
     * @param \FedEx\UploadDocumentService\SimpleType\WeighingScaleType|string $type
     * @return $this
     */
    public function setType($type)
    {
        $this->values['Type'] = $type;
        return $this;
    }
}
