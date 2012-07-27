<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Currency exchange rate information.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class CurrencyExchangeRate
    extends AbstractComplexType
{
    protected $_name = 'CurrencyExchangeRate';

    /**
     * The currency code for the original (converted FROM) currency.
     *
     * @param string $FromCurrency
     * return CurrencyExchangeRate
     */
    public function setFromCurrency($fromCurrency)
    {
        $this->FromCurrency = $fromCurrency;
        return $this;
    }
    
    /**
     * The currency code for the final (converted INTO) currency.
     *
     * @param string $IntoCurrency
     * return CurrencyExchangeRate
     */
    public function setIntoCurrency($intoCurrency)
    {
        $this->IntoCurrency = $intoCurrency;
        return $this;
    }
    
    /**
     * Multiplier used to convert fromCurrency units to intoCurrency units.
     *
     * @param decimal $Rate
     * return CurrencyExchangeRate
     */
    public function setRate($rate)
    {
        $this->Rate = $rate;
        return $this;
    }
    

    
}