<?php
namespace FedEx\Pickup\ComplexType;

use FedEx\AbstractComplexType;

/**
 * The descriptive data for the medium of exchange for FedEx services.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 *
 * @property string $Currency
 * @property decimal $Amount

 */
class Money extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'Money';

    /**
     * Identifies the currency of the monetary amount.
     *
     * @param string $currency
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->values['Currency'] = $currency;
        return $this;
    }

    /**
     * Identifies the monetary amount.
     *
     * @param decimal $amount
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->values['Amount'] = $amount;
        return $this;
    }

    
}
