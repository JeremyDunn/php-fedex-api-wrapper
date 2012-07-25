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
class EdtTaxDetail
    extends AbstractComplexType
{
    protected $_name = 'EdtTaxDetail';

    /**
     * 
     *
     * @param EdtTaxType $TaxType
     * return EdtTaxDetail
     */
    public function setTaxType(\FedEx\RateService\SimpleType\EdtTaxType $taxType)
    {
        $this->TaxType = $taxType;
        return $this;
    }
    
    /**
     * 
     *
     * @param date $EffectiveDate
     * return EdtTaxDetail
     */
    public function setEffectiveDate($effectiveDate)
    {
        $this->EffectiveDate = $effectiveDate;
        return $this;
    }
    
    /**
     * 
     *
     * @param string $Name
     * return EdtTaxDetail
     */
    public function setName($name)
    {
        $this->Name = $name;
        return $this;
    }
    
    /**
     * 
     *
     * @param Money $TaxableValue
     * return EdtTaxDetail
     */
    public function setTaxableValue(Money $taxableValue)
    {
        $this->TaxableValue = $taxableValue;
        return $this;
    }
    
    /**
     * 
     *
     * @param string $Description
     * return EdtTaxDetail
     */
    public function setDescription($description)
    {
        $this->Description = $description;
        return $this;
    }
    
    /**
     * 
     *
     * @param string $Formula
     * return EdtTaxDetail
     */
    public function setFormula($formula)
    {
        $this->Formula = $formula;
        return $this;
    }
    
    /**
     * 
     *
     * @param Money $Amount
     * return EdtTaxDetail
     */
    public function setAmount(Money $amount)
    {
        $this->Amount = $amount;
        return $this;
    }
    

    
}