<?php
namespace FedEx\RateService\ComplexType;

/**
 * The variable handling charges calculated based on the type variable handling charges requested.
 *
 * @version     $Revision: 2 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information
 */
class VariableHandlingCharges
    extends AbstractComplexType
{
    protected $_name = 'VariableHandlingCharges';

    /**
     * The variable handling charge amount calculated based on the requested variable handling charge detail.
     *
     * @param Money $VariableHandlingCharge
     * return VariableHandlingCharges
     */
    public function setVariableHandlingCharge(Money $variableHandlingCharge)
    {
        $this->VariableHandlingCharge = $variableHandlingCharge;
        return $this;
    }
    
    /**
     * The calculated varibale handling charge plus the net charge.
     *
     * @param Money $TotalCustomerCharge
     * return VariableHandlingCharges
     */
    public function setTotalCustomerCharge(Money $totalCustomerCharge)
    {
        $this->TotalCustomerCharge = $totalCustomerCharge;
        return $this;
    }
    

    
}