<?php
namespace FedEx\AddressValidationService\ComplexType;

/**
 * The descriptive data regarding the results of the submitted transaction.
 *
 * @version     $Revision: 2 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Address Validation Service
 */
class Notification
    extends AbstractComplexType
{
    protected $_name = 'Notification';

    /**
     * The severity of this notification. this can indicate success or failure or some other information about the request such as errors or notes.
     *
     * @param NotificationSeverityType $Severity
     * return Notification
     */
    public function setSeverity(\FedEx\AddressValidationService\SimpleType\NotificationSeverityType $severity)
    {
        $this->Severity = $severity;
        return $this;
    }
    
    /**
     * Indicates the source of the notification. Combined with Code, it uniqely identifies this message.
     *
     * @param string $Source
     * return Notification
     */
    public function setSource($source)
    {
        $this->Source = $source;
        return $this;
    }
    
    /**
     * A code that represents this notification. Combined with Source, it uniqely identifies this message.
     *
     * @param string $Code
     * return Notification
     */
    public function setCode($code)
    {
        $this->Code = $code;
        return $this;
    }
    
    /**
     * Text that explains this notification.
     *
     * @param string $Message
     * return Notification
     */
    public function setMessage($message)
    {
        $this->Message = $message;
        return $this;
    }
    
    /**
     * A translated message. The translation is based on the Localization element of the ClientDetail element of the request.
     *
     * @param string $LocalizedMessage
     * return Notification
     */
    public function setLocalizedMessage($localizedMessage)
    {
        $this->LocalizedMessage = $localizedMessage;
        return $this;
    }
    
    /**
     * If the message used parameter replacement to be specific as to the meaning of the message, this is the list of parameters that were used.
     *
     * @param array[NotificationParameter] $MessageParameters
     * return Notification
     */
    public function setMessageParameters(array $messageParameters)
    {
        $this->MessageParameters = $messageParameters;
        return $this;
    }
    

    
}