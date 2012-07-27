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
class EdtCommodityTax
    extends AbstractComplexType
{
    protected $_name = 'EdtCommodityTax';

    /**
     * 
     *
     * @param string $HarmonizedCode
     * return EdtCommodityTax
     */
    public function setHarmonizedCode($harmonizedCode)
    {
        $this->HarmonizedCode = $harmonizedCode;
        return $this;
    }
    
    /**
     * 
     *
     * @param array[EdtTaxDetail] $Taxes
     * return EdtCommodityTax
     */
    public function setTaxes(array $taxes)
    {
        $this->Taxes = $taxes;
        return $this;
    }
    

    
}