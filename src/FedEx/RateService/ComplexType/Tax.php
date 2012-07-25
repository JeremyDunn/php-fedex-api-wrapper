<?php
namespace FedEx\RateService\ComplexType;

/**
 * Identifies each tax applied to the shipment.
 *
 * @version     $Revision: 4 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information
 */
class Tax
    extends AbstractComplexType
{
    protected $_name = 'Tax';

    /**
     * 
     *
     * @param TaxType $TaxType
     * return Tax
     */
    public function setTaxType(\FedEx\RateService\SimpleType\TaxType $taxType)
    {
        $this->TaxType = $taxType;
        return $this;
    }
    
    /**
     * 
     *
     * @param string $Description
     * return Tax
     */
    public function setDescription($description)
    {
        $this->Description = $description;
        return $this;
    }
    
    /**
     * 
     *
     * @param Money $Amount
     * return Tax
     */
    public function setAmount(Money $amount)
    {
        $this->Amount = $amount;
        return $this;
    }
    

    
}