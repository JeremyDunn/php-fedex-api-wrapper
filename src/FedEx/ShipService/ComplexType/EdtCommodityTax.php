<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * EdtCommodityTax
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class EdtCommodityTax
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'EdtCommodityTax';

    /**
     * Set HarmonizedCode
     *
     * @param string $harmonizedCode
     * @return EdtCommodityTax
     */
    public function setHarmonizedCode($harmonizedCode)
    {
        $this->HarmonizedCode = $harmonizedCode;
        return $this;
    }
    
    /**
     * Returns Set HarmonizedCode
     *
     * @return string
     */
    public function getHarmonizedCode()
    {
        return $this->HarmonizedCode;
    }
    
    /**
     * Set Taxes
     *
     * @param EdtTaxDetail[] $taxes
     * @return EdtCommodityTax
     */
    public function setTaxes(array $taxes)
    {
        $this->Taxes = $taxes;
        return $this;
    }
    
    /**
     * Returns Set Taxes
     *
     * @return EdtTaxDetail[]
     */
    public function getTaxes()
    {
        return $this->Taxes;
    }
    

    
}