<?php
namespace FedEx\OpenShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * CurrencyExchangeRate
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  OpenShip Service
 *
 * @property string $FromCurrency
 * @property string $IntoCurrency
 * @property float $Rate

 */
class CurrencyExchangeRate extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'CurrencyExchangeRate';

    /**
     * The currency code for the original (converted FROM) currency.
     *
     * @param string $fromCurrency
     * @return $this
     */
    public function setFromCurrency($fromCurrency)
    {
        $this->values['FromCurrency'] = $fromCurrency;
        return $this;
    }

    /**
     * The currency code for the final (converted INTO) currency.
     *
     * @param string $intoCurrency
     * @return $this
     */
    public function setIntoCurrency($intoCurrency)
    {
        $this->values['IntoCurrency'] = $intoCurrency;
        return $this;
    }

    /**
     * Multiplier used to convert fromCurrency units to intoCurrency units.
     *
     * @param float $rate
     * @return $this
     */
    public function setRate($rate)
    {
        $this->values['Rate'] = $rate;
        return $this;
    }
}
