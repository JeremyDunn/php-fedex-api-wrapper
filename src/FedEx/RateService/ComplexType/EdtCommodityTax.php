<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * EdtCommodityTax
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 *
 * @property string $HarmonizedCode
 * @property EdtTaxDetail[] $Taxes

 */
class EdtCommodityTax extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'EdtCommodityTax';

    /**
     * Set HarmonizedCode
     *
     * @param string $harmonizedCode
     * @return $this
     */
    public function setHarmonizedCode($harmonizedCode)
    {
        $this->values['HarmonizedCode'] = $harmonizedCode;
        return $this;
    }

    /**
     * Set Taxes
     *
     * @param EdtTaxDetail[] $taxes
     * @return $this
     */
    public function setTaxes(array $taxes)
    {
        $this->values['Taxes'] = $taxes;
        return $this;
    }
}
