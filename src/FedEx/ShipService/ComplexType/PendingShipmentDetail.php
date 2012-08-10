<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * This information describes the kind of pending shipment being requested.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class PendingShipmentDetail
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'PendingShipmentDetail';

    /**
     * Identifies the type of FedEx pending shipment
     *
     * @param \FedEx\ShipService\SimpleType\PendingShipmentType|string $type
     * return PendingShipmentDetail
     */
    public function setType($type)
    {
        $this->Type = $type;
        return $this;
    }
    
    /**
     * Date after which the pending shipment will no longer be available for completion.
     *
     * @param date $expirationDate
     * return PendingShipmentDetail
     */
    public function setExpirationDate($expirationDate)
    {
        $this->ExpirationDate = $expirationDate;
        return $this;
    }
    
    /**
     * Only used with type of EMAIL.
     *
     * @param EMailLabelDetail $emailLabelDetail
     * return PendingShipmentDetail
     */
    public function setEmailLabelDetail(EMailLabelDetail $emailLabelDetail)
    {
        $this->EmailLabelDetail = $emailLabelDetail;
        return $this;
    }
    

    
}