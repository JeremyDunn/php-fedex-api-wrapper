<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * CompletedHazardousSummaryDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class CompletedHazardousSummaryDetail
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'CompletedHazardousSummaryDetail';

    /**
     * Specifies the total number of packages containing hazardous commodities in small exceptions.
     *
     * @param nonNegativeInteger $smallQuantityExceptionPackageCount
     * return CompletedHazardousSummaryDetail
     */
    public function setSmallQuantityExceptionPackageCount($smallQuantityExceptionPackageCount)
    {
        $this->SmallQuantityExceptionPackageCount = $smallQuantityExceptionPackageCount;
        return $this;
    }
    

    
}