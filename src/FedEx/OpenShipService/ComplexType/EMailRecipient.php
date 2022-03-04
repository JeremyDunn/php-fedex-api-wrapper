<?php
namespace FedEx\OpenShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Information describing the address of of the email recipient, role of the email recipient and languages that are requested to be supported.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  OpenShip Service
 *
 * @property string $EmailAddress
 * @property \FedEx\OpenShipService\SimpleType\AccessorRoleType|string $Role
 * @property EmailOptionsRequested $OptionsRequested
 * @property Localization $Localization

 */
class EMailRecipient extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'EMailRecipient';

    /**
     * EMail address of the recipient.
     *
     * @param string $emailAddress
     * @return $this
     */
    public function setEmailAddress($emailAddress)
    {
        $this->values['EmailAddress'] = $emailAddress;
        return $this;
    }

    /**
     * The relationship that the customer has to the pending shipment.
     *
     * @param \FedEx\OpenShipService\SimpleType\AccessorRoleType|string $role
     * @return $this
     */
    public function setRole($role)
    {
        $this->values['Role'] = $role;
        return $this;
    }

    /**
     * Specifies how the email notification for the pending shipment need to be processed.
     *
     * @param EmailOptionsRequested $optionsRequested
     * @return $this
     */
    public function setOptionsRequested(EmailOptionsRequested $optionsRequested)
    {
        $this->values['OptionsRequested'] = $optionsRequested;
        return $this;
    }

    /**
     * Localization and language details specified by the recipient of the EMail.
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
