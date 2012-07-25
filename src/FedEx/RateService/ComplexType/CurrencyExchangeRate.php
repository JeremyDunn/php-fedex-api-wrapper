<?php
namespace FedEx\RateService\ComplexType;

/**
 * Specifies the currency exchange performed on financial amounts for this rate.
 *
 * @version     $Revision: 2 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information
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