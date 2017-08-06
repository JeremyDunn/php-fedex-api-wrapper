<?php
namespace FedEx\OpenShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * RateDiscount
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  OpenShip Service
 *
 * @property \FedEx\OpenShipService\SimpleType\RateDiscountType|string $RateDiscountType
 * @property string $Description
 * @property Money $Amount
 * @property float $Percent

 */
class RateDiscount extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'RateDiscount';

    /**
     * Set RateDiscountType
     *
     * @param \FedEx\OpenShipService\SimpleType\RateDiscountType|string $rateDiscountType
     * @return $this
     */
    public function setRateDiscountType($rateDiscountType)
    {
        $this->values['RateDiscountType'] = $rateDiscountType;
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

    /**
     * Set Percent
     *
     * @param float $percent
     * @return $this
     */
    public function setPercent($percent)
    {
        $this->values['Percent'] = $percent;
        return $this;
    }
}
