<?php
namespace FedEx\OpenShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * AncillaryFeeAndTax
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  OpenShip Service
 *
 * @property \FedEx\OpenShipService\SimpleType\AncillaryFeeAndTaxType|string $Type
 * @property string $Description
 * @property Money $Amount

 */
class AncillaryFeeAndTax extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'AncillaryFeeAndTax';

    /**
     * Set Type
     *
     * @param \FedEx\OpenShipService\SimpleType\AncillaryFeeAndTaxType|string $type
     * @return $this
     */
    public function setType($type)
    {
        $this->values['Type'] = $type;
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
