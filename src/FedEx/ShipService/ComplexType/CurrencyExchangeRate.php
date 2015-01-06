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

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'CurrencyExchangeRate';

    /**
     * The currency code for the original (converted FROM) currency.
     *
     * @param string $fromCurrency
     * @return CurrencyExchangeRate
     */
    public function setFromCurrency($fromCurrency)
    {
        $this->FromCurrency = $fromCurrency;
        return $this;
    }
    
    /**
     * Returns The currency code for the original (converted FROM) currency.
     *
     * @return string
     */
    public function getFromCurrency()
    {
        return $this->FromCurrency;
    }
    
    /**
     * The currency code for the final (converted INTO) currency.
     *
     * @param string $intoCurrency
     * @return CurrencyExchangeRate
     */
    public function setIntoCurrency($intoCurrency)
    {
        $this->IntoCurrency = $intoCurrency;
        return $this;
    }
    
    /**
     * Returns The currency code for the final (converted INTO) currency.
     *
     * @return string
     */
    public function getIntoCurrency()
    {
        return $this->IntoCurrency;
    }
    
    /**
     * Multiplier used to convert fromCurrency units to intoCurrency units.
     *
     * @param decimal $rate
     * @return CurrencyExchangeRate
     */
    public function setRate($rate)
    {
        $this->Rate = $rate;
        return $this;
    }
    
    /**
     * Returns Multiplier used to convert fromCurrency units to intoCurrency units.
     *
     * @return decimal
     */
    public function getRate()
    {
        return $this->Rate;
    }
    

    
}