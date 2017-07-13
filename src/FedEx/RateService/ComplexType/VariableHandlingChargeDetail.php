<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * This definition of variable handling charge detail is intended for use in Jan 2011 corp load.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 *
 * @property Money $FixedValue
 * @property float $PercentValue
 * @property \FedEx\RateService\SimpleType\RateElementBasisType|string $RateElementBasis
 * @property \FedEx\RateService\SimpleType\RateTypeBasisType|string $RateTypeBasis

 */
class VariableHandlingChargeDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'VariableHandlingChargeDetail';

    /**
     * Used with Variable handling charge type of FIXED_VALUE. Contains the amount to be added to the freight charge. Contains 2 explicit decimal positions with a total max length of 10 including the decimal.
     *
     * @param Money $fixedValue
     * @return $this
     */
    public function setFixedValue(Money $fixedValue)
    {
        $this->values['FixedValue'] = $fixedValue;
        return $this;
    }

    /**
     * Actual percentage (10 means 10%, which is a mutiplier of 0.1)
     *
     * @param float $percentValue
     * @return $this
     */
    public function setPercentValue($percentValue)
    {
        $this->values['PercentValue'] = $percentValue;
        return $this;
    }

    /**
     * Select the value from a set of rate data to which the percentage is applied.
     *
     * @param \FedEx\RateService\SimpleType\RateElementBasisType|string $rateElementBasis
     * @return $this
     */
    public function setRateElementBasis($rateElementBasis)
    {
        $this->values['RateElementBasis'] = $rateElementBasis;
        return $this;
    }

    /**
     * Select the type of rate from which the element is to be selected.
     *
     * @param \FedEx\RateService\SimpleType\RateTypeBasisType|string $rateTypeBasis
     * @return $this
     */
    public function setRateTypeBasis($rateTypeBasis)
    {
        $this->values['RateTypeBasis'] = $rateTypeBasis;
        return $this;
    }
}
