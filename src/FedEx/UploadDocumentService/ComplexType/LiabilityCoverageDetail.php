<?php
namespace FedEx\UploadDocumentService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * LiabilityCoverageDetail
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Upload Document Service
 *
 * @property \FedEx\UploadDocumentService\SimpleType\LiabilityCoverageType|string $CoverageType
 * @property Money $CoverageAmount

 */
class LiabilityCoverageDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'LiabilityCoverageDetail';

    /**
     * Set CoverageType
     *
     * @param \FedEx\UploadDocumentService\SimpleType\LiabilityCoverageType|string $coverageType
     * @return $this
     */
    public function setCoverageType($coverageType)
    {
        $this->values['CoverageType'] = $coverageType;
        return $this;
    }

    /**
     * Identifies the Liability Coverage Amount. For Jan 2010 this value represents coverage amount per pound
     *
     * @param Money $coverageAmount
     * @return $this
     */
    public function setCoverageAmount(Money $coverageAmount)
    {
        $this->values['CoverageAmount'] = $coverageAmount;
        return $this;
    }
}
