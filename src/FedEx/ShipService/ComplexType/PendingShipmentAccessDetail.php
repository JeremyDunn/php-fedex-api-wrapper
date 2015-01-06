<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * This information describes how and when a pending shipment may be accessed for completion.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class PendingShipmentAccessDetail
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'PendingShipmentAccessDetail';

    /**
     * Only for pending shipment type of "EMAIL"
     *
     * @param string $emailLabelUrl
     * @return PendingShipmentAccessDetail
     */
    public function setEmailLabelUrl($emailLabelUrl)
    {
        $this->EmailLabelUrl = $emailLabelUrl;
        return $this;
    }
    
    /**
     * Returns Only for pending shipment type of "EMAIL"
     *
     * @return string
     */
    public function getEmailLabelUrl()
    {
        return $this->EmailLabelUrl;
    }
    
    /**
     * Only for pending shipment type of "EMAIL"
     *
     * @param string $userId
     * @return PendingShipmentAccessDetail
     */
    public function setUserId($userId)
    {
        $this->UserId = $userId;
        return $this;
    }
    
    /**
     * Returns Only for pending shipment type of "EMAIL"
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->UserId;
    }
    
    /**
     * Only for pending shipment type of "EMAIL"
     *
     * @param string $password
     * @return PendingShipmentAccessDetail
     */
    public function setPassword($password)
    {
        $this->Password = $password;
        return $this;
    }
    
    /**
     * Returns Only for pending shipment type of "EMAIL"
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->Password;
    }
    
    /**
     * This element is currently not supported and is for the future use.
     *
     * @param dateTime $expirationTimestamp
     * @return PendingShipmentAccessDetail
     */
    public function setExpirationTimestamp($expirationTimestamp)
    {
        $this->ExpirationTimestamp = $expirationTimestamp;
        return $this;
    }
    
    /**
     * Returns This element is currently not supported and is for the future use.
     *
     * @return dateTime
     */
    public function getExpirationTimestamp()
    {
        return $this->ExpirationTimestamp;
    }
    

    
}