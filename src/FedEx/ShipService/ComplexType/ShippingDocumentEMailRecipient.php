<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specifies an individual recipient of e-mailed shipping document(s).
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class ShippingDocumentEMailRecipient
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'ShippingDocumentEMailRecipient';

    /**
     * Identifies the relationship of this recipient in the shipment.
     *
     * @param \FedEx\ShipService\SimpleType\EMailNotificationRecipientType|string $recipientType
     * return ShippingDocumentEMailRecipient
     */
    public function setRecipientType($recipientType)
    {
        $this->RecipientType = $recipientType;
        return $this;
    }
    
    /**
     * Address to which the document is to be sent.
     *
     * @param string $address
     * return ShippingDocumentEMailRecipient
     */
    public function setAddress($address)
    {
        $this->Address = $address;
        return $this;
    }
    

    
}