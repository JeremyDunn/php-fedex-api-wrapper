<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * EdtTaxDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
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
     * @param \FedEx\ShipService\SimpleType\EdtTaxType|string $taxType
     * @return EdtTaxDetail
     */
    public function setTaxType($taxType)
    {
        $this->TaxType = $taxType;
        return $this;
    }
    
    /**
     * Returns Set TaxType
     *
     * @return \FedEx\ShipService\SimpleType\EdtTaxType|string
     */
    public function getTaxType()
    {
        return $this->TaxType;
    }
    
    /**
     * Set EffectiveDate
     *
     * @param date $effectiveDate
     * @return EdtTaxDetail
     */
    public function setEffectiveDate($effectiveDate)
    {
        $this->EffectiveDate = $effectiveDate;
        return $this;
    }
    
    /**
     * Returns Set EffectiveDate
     *
     * @return date
     */
    public function getEffectiveDate()
    {
        return $this->EffectiveDate;
    }
    
    /**
     * Set Name
     *
     * @param string $name
     * @return EdtTaxDetail
     */
    public function setName($name)
    {
        $this->Name = $name;
        return $this;
    }
    
    /**
     * Returns Set Name
     *
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }
    
    /**
     * Set TaxableValue
     *
     * @param Money $taxableValue
     * @return EdtTaxDetail
     */
    public function setTaxableValue(Money $taxableValue)
    {
        $this->TaxableValue = $taxableValue;
        return $this;
    }
    
    /**
     * Returns Set TaxableValue
     *
     * @return Money
     */
    public function getTaxableValue()
    {
        return $this->TaxableValue;
    }
    
    /**
     * Set Description
     *
     * @param string $description
     * @return EdtTaxDetail
     */
    public function setDescription($description)
    {
        $this->Description = $description;
        return $this;
    }
    
    /**
     * Returns Set Description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->Description;
    }
    
    /**
     * Set Formula
     *
     * @param string $formula
     * @return EdtTaxDetail
     */
    public function setFormula($formula)
    {
        $this->Formula = $formula;
        return $this;
    }
    
    /**
     * Returns Set Formula
     *
     * @return string
     */
    public function getFormula()
    {
        return $this->Formula;
    }
    
    /**
     * Set Amount
     *
     * @param Money $amount
     * @return EdtTaxDetail
     */
    public function setAmount(Money $amount)
    {
        $this->Amount = $amount;
        return $this;
    }
    
    /**
     * Returns Set Amount
     *
     * @return Money
     */
    public function getAmount()
    {
        return $this->Amount;
    }
    

    
}