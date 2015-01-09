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
     * @return CourierDispatchFreightDetail
     */
    public function setService($service)
    {
        $this->Service = $service;
        return $this;
    }
    
    /**
     * Returns Identifies the collection of available FedEx transportation service options. Must be a valid FedEx freight service identifier.
     *
     * @return \FedEx\CourierDispatchService\SimpleType\ServiceType|string
     */
    public function getService()
    {
        return $this->Service;
    }
    
    /**
     * Identifies the FedEx freight booking number. This element should contain numeric values only.
     *
     * @param string $bookingNumber
     * @return CourierDispatchFreightDetail
     */
    public function setBookingNumber($bookingNumber)
    {
        $this->BookingNumber = $bookingNumber;
        return $this;
    }
    
    /**
     * Returns Identifies the FedEx freight booking number. This element should contain numeric values only.
     *
     * @return string
     */
    public function getBookingNumber()
    {
        return $this->BookingNumber;
    }
    
    /**
     * Descriptive data detailing the length, width, and height of the freight package or shipment being picked up by FedEx.
     *
     * @param Dimensions $dimensions
     * @return CourierDispatchFreightDetail
     */
    public function setDimensions(Dimensions $dimensions)
    {
        $this->Dimensions = $dimensions;
        return $this;
    }
    
    /**
     * Returns Descriptive data detailing the length, width, and height of the freight package or shipment being picked up by FedEx.
     *
     * @return Dimensions
     */
    public function getDimensions()
    {
        return $this->Dimensions;
    }
    
    /**
     * Identifies the type of truck that is needed for FedEx to pick up the freight shipment. See TruckType for valid values.
     *
     * @param \FedEx\CourierDispatchService\SimpleType\TruckType|string $truckType
     * @return CourierDispatchFreightDetail
     */
    public function setTruckType($truckType)
    {
        $this->TruckType = $truckType;
        return $this;
    }
    
    /**
     * Returns Identifies the type of truck that is needed for FedEx to pick up the freight shipment. See TruckType for valid values.
     *
     * @return \FedEx\CourierDispatchService\SimpleType\TruckType|string
     */
    public function getTruckType()
    {
        return $this->TruckType;
    }
    
    /**
     * Identifies the tailer size needed for FedEx to pick up a freight shipment. See TrailerSizeType for valid values.
     *
     * @param \FedEx\CourierDispatchService\SimpleType\TrailerSizeType|string $trailerSize
     * @return CourierDispatchFreightDetail
     */
    public function setTrailerSize($trailerSize)
    {
        $this->TrailerSize = $trailerSize;
        return $this;
    }
    
    /**
     * Returns Identifies the tailer size needed for FedEx to pick up a freight shipment. See TrailerSizeType for valid values.
     *
     * @return \FedEx\CourierDispatchService\SimpleType\TrailerSizeType|string
     */
    public function getTrailerSize()
    {
        return $this->TrailerSize;
    }
    

    
}