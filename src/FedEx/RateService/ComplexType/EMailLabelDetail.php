<?php
namespace FedEx\RateService\ComplexType;

/**
 * Specific information about the delivery of the email and options for the shipment.
 *
 * @version     $Revision: 2 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information
 */
class EMailLabelDetail
    extends AbstractComplexType
{
    protected $_name = 'EMailLabelDetail';

    /**
     * Email address to send the URL to.
     *
     * @param string $NotificationEMailAddress
     * return EMailLabelDetail
     */
    public function setNotificationEMailAddress($notificationEMailAddress)
    {
        $this->NotificationEMailAddress = $notificationEMailAddress;
        return $this;
    }
    
    /**
     * A message to be inserted into the email.
     *
     * @param string $NotificationMessage
     * return EMailLabelDetail
     */
    public function setNotificationMessage($notificationMessage)
    {
        $this->NotificationMessage = $notificationMessage;
        return $this;
    }
    

    
}