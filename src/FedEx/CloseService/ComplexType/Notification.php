<?php
namespace FedEx\CloseService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * 
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Close Service
 */
class Notification
    extends AbstractComplexType
{
    protected $_name = 'Notification';

    /**
     * 
     *
     * @param NotificationSeverityType $Severity
     * return Notification
     */
    public function setSeverity(\FedEx\CloseService\SimpleType\NotificationSeverityType $severity)
    {
        $this->Severity = $severity;
        return $this;
    }
    
    /**
     * 
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
     * 
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
     * 
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
     * 
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
     * A collection of name/value pairs that provide specific data to help the client determine the nature of an error (or warning, etc.) witout having to parse the message string.
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