<?php
namespace FedEx\CloseService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Notification
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
     * Set Severity
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
     * Set Source
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
     * Set Code
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
     * Set Message
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
     * Set LocalizedMessage
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
     * A collection of name/value pairs that provide specific data to help the client determine the nature of an error (or warning, etc.) witout having to parse the message string.
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
