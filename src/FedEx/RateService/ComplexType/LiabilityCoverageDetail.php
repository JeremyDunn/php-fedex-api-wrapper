<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * LiabilityCoverageDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class LiabilityCoverageDetail
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'LiabilityCoverageDetail';

    /**
     * Set CoverageType
     *
     * @param \FedEx\RateService\SimpleType\LiabilityCoverageType|string $coverageType
     * return LiabilityCoverageDetail
     */
    public function setCoverageType($coverageType)
    {
        $this->CoverageType = $coverageType;
        return $this;
    }
    
    /**
     * Identifies the Liability Coverage Amount. For Jan 2010 this value represents coverage amount per pound
     *
     * @param Money $coverageAmount
     * return LiabilityCoverageDetail
     */
    public function setCoverageAmount(Money $coverageAmount)
    {
        $this->CoverageAmount = $coverageAmount;
        return $this;
    }
    

    
}