<?php
namespace FedEx\ShipService\ComplexType;

/**
 * 
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
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
    public function setCoverageType(\FedEx\ShipService\SimpleType\LiabilityCoverageType $coverageType)
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