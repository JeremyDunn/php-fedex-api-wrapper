<?php
namespace FedEx\AddressValidationService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * The descriptive data regarding the results of the submitted transaction.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Address Validation Service
 */
class Notification
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'Notification';

    /**
     * The severity of this notification. this can indicate success or failure or some other information about the request such as errors or notes.
     *
     * @param \FedEx\AddressValidationService\SimpleType\NotificationSeverityType|string $severity
     * @return Notification
     */
    public function setSeverity($severity)
    {
        $this->Severity = $severity;
        return $this;
    }
    
    /**
     * Returns The severity of this notification. this can indicate success or failure or some other information about the request such as errors or notes.
     *
     * @return \FedEx\AddressValidationService\SimpleType\NotificationSeverityType|string
     */
    public function getSeverity()
    {
        return $this->Severity;
    }
    
    /**
     * Indicates the source of the notification. Combined with Code, it uniqely identifies this message.
     *
     * @param string $source
     * @return Notification
     */
    public function setSource($source)
    {
        $this->Source = $source;
        return $this;
    }
    
    /**
     * Returns Indicates the source of the notification. Combined with Code, it uniqely identifies this message.
     *
     * @return string
     */
    public function getSource()
    {
        return $this->Source;
    }
    
    /**
     * A code that represents this notification. Combined with Source, it uniqely identifies this message.
     *
     * @param string $code
     * @return Notification
     */
    public function setCode($code)
    {
        $this->Code = $code;
        return $this;
    }
    
    /**
     * Returns A code that represents this notification. Combined with Source, it uniqely identifies this message.
     *
     * @return string
     */
    public function getCode()
    {
        return $this->Code;
    }
    
    /**
     * Text that explains this notification.
     *
     * @param string $message
     * @return Notification
     */
    public function setMessage($message)
    {
        $this->Message = $message;
        return $this;
    }
    
    /**
     * Returns Text that explains this notification.
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->Message;
    }
    
    /**
     * A translated message. The translation is based on the Localization element of the ClientDetail element of the request.
     *
     * @param string $localizedMessage
     * @return Notification
     */
    public function setLocalizedMessage($localizedMessage)
    {
        $this->LocalizedMessage = $localizedMessage;
        return $this;
    }
    
    /**
     * Returns A translated message. The translation is based on the Localization element of the ClientDetail element of the request.
     *
     * @return string
     */
    public function getLocalizedMessage()
    {
        return $this->LocalizedMessage;
    }
    
    /**
     * If the message used parameter replacement to be specific as to the meaning of the message, this is the list of parameters that were used.
     *
     * @param NotificationParameter[] $messageParameters
     * @return Notification
     */
    public function setMessageParameters(array $messageParameters)
    {
        $this->MessageParameters = $messageParameters;
        return $this;
    }
    
    /**
     * Returns If the message used parameter replacement to be specific as to the meaning of the message, this is the list of parameters that were used.
     *
     * @return NotificationParameter[]
     */
    public function getMessageParameters()
    {
        return $this->MessageParameters;
    }
    

    
}