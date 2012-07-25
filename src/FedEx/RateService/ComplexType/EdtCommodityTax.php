<?php
namespace FedEx\RateService\ComplexType;

/**
 * 
 *
 * @version     $Revision: 2 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information
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