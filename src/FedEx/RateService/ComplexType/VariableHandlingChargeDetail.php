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
    protected $_name = 'VariableHandlingChargeDetail';

    /**
     * Used with Variable handling charge type of FIXED_VALUE. Contains the amount to be added to the freight charge. Contains 2 explicit decimal positions with a total max length of 10 including the decimal.
     *
     * @param Money $FixedValue
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
     * @param decimal $PercentValue
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
     * @param RateElementBasisType $RateElementBasis
     * return VariableHandlingChargeDetail
     */
    public function setRateElementBasis(\FedEx\RateService\SimpleType\RateElementBasisType $rateElementBasis)
    {
        $this->RateElementBasis = $rateElementBasis;
        return $this;
    }
    
    /**
     * Select the type of rate from which the element is to be selected.
     *
     * @param RateTypeBasisType $RateTypeBasis
     * return VariableHandlingChargeDetail
     */
    public function setRateTypeBasis(\FedEx\RateService\SimpleType\RateTypeBasisType $rateTypeBasis)
    {
        $this->RateTypeBasis = $rateTypeBasis;
        return $this;
    }
    

    
}