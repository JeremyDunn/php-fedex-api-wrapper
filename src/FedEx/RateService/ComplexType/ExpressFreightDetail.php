<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Details specific to an Express freight shipment.
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
     * Indicates whether or nor a packing list is enclosed.
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
     * Total shipment pieces.
                ie. 3 boxes and 3 pallets of 100 pieces each = Shippers Load and Count of 303.
                Applicable to International Priority Freight and International Economy Freight.
                Values must be in the range of 1 - 99999
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
     * Required for International Freight shipping. Values must be 8- 12 characters in length.
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
     * Currently not supported.
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
     * Currently not supported.
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
     * Currently not supported.
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
