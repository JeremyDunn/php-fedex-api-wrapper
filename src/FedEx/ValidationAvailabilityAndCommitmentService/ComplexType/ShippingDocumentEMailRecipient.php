<?php
namespace FedEx\ValidationAvailabilityAndCommitmentService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specifies an individual recipient of e-mailed shipping document(s).
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Validation Availability And Commitment Service Service
 *
 * @property \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\EMailNotificationRecipientType|string $RecipientType
 * @property string $Address

 */
class ShippingDocumentEMailRecipient extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShippingDocumentEMailRecipient';

    /**
     * Identifies the relationship of this recipient in the shipment.
     *
     * @param \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\EMailNotificationRecipientType|string $recipientType
     * @return $this
     */
    public function setRecipientType($recipientType)
    {
        $this->values['RecipientType'] = $recipientType;
        return $this;
    }

    /**
     * Address to which the document is to be sent.
     *
     * @param string $address
     * @return $this
     */
    public function setAddress($address)
    {
        $this->values['Address'] = $address;
        return $this;
    }
}
