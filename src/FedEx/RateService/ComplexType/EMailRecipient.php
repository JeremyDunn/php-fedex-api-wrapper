<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Information describing the address of of the email recipient, role of the email recipient and languages that are requested to be supported.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class EMailRecipient
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'EMailRecipient';

    /**
     * EMail address of the recipient.
     *
     * @param string $emailAddress
     * @return EMailRecipient
     */
    public function setEmailAddress($emailAddress)
    {
        $this->EmailAddress = $emailAddress;
        return $this;
    }
    
    /**
     * Returns EMail address of the recipient.
     *
     * @return string
     */
    public function getEmailAddress()
    {
        return $this->EmailAddress;
    }
    
    /**
     * The relationship that the customer has to the pending shipment.
     *
     * @param \FedEx\RateService\SimpleType\AccessorRoleType|string $role
     * @return EMailRecipient
     */
    public function setRole($role)
    {
        $this->Role = $role;
        return $this;
    }
    
    /**
     * Returns The relationship that the customer has to the pending shipment.
     *
     * @return \FedEx\RateService\SimpleType\AccessorRoleType|string
     */
    public function getRole()
    {
        return $this->Role;
    }
    
    /**
     * Specifies how the email notification for the pending shipment need to be processed.
     *
     * @param EmailOptionsRequested $optionsRequested
     * @return EMailRecipient
     */
    public function setOptionsRequested(EmailOptionsRequested $optionsRequested)
    {
        $this->OptionsRequested = $optionsRequested;
        return $this;
    }
    
    /**
     * Returns Specifies how the email notification for the pending shipment need to be processed.
     *
     * @return EmailOptionsRequested
     */
    public function getOptionsRequested()
    {
        return $this->OptionsRequested;
    }
    
    /**
     * Localization and language details specified by the recipient of the EMail.
     *
     * @param Localization $localization
     * @return EMailRecipient
     */
    public function setLocalization(Localization $localization)
    {
        $this->Localization = $localization;
        return $this;
    }
    
    /**
     * Returns Localization and language details specified by the recipient of the EMail.
     *
     * @return Localization
     */
    public function getLocalization()
    {
        return $this->Localization;
    }
    

    
}