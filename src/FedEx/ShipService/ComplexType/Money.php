<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * The descriptive data for the medium of exchange for FedEx services.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class Money
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'Money';

    /**
     * Identifies the currency of the monetary amount.
     *
     * @param string $currency
     * @return Money
     */
    public function setCurrency($currency)
    {
        $this->Currency = $currency;
        return $this;
    }
    
    /**
     * Returns Identifies the currency of the monetary amount.
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->Currency;
    }
    
    /**
     * Identifies the monetary amount.
     *
     * @param decimal $amount
     * @return Money
     */
    public function setAmount($amount)
    {
        $this->Amount = $amount;
        return $this;
    }
    
    /**
     * Returns Identifies the monetary amount.
     *
     * @return decimal
     */
    public function getAmount()
    {
        return $this->Amount;
    }
    

    
}