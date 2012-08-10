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

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'CompletedSmartPostDetail';

    /**
     * Identifies the carrier that will pick up the SmartPost shipment.
     *
     * @param \FedEx\ShipService\SimpleType\CarrierCodeType|string $pickUpCarrier
     * return CompletedSmartPostDetail
     */
    public function setPickUpCarrier($pickUpCarrier)
    {
        $this->PickUpCarrier = $pickUpCarrier;
        return $this;
    }
    
    /**
     * Indicates whether the shipment is deemed to be machineable, based on dimensions, weight, and packaging.
     *
     * @param boolean $machinable
     * return CompletedSmartPostDetail
     */
    public function setMachinable($machinable)
    {
        $this->Machinable = $machinable;
        return $this;
    }
    

    
}