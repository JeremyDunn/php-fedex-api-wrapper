<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * The descriptive data regarding the result of the submitted transaction.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
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
     * The severity of this notification. This can indicate success or failure or some other information about the request. The values that can be returned are SUCCESS - Your transaction succeeded with no other applicable information. NOTE - Additional information that may be of interest to you about your transaction. WARNING - Additional information that you need to know about your transaction that you may need to take action on. ERROR - Information about an error that occurred while processing your transaction. FAILURE - FedEx was unable to process your transaction at this time due to a system failure. Please try again later
     *
     * @param \FedEx\ShipService\SimpleType\NotificationSeverityType|string $severity
     * return Notification
     */
    public function setSeverity($severity)
    {
        $this->Severity = $severity;
        return $this;
    }
    
    /**
     * Indicates the source of this notification. Combined with the Code it uniquely identifies this notification
     *
     * @param string $source
     * return Notification
     */
    public function setSource($source)
    {
        $this->Source = $source;
        return $this;
    }
    
    /**
     * A code that represents this notification. Combined with the Source it uniquely identifies this notification.
     *
     * @param string $code
     * return Notification
     */
    public function setCode($code)
    {
        $this->Code = $code;
        return $this;
    }
    
    /**
     * Human-readable text that explains this notification.
     *
     * @param string $message
     * return Notification
     */
    public function setMessage($message)
    {
        $this->Message = $message;
        return $this;
    }
    
    /**
     * The translated message. The language and locale specified in the ClientDetail. Localization are used to determine the representation. Currently only supported in a TrackReply.
     *
     * @param string $localizedMessage
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
     * @param NotificationParameter[] $messageParameters
     * return Notification
     */
    public function setMessageParameters(array $messageParameters)
    {
        $this->MessageParameters = $messageParameters;
        return $this;
    }
    

    
}