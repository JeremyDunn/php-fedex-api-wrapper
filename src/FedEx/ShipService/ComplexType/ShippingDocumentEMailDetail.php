<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specifies how to e-mail shipping documents.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class ShippingDocumentEMailDetail
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'ShippingDocumentEMailDetail';

    /**
     * Provides the roles and email addresses for e-mail recipients.
     *
     * @param ShippingDocumentEMailRecipient[] $eMailRecipients
     * return ShippingDocumentEMailDetail
     */
    public function setEMailRecipients(array $eMailRecipients)
    {
        $this->EMailRecipients = $eMailRecipients;
        return $this;
    }
    
    /**
     * Identifies the convention by which documents are to be grouped as e-mail attachments.
     *
     * @param \FedEx\ShipService\SimpleType\ShippingDocumentEMailGroupingType|string $grouping
     * return ShippingDocumentEMailDetail
     */
    public function setGrouping($grouping)
    {
        $this->Grouping = $grouping;
        return $this;
    }
    

    
}