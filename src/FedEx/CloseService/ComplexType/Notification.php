<?php
namespace FedEx\CloseService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * The descriptive data regarding the result of the submitted transaction.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Close Service
 *
 * @property \FedEx\CloseService\SimpleType\NotificationSeverityType|string $Severity
 * @property string $Source
 * @property string $Code
 * @property string $Message
 * @property string $LocalizedMessage
 * @property NotificationParameter[] $MessageParameters

 */
class Notification extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'Notification';

    /**
     * The severity of this notification. This can indicate success or failure or some other information about the request. The values that can be returned are SUCCESS - Your transaction succeeded with no other applicable information. NOTE - Additional information that may be of interest to you about your transaction. WARNING - Additional information that you need to know about your transaction that you may need to take action on. ERROR - Information about an error that occurred while processing your transaction. FAILURE - FedEx was unable to process your transaction at this time due to a system failure. Please try again later
     *
     * @param \FedEx\CloseService\SimpleType\NotificationSeverityType|string $severity
     * @return $this
     */
    public function setSeverity($severity)
    {
        $this->values['Severity'] = $severity;
        return $this;
    }

    /**
     * Indicates the source of this notification. Combined with the Code it uniquely identifies this notification
     *
     * @param string $source
     * @return $this
     */
    public function setSource($source)
    {
        $this->values['Source'] = $source;
        return $this;
    }

    /**
     * A code that represents this notification. Combined with the Source it uniquely identifies this notification.
     *
     * @param string $code
     * @return $this
     */
    public function setCode($code)
    {
        $this->values['Code'] = $code;
        return $this;
    }

    /**
     * Human-readable text that explains this notification.
     *
     * @param string $message
     * @return $this
     */
    public function setMessage($message)
    {
        $this->values['Message'] = $message;
        return $this;
    }

    /**
     * The translated message. The language and locale specified in the ClientDetail. Localization are used to determine the representation. Currently only supported in a TrackReply.
     *
     * @param string $localizedMessage
     * @return $this
     */
    public function setLocalizedMessage($localizedMessage)
    {
        $this->values['LocalizedMessage'] = $localizedMessage;
        return $this;
    }

    /**
     * A collection of name/value pairs that provide specific data to help the client determine the nature of an error (or warning, etc.) without having to parse the message string.
     *
     * @param NotificationParameter[] $messageParameters
     * @return $this
     */
    public function setMessageParameters(array $messageParameters)
    {
        $this->values['MessageParameters'] = $messageParameters;
        return $this;
    }
}
