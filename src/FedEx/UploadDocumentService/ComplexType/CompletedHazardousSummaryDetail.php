<?php
namespace FedEx\UploadDocumentService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * CompletedHazardousSummaryDetail
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Upload Document Service
 *
 * @property int $SmallQuantityExceptionPackageCount

 */
class CompletedHazardousSummaryDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'CompletedHazardousSummaryDetail';

    /**
     * Specifies the total number of packages containing hazardous commodities in small exceptions.
     *
     * @param int $smallQuantityExceptionPackageCount
     * @return $this
     */
    public function setSmallQuantityExceptionPackageCount($smallQuantityExceptionPackageCount)
    {
        $this->values['SmallQuantityExceptionPackageCount'] = $smallQuantityExceptionPackageCount;
        return $this;
    }
}
