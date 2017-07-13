<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * The variable handling charges calculated based on the type variable handling charges requested.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 *
 * @property Money $VariableHandlingCharge
 * @property Money $FixedVariableHandlingCharge
 * @property Money $PercentVariableHandlingCharge
 * @property Money $TotalCustomerCharge

 */
class VariableHandlingCharges extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'VariableHandlingCharges';

    /**
     * The variable handling charge amount calculated based on the requested variable handling charge detail.
     *
     * @param Money $variableHandlingCharge
     * @return $this
     */
    public function setVariableHandlingCharge(Money $variableHandlingCharge)
    {
        $this->values['VariableHandlingCharge'] = $variableHandlingCharge;
        return $this;
    }

    /**
     * Set FixedVariableHandlingCharge
     *
     * @param Money $fixedVariableHandlingCharge
     * @return $this
     */
    public function setFixedVariableHandlingCharge(Money $fixedVariableHandlingCharge)
    {
        $this->values['FixedVariableHandlingCharge'] = $fixedVariableHandlingCharge;
        return $this;
    }

    /**
     * Set PercentVariableHandlingCharge
     *
     * @param Money $percentVariableHandlingCharge
     * @return $this
     */
    public function setPercentVariableHandlingCharge(Money $percentVariableHandlingCharge)
    {
        $this->values['PercentVariableHandlingCharge'] = $percentVariableHandlingCharge;
        return $this;
    }

    /**
     * The calculated varibale handling charge plus the net charge.
     *
     * @param Money $totalCustomerCharge
     * @return $this
     */
    public function setTotalCustomerCharge(Money $totalCustomerCharge)
    {
        $this->values['TotalCustomerCharge'] = $totalCustomerCharge;
        return $this;
    }
}
