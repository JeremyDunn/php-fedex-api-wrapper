<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Identifies each tax applied to the shipment.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class Tax
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'Tax';

    /**
     * Set TaxType
     *
     * @param \FedEx\RateService\SimpleType\TaxType|string $taxType
     * @return Tax
     */
    public function setTaxType($taxType)
    {
        $this->TaxType = $taxType;
        return $this;
    }
    
    /**
     * Returns Set TaxType
     *
     * @return \FedEx\RateService\SimpleType\TaxType|string
     */
    public function getTaxType()
    {
        return $this->TaxType;
    }
    
    /**
     * Set Description
     *
     * @param string $description
     * @return Tax
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
     * Set Amount
     *
     * @param Money $amount
     * @return Tax
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