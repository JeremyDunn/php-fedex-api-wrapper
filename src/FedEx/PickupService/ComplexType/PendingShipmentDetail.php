<?php
namespace FedEx\PickupService\ComplexType;

/**
 * This information describes the kind of pending shipment being requested.
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class PendingShipmentDetail
    extends AbstractComplexType
{
    protected $_name = 'PendingShipmentDetail';

    /**
     * Identifies the type of FedEx pending shipment
     *
     * @param PendingShipmentType $Type
     * return PendingShipmentDetail
     */
    public function setType(\FedEx\PickupService\SimpleType\PendingShipmentType $type)
    {
        $this->Type = $type;
        return $this;
    }
    
    /**
     * Date after which the pending shipment will no longer be available for completion.
     *
     * @param date $ExpirationDate
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
     * @param EMailLabelDetail $EmailLabelDetail
     * return PendingShipmentDetail
     */
    public function setEmailLabelDetail(EMailLabelDetail $emailLabelDetail)
    {
        $this->EmailLabelDetail = $emailLabelDetail;
        return $this;
    }
    

    
}