<?php
namespace FedEx\RateService\ComplexType;

/**
 * 
 *
 * @version     $Revision: 4 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information
 */
class Money
    extends AbstractComplexType
{
    protected $_name = 'Money';

    /**
     * 
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
     * 
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