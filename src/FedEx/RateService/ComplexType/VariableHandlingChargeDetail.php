<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * This definition of variable handling charge detail is intended for use in Jan 2011 corp load.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class VariableHandlingChargeDetail
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'VariableHandlingChargeDetail';

    /**
     * Used with Variable handling charge type of FIXED_VALUE. Contains the amount to be added to the freight charge. Contains 2 explicit decimal positions with a total max length of 10 including the decimal.
     *
     * @param Money $fixedValue
     * return VariableHandlingChargeDetail
     */
    public function setFixedValue(Money $fixedValue)
    {
        $this->FixedValue = $fixedValue;
        return $this;
    }
    
    /**
     * Actual percentage (10 means 10%, which is a mutiplier of 0.1)
     *
     * @param decimal $percentValue
     * return VariableHandlingChargeDetail
     */
    public function setPercentValue($percentValue)
    {
        $this->PercentValue = $percentValue;
        return $this;
    }
    
    /**
     * Select the value from a set of rate data to which the percentage is applied.
     *
     * @param \FedEx\RateService\SimpleType\RateElementBasisType|string $rateElementBasis
     * return VariableHandlingChargeDetail
     */
    public function setRateElementBasis($rateElementBasis)
    {
        $this->RateElementBasis = $rateElementBasis;
        return $this;
    }
    
    /**
     * Select the type of rate from which the element is to be selected.
     *
     * @param \FedEx\RateService\SimpleType\RateTypeBasisType|string $rateTypeBasis
     * return VariableHandlingChargeDetail
     */
    public function setRateTypeBasis($rateTypeBasis)
    {
        $this->RateTypeBasis = $rateTypeBasis;
        return $this;
    }
    

    
}