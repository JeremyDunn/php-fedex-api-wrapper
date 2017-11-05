<?php
namespace FedEx\TrackService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * TrackingDocumentEmailDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information Service
 *
 * @property EMailDetail[] $Recipients
 * @property EMailDetail $Sender
 * @property Localization $Localization
 * @property string $PersonalMessage

 */
class TrackingDocumentEmailDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'TrackingDocumentEmailDetail';

    /**
     * Specifies the recipients of the email.
     *
     * @param EMailDetail[] $recipients
     * @return $this
     */
    public function setRecipients(array $recipients)
    {
        $this->values['Recipients'] = $recipients;
        return $this;
    }

    /**
     * Identifies the person initiating the email.
     *
     * @param EMailDetail $sender
     * @return $this
     */
    public function setSender(EMailDetail $sender)
    {
        $this->values['Sender'] = $sender;
        return $this;
    }

    /**
     * This is the localization of the email content.
     *
     * @param Localization $localization
     * @return $this
     */
    public function setLocalization(Localization $localization)
    {
        $this->values['Localization'] = $localization;
        return $this;
    }

    /**
     * A message included in the body of the email.
     *
     * @param string $personalMessage
     * @return $this
     */
    public function setPersonalMessage($personalMessage)
    {
        $this->values['PersonalMessage'] = $personalMessage;
        return $this;
    }
}
