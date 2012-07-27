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
class Money
    extends AbstractComplexType
{
    protected $_name = 'Money';

    /**
     * 
     *
     * @param string $Currency
     * return Money
     */
    public function setCurrency($currency)
    {
        $this->Currency = $currency;
        return $this;
    }
    
    /**
     * 
     *
     * @param decimal $Amount
     * return Money
     */
    public function setAmount($amount)
    {
        $this->Amount = $amount;
        return $this;
    }
    

    
}