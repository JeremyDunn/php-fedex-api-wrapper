<?php
namespace FedEx\PickupService\ComplexType;

/**
 * The descriptive data for the medium of exchange for FedEx services.
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class Money
    extends AbstractComplexType
{
    protected $_name = 'Money';

    /**
     * Identifies the currency of the monetary amount.
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
     * Identifies the monetary amount.
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