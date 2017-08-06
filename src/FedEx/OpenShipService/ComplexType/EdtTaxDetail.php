<?php
namespace FedEx\OpenShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * EdtTaxDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  OpenShip Service
 *
 * @property \FedEx\OpenShipService\SimpleType\EdtTaxType|string $TaxType
 * @property string $EffectiveDate
 * @property string $Name
 * @property Money $TaxableValue
 * @property string $Description
 * @property string $Formula
 * @property Money $Amount

 */
class EdtTaxDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'EdtTaxDetail';

    /**
     * Set TaxType
     *
     * @param \FedEx\OpenShipService\SimpleType\EdtTaxType|string $taxType
     * @return $this
     */
    public function setTaxType($taxType)
    {
        $this->values['TaxType'] = $taxType;
        return $this;
    }

    /**
     * Set EffectiveDate
     *
     * @param string $effectiveDate
     * @return $this
     */
    public function setEffectiveDate($effectiveDate)
    {
        $this->values['EffectiveDate'] = $effectiveDate;
        return $this;
    }

    /**
     * Set Name
     *
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->values['Name'] = $name;
        return $this;
    }

    /**
     * Set TaxableValue
     *
     * @param Money $taxableValue
     * @return $this
     */
    public function setTaxableValue(Money $taxableValue)
    {
        $this->values['TaxableValue'] = $taxableValue;
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
     * Set Formula
     *
     * @param string $formula
     * @return $this
     */
    public function setFormula($formula)
    {
        $this->values['Formula'] = $formula;
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
