<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * The variable handling charges calculated based on the type variable handling charges requested.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class VariableHandlingCharges
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'VariableHandlingCharges';

    /**
     * The variable handling charge amount calculated based on the requested variable handling charge detail.
     *
     * @param Money $variableHandlingCharge
     * @return VariableHandlingCharges
     */
    public function setVariableHandlingCharge(Money $variableHandlingCharge)
    {
        $this->VariableHandlingCharge = $variableHandlingCharge;
        return $this;
    }
    
    /**
     * Returns The variable handling charge amount calculated based on the requested variable handling charge detail.
     *
     * @return Money
     */
    public function getVariableHandlingCharge()
    {
        return $this->VariableHandlingCharge;
    }
    
    /**
     * Set FixedVariableHandlingCharge
     *
     * @param Money $fixedVariableHandlingCharge
     * @return VariableHandlingCharges
     */
    public function setFixedVariableHandlingCharge(Money $fixedVariableHandlingCharge)
    {
        $this->FixedVariableHandlingCharge = $fixedVariableHandlingCharge;
        return $this;
    }
    
    /**
     * Returns Set FixedVariableHandlingCharge
     *
     * @return Money
     */
    public function getFixedVariableHandlingCharge()
    {
        return $this->FixedVariableHandlingCharge;
    }
    
    /**
     * Set PercentVariableHandlingCharge
     *
     * @param Money $percentVariableHandlingCharge
     * @return VariableHandlingCharges
     */
    public function setPercentVariableHandlingCharge(Money $percentVariableHandlingCharge)
    {
        $this->PercentVariableHandlingCharge = $percentVariableHandlingCharge;
        return $this;
    }
    
    /**
     * Returns Set PercentVariableHandlingCharge
     *
     * @return Money
     */
    public function getPercentVariableHandlingCharge()
    {
        return $this->PercentVariableHandlingCharge;
    }
    
    /**
     * The calculated varibale handling charge plus the net charge.
     *
     * @param Money $totalCustomerCharge
     * @return VariableHandlingCharges
     */
    public function setTotalCustomerCharge(Money $totalCustomerCharge)
    {
        $this->TotalCustomerCharge = $totalCustomerCharge;
        return $this;
    }
    
    /**
     * Returns The calculated varibale handling charge plus the net charge.
     *
     * @return Money
     */
    public function getTotalCustomerCharge()
    {
        return $this->TotalCustomerCharge;
    }
    

    
}