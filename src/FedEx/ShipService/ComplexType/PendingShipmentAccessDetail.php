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
    protected $_name = 'PendingShipmentAccessDetail';

    /**
     * Only for pending shipment type of "EMAIL"
     *
     * @param string $EmailLabelUrl
     * return PendingShipmentAccessDetail
     */
    public function setEmailLabelUrl($emailLabelUrl)
    {
        $this->EmailLabelUrl = $emailLabelUrl;
        return $this;
    }
    
    /**
     * Only for pending shipment type of "EMAIL"
     *
     * @param string $UserId
     * return PendingShipmentAccessDetail
     */
    public function setUserId($userId)
    {
        $this->UserId = $userId;
        return $this;
    }
    
    /**
     * Only for pending shipment type of "EMAIL"
     *
     * @param string $Password
     * return PendingShipmentAccessDetail
     */
    public function setPassword($password)
    {
        $this->Password = $password;
        return $this;
    }
    
    /**
     * This element is currently not supported and is for the future use.
     *
     * @param dateTime $ExpirationTimestamp
     * return PendingShipmentAccessDetail
     */
    public function setExpirationTimestamp($expirationTimestamp)
    {
        $this->ExpirationTimestamp = $expirationTimestamp;
        return $this;
    }
    

    
}