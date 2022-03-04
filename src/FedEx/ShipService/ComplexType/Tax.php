<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Tax
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 *
 * @property \FedEx\ShipService\SimpleType\TaxType|string $TaxType
 * @property string $Description
 * @property Money $Amount

 */
class Tax extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'Tax';

    /**
     * Set TaxType
     *
     * @param \FedEx\ShipService\SimpleType\TaxType|string $taxType
     * @return $this
     */
    public function setTaxType($taxType)
    {
        $this->values['TaxType'] = $taxType;
        return $this;
    }

    /**
     * Set Description
     *
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->values['Description'] = $description;
        return $this;
    }

    /**
     * Set Amount
     *
     * @param Money $amount
     * @return $this
     */
    public function setAmount(Money $amount)
    {
        $this->values['Amount'] = $amount;
        return $this;
    }
}
