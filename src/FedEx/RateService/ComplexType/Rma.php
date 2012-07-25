<?php
namespace FedEx\RateService\ComplexType;

/**
 * Return Merchant Authorization
 *
 * @version     $Revision: 2 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information
 */
class Rma
    extends AbstractComplexType
{
    protected $_name = 'Rma';

    /**
     * Return Merchant Authorization Number
     *
     * @param string $Number
     * return Rma
     */
    public function setNumber($number)
    {
        $this->Number = $number;
        return $this;
    }
    
    /**
     * The reason for the return.
     *
     * @param string $Reason
     * return Rma
     */
    public function setReason($reason)
    {
        $this->Reason = $reason;
        return $this;
    }
    

    
}