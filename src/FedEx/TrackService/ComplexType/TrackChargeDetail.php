<?php
namespace FedEx\TrackService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * TrackChargeDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information Service
 *
 * @property \FedEx\TrackService\SimpleType\TrackChargeDetailType|string $Type
 * @property Money $ChargeAmount

 */
class TrackChargeDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'TrackChargeDetail';

    /**
     * Set Type
     *
     * @param \FedEx\TrackService\SimpleType\TrackChargeDetailType|string $type
     * @return $this
     */
    public function setType($type)
    {
        $this->values['Type'] = $type;
        return $this;
    }

    /**
     * Set ChargeAmount
     *
     * @param Money $chargeAmount
     * @return $this
     */
    public function setChargeAmount(Money $chargeAmount)
    {
        $this->values['ChargeAmount'] = $chargeAmount;
        return $this;
    }
}
