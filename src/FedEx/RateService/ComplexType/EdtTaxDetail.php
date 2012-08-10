<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * EdtTaxDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class EdtTaxDetail
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'EdtTaxDetail';

    /**
     * Set TaxType
     *
     * @param \FedEx\RateService\SimpleType\EdtTaxType|string $taxType
     * return EdtTaxDetail
     */
    public function setTaxType($taxType)
    {
        $this->TaxType = $taxType;
        return $this;
    }
    
    /**
     * Set EffectiveDate
     *
     * @param date $effectiveDate
     * return EdtTaxDetail
     */
    public function setEffectiveDate($effectiveDate)
    {
        $this->EffectiveDate = $effectiveDate;
        return $this;
    }
    
    /**
     * Set Name
     *
     * @param string $name
     * return EdtTaxDetail
     */
    public function setName($name)
    {
        $this->Name = $name;
        return $this;
    }
    
    /**
     * Set TaxableValue
     *
     * @param Money $taxableValue
     * return EdtTaxDetail
     */
    public function setTaxableValue(Money $taxableValue)
    {
        $this->TaxableValue = $taxableValue;
        return $this;
    }
    
    /**
     * Set Description
     *
     * @param string $description
     * return EdtTaxDetail
     */
    public function setDescription($description)
    {
        $this->Description = $description;
        return $this;
    }
    
    /**
     * Set Formula
     *
     * @param string $formula
     * return EdtTaxDetail
     */
    public function setFormula($formula)
    {
        $this->Formula = $formula;
        return $this;
    }
    
    /**
     * Set Amount
     *
     * @param Money $amount
     * return EdtTaxDetail
     */
    public function setAmount(Money $amount)
    {
        $this->Amount = $amount;
        return $this;
    }
    

    
}