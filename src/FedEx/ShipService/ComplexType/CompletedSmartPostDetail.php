<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Provides reply information specific to SmartPost shipments.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class CompletedSmartPostDetail
    extends AbstractComplexType
{
    protected $_name = 'CompletedSmartPostDetail';

    /**
     * Identifies the carrier that will pick up the SmartPost shipment.
     *
     * @param CarrierCodeType $PickUpCarrier
     * return CompletedSmartPostDetail
     */
    public function setPickUpCarrier(\FedEx\ShipService\SimpleType\CarrierCodeType $pickUpCarrier)
    {
        $this->PickUpCarrier = $pickUpCarrier;
        return $this;
    }
    
    /**
     * Indicates whether the shipment is deemed to be machineable, based on dimensions, weight, and packaging.
     *
     * @param boolean $Machinable
     * return CompletedSmartPostDetail
     */
    public function setMachinable($machinable)
    {
        $this->Machinable = $machinable;
        return $this;
    }
    

    
}