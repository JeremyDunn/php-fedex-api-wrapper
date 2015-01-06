<?php
namespace FedEx\CloseService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Notification
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Close Service
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
     * Set Severity
     *
     * @param \FedEx\CloseService\SimpleType\NotificationSeverityType|string $severity
     * @return Notification
     */
    public function setSeverity($severity)
    {
        $this->Severity = $severity;
        return $this;
    }
    
    /**
     * Returns Set Severity
     *
     * @return \FedEx\CloseService\SimpleType\NotificationSeverityType|string
     */
    public function getSeverity()
    {
        return $this->Severity;
    }
    
    /**
     * Set Source
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
     * Returns Set Source
     *
     * @return string
     */
    public function getSource()
    {
        return $this->Source;
    }
    
    /**
     * Set Code
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
     * Returns Set Code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->Code;
    }
    
    /**
     * Set Message
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
     * Returns Set Message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->Message;
    }
    
    /**
     * Set LocalizedMessage
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
     * Returns Set LocalizedMessage
     *
     * @return string
     */
    public function getLocalizedMessage()
    {
        return $this->LocalizedMessage;
    }
    
    /**
     * A collection of name/value pairs that provide specific data to help the client determine the nature of an error (or warning, etc.) witout having to parse the message string.
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
     * Returns A collection of name/value pairs that provide specific data to help the client determine the nature of an error (or warning, etc.) witout having to parse the message string.
     *
     * @return NotificationParameter[]
     */
    public function getMessageParameters()
    {
        return $this->MessageParameters;
    }
    

    
}