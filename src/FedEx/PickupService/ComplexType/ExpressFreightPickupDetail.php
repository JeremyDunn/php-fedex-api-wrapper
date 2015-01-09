<?php
namespace FedEx\Pickup\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Descriptive data regarding an express freight service pickup request.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class ExpressFreightPickupDetail
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'ExpressFreightPickupDetail';

    /**
     * Identifies the collection of available FedEx transportation service options. Must be a valid FedEx freight service identifier.
     *
     * @param \FedEx\Pickup\SimpleType\ServiceType|string $service
     * @return ExpressFreightPickupDetail
     */
    public function setService($service)
    {
        $this->Service = $service;
        return $this;
    }
    
    /**
     * Returns Identifies the collection of available FedEx transportation service options. Must be a valid FedEx freight service identifier.
     *
     * @return \FedEx\Pickup\SimpleType\ServiceType|string
     */
    public function getService()
    {
        return $this->Service;
    }
    
    /**
     * Identifies the FedEx freight booking number. This element should contain numeric values only.
     *
     * @param string $bookingNumber
     * @return ExpressFreightPickupDetail
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
     * @return ExpressFreightPickupDetail
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
     * @param \FedEx\Pickup\SimpleType\TruckType|string $truckType
     * @return ExpressFreightPickupDetail
     */
    public function setTruckType($truckType)
    {
        $this->TruckType = $truckType;
        return $this;
    }
    
    /**
     * Returns Identifies the type of truck that is needed for FedEx to pick up the freight shipment. See TruckType for valid values.
     *
     * @return \FedEx\Pickup\SimpleType\TruckType|string
     */
    public function getTruckType()
    {
        return $this->TruckType;
    }
    
    /**
     * Identifies the tailer size needed for FedEx to pick up a freight shipment. See TrailerSizeType for valid values.
     *
     * @param \FedEx\Pickup\SimpleType\TrailerSizeType|string $trailerSize
     * @return ExpressFreightPickupDetail
     */
    public function setTrailerSize($trailerSize)
    {
        $this->TrailerSize = $trailerSize;
        return $this;
    }
    
    /**
     * Returns Identifies the tailer size needed for FedEx to pick up a freight shipment. See TrailerSizeType for valid values.
     *
     * @return \FedEx\Pickup\SimpleType\TrailerSizeType|string
     */
    public function getTrailerSize()
    {
        return $this->TrailerSize;
    }
    

    
}