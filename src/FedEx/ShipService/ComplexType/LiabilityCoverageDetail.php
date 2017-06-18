<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * LiabilityCoverageDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 *
 * @property \FedEx\ShipService\SimpleType\LiabilityCoverageType|string $CoverageType
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
     * @param \FedEx\ShipService\SimpleType\LiabilityCoverageType|string $coverageType
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
