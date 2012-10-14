<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * DeliveryOnInvoiceAcceptanceDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class DeliveryOnInvoiceAcceptanceDetail
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'DeliveryOnInvoiceAcceptanceDetail';

    /**
     * Set Recipient
     *
     * @param Party $recipient
     * return DeliveryOnInvoiceAcceptanceDetail
     */
    public function setRecipient(Party $recipient)
    {
        $this->Recipient = $recipient;
        return $this;
    }
    
    /**
     * Specifies the tracking id for the return, if preassigned.
     *
     * @param TrackingId $trackingId
     * return DeliveryOnInvoiceAcceptanceDetail
     */
    public function setTrackingId(TrackingId $trackingId)
    {
        $this->TrackingId = $trackingId;
        return $this;
    }
    

    
}