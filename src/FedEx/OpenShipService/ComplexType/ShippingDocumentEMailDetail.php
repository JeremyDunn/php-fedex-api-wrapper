<?php
namespace FedEx\OpenShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specifies how to e-mail shipping documents.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  OpenShip Service
 *
 * @property ShippingDocumentEMailRecipient[] $EMailRecipients
 * @property \FedEx\OpenShipService\SimpleType\ShippingDocumentEMailGroupingType|string $Grouping
 * @property Localization $Localization

 */
class ShippingDocumentEMailDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShippingDocumentEMailDetail';

    /**
     * Provides the roles and email addresses for e-mail recipients.
     *
     * @param ShippingDocumentEMailRecipient[] $eMailRecipients
     * @return $this
     */
    public function setEMailRecipients(array $eMailRecipients)
    {
        $this->values['EMailRecipients'] = $eMailRecipients;
        return $this;
    }

    /**
     * Identifies the convention by which documents are to be grouped as e-mail attachments.
     *
     * @param \FedEx\OpenShipService\SimpleType\ShippingDocumentEMailGroupingType|string $grouping
     * @return $this
     */
    public function setGrouping($grouping)
    {
        $this->values['Grouping'] = $grouping;
        return $this;
    }

    /**
     * Specifies the language in which the email containing the document is requested to be composed.
     *
     * @param Localization $localization
     * @return $this
     */
    public function setLocalization(Localization $localization)
    {
        $this->values['Localization'] = $localization;
        return $this;
    }
}
