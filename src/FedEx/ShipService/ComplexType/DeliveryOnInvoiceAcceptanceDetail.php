<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * DeliveryOnInvoiceAcceptanceDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 *
 * @property Party $Recipient
 * @property TrackingId $TrackingId

 */
class DeliveryOnInvoiceAcceptanceDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'DeliveryOnInvoiceAcceptanceDetail';

    /**
     * Set Recipient
     *
     * @param Party $recipient
     * @return $this
     */
    public function setRecipient(Party $recipient)
    {
        $this->values['Recipient'] = $recipient;
        return $this;
    }

    /**
     * Specifies the tracking id for the return, if preassigned.
     *
     * @param TrackingId $trackingId
     * @return $this
     */
    public function setTrackingId(TrackingId $trackingId)
    {
        $this->values['TrackingId'] = $trackingId;
        return $this;
    }
}
