<?php
namespace FedEx\CloseService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specifies an individual recipient of e-mailed shipping document(s).
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Close Service
 */
class ShippingDocumentEMailRecipient
    extends AbstractComplexType
{
    protected $_name = 'ShippingDocumentEMailRecipient';

    /**
     * Identifies the relationship of this recipient in the shipment.
     *
     * @param EMailNotificationRecipientType $RecipientType
     * return ShippingDocumentEMailRecipient
     */
    public function setRecipientType(\FedEx\CloseService\SimpleType\EMailNotificationRecipientType $recipientType)
    {
        $this->RecipientType = $recipientType;
        return $this;
    }
    
    /**
     * Address to which the document is to be sent.
     *
     * @param string $Address
     * return ShippingDocumentEMailRecipient
     */
    public function setAddress($address)
    {
        $this->Address = $address;
        return $this;
    }
    

    
}