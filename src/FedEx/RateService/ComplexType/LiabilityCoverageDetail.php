<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * 
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class LiabilityCoverageDetail
    extends AbstractComplexType
{
    protected $_name = 'LiabilityCoverageDetail';

    /**
     * 
     *
     * @param LiabilityCoverageType $CoverageType
     * return LiabilityCoverageDetail
     */
    public function setCoverageType(\FedEx\RateService\SimpleType\LiabilityCoverageType $coverageType)
    {
        $this->CoverageType = $coverageType;
        return $this;
    }
    
    /**
     * Identifies the Liability Coverage Amount. For Jan 2010 this value represents coverage amount per pound
     *
     * @param Money $CoverageAmount
     * return LiabilityCoverageDetail
     */
    public function setCoverageAmount(Money $coverageAmount)
    {
        $this->CoverageAmount = $coverageAmount;
        return $this;
    }
    

    
}