<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * ExpressFreightDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 *
 * @property boolean $PackingListEnclosed
 * @property int $ShippersLoadAndCount
 * @property string $BookingConfirmationNumber
 * @property boolean $ReferenceLabelRequested
 * @property ExpressFreightDetailContact $BeforeDeliveryContact
 * @property ExpressFreightDetailContact $UndeliverableContact

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

    /**
     * Set ReferenceLabelRequested
     *
     * @param boolean $referenceLabelRequested
     * @return $this
     */
    public function setReferenceLabelRequested($referenceLabelRequested)
    {
        $this->values['ReferenceLabelRequested'] = $referenceLabelRequested;
        return $this;
    }

    /**
     * Set BeforeDeliveryContact
     *
     * @param ExpressFreightDetailContact $beforeDeliveryContact
     * @return $this
     */
    public function setBeforeDeliveryContact(ExpressFreightDetailContact $beforeDeliveryContact)
    {
        $this->values['BeforeDeliveryContact'] = $beforeDeliveryContact;
        return $this;
    }

    /**
     * Set UndeliverableContact
     *
     * @param ExpressFreightDetailContact $undeliverableContact
     * @return $this
     */
    public function setUndeliverableContact(ExpressFreightDetailContact $undeliverableContact)
    {
        $this->values['UndeliverableContact'] = $undeliverableContact;
        return $this;
    }
}
