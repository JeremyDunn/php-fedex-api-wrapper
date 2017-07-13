<?php
namespace FedEx\UploadDocumentService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * The descriptive data regarding the results of the submitted transaction.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Upload Document Service
 *
 * @property \FedEx\UploadDocumentService\SimpleType\NotificationSeverityType|string $Severity
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
     * The severity of this notification. This can indicate success or failure or some other information about the request such as errors or notes.
     *
     * @param \FedEx\UploadDocumentService\SimpleType\NotificationSeverityType|string $severity
     * @return $this
     */
    public function setSeverity($severity)
    {
        $this->values['Severity'] = $severity;
        return $this;
    }

    /**
     * Indicates the source of the notification. Combined with Code, it uniqely identifies this message.
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
     * A code that represents this notification. Combined with Source, it uniqely identifies this message.
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
     * Text that explains this notification.
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
     * A translated message. The translation is based on the Localization element of the ClientDetail element of the request. Not currently supported.
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
