<?php
namespace FedEx\CourierDispatchService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Descriptive data regarding a FedEx freight service pickup request.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Courier Dispatch Service
 */
class CourierDispatchFreightDetail
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'CourierDispatchFreightDetail';

    /**
     * Identifies the collection of available FedEx transportation service options. Must be a valid FedEx freight service identifier.
     *
     * @param \FedEx\CourierDispatchService\SimpleType\ServiceType|string $service
     * return CourierDispatchFreightDetail
     */
    public function setService($service)
    {
        $this->Service = $service;
        return $this;
    }
    
    /**
     * Identifies the FedEx freight booking number. This element should contain numeric values only.
     *
     * @param string $bookingNumber
     * return CourierDispatchFreightDetail
     */
    public function setBookingNumber($bookingNumber)
    {
        $this->BookingNumber = $bookingNumber;
        return $this;
    }
    
    /**
     * Descriptive data detailing the length, width, and height of the freight package or shipment being picked up by FedEx.
     *
     * @param Dimensions $dimensions
     * return CourierDispatchFreightDetail
     */
    public function setDimensions(Dimensions $dimensions)
    {
        $this->Dimensions = $dimensions;
        return $this;
    }
    
    /**
     * Identifies the type of truck that is needed for FedEx to pick up the freight shipment. See TruckType for valid values.
     *
     * @param \FedEx\CourierDispatchService\SimpleType\TruckType|string $truckType
     * return CourierDispatchFreightDetail
     */
    public function setTruckType($truckType)
    {
        $this->TruckType = $truckType;
        return $this;
    }
    
    /**
     * Identifies the tailer size needed for FedEx to pick up a freight shipment. See TrailerSizeType for valid values.
     *
     * @param \FedEx\CourierDispatchService\SimpleType\TrailerSizeType|string $trailerSize
     * return CourierDispatchFreightDetail
     */
    public function setTrailerSize($trailerSize)
    {
        $this->TrailerSize = $trailerSize;
        return $this;
    }
    

    
}