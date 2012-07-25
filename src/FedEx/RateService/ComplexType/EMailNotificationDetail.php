<?php
namespace FedEx\RateService\ComplexType;

/**
 * Information describing email notifications that will be sent in relation to events that occur during package movement
 *
 * @version     $Revision: 4 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information
 */
class EMailNotificationDetail
    extends AbstractComplexType
{
    protected $_name = 'EMailNotificationDetail';

    /**
     * A message that will be included in the email notifications
     *
     * @param string $PersonalMessage
     * return EMailNotificationDetail
     */
    public function setPersonalMessage($personalMessage)
    {
        $this->PersonalMessage = $personalMessage;
        return $this;
    }
    
    /**
     * Information describing the destination of the email, format of the email and events to be notified on
     *
     * @param array[EMailNotificationRecipient] $Recipients
     * return EMailNotificationDetail
     */
    public function setRecipients(array $recipients)
    {
        $this->Recipients = $recipients;
        return $this;
    }
    

    
}