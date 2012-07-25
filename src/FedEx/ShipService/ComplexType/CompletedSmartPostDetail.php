<?php
namespace FedEx\ShipService\ComplexType;

/**
 * Provides reply information specific to SmartPost shipments.
 *
 * @version     $Revision: 4 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
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