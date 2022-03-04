<?php
namespace FedEx\UploadDocumentService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * CustomDiscountExclusionDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Upload Document Service
 *
 * @property \FedEx\UploadDocumentService\SimpleType\RateDiscountType|string[] $ExcludedTypes

 */
class CustomDiscountExclusionDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'CustomDiscountExclusionDetail';

    /**
     * Types of discounts that are excluded.
     *
     * @param \FedEx\UploadDocumentService\SimpleType\RateDiscountType[]|string[] $excludedTypes
     * @return $this
     */
    public function setExcludedTypes(array $excludedTypes)
    {
        $this->values['ExcludedTypes'] = $excludedTypes;
        return $this;
    }
}
