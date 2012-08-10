<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Identifies each tax applied to the shipment.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
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
     * The type of tax applied to the shipment.
     *
     * @param \FedEx\ShipService\SimpleType\TaxType|string $taxType
     * return Tax
     */
    public function setTaxType($taxType)
    {
        $this->TaxType = $taxType;
        return $this;
    }
    
    /**
     * Set Description
     *
     * @param string $description
     * return Tax
     */
    public function setDescription($description)
    {
        $this->Description = $description;
        return $this;
    }
    
    /**
     * The amount of the tax applied to the shipment.
     *
     * @param Money $amount
     * return Tax
     */
    public function setAmount(Money $amount)
    {
        $this->Amount = $amount;
        return $this;
    }
    

    
}