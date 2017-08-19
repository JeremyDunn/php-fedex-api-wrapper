<?php
namespace FedEx\OpenShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * ExpressFreightDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  OpenShip Service
 *
 * @property boolean $PackingListEnclosed
 * @property int $ShippersLoadAndCount
 * @property string $BookingConfirmationNumber

 */
class ExpressFreightDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ExpressFreightDetail';

    /**
     * Set PackingListEnclosed
     *
     * @param boolean $packingListEnclosed
     * @return $this
     */
    public function setPackingListEnclosed($packingListEnclosed)
    {
        $this->values['PackingListEnclosed'] = $packingListEnclosed;
        return $this;
    }

    /**
     * Set ShippersLoadAndCount
     *
     * @param int $shippersLoadAndCount
     * @return $this
     */
    public function setShippersLoadAndCount($shippersLoadAndCount)
    {
        $this->values['ShippersLoadAndCount'] = $shippersLoadAndCount;
        return $this;
    }

    /**
     * Set BookingConfirmationNumber
     *
     * @param string $bookingConfirmationNumber
     * @return $this
     */
    public function setBookingConfirmationNumber($bookingConfirmationNumber)
    {
        $this->values['BookingConfirmationNumber'] = $bookingConfirmationNumber;
        return $this;
    }
}
