<?php
namespace FedEx\CourierDispatchService\ComplexType;

/**
 * Descriptive data regarding a FedEx freight service pickup request.
 *
 * @version     $Revision: 2 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Courier Dispatch Service
 */
class CourierDispatchFreightDetail
    extends AbstractComplexType
{
    protected $_name = 'CourierDispatchFreightDetail';

    /**
     * Identifies the collection of available FedEx transportation service options. Must be a valid FedEx freight service identifier.
     *
     * @param ServiceType $Service
     * return CourierDispatchFreightDetail
     */
    public function setService(\FedEx\CourierDispatchService\SimpleType\ServiceType $service)
    {
        $this->Service = $service;
        return $this;
    }
    
    /**
     * Identifies the FedEx freight booking number. This element should contain numeric values only.
     *
     * @param string $BookingNumber
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
     * @param Dimensions $Dimensions
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
     * @param TruckType $TruckType
     * return CourierDispatchFreightDetail
     */
    public function setTruckType(\FedEx\CourierDispatchService\SimpleType\TruckType $truckType)
    {
        $this->TruckType = $truckType;
        return $this;
    }
    
    /**
     * Identifies the tailer size needed for FedEx to pick up a freight shipment. See TrailerSizeType for valid values.
     *
     * @param TrailerSizeType $TrailerSize
     * return CourierDispatchFreightDetail
     */
    public function setTrailerSize(\FedEx\CourierDispatchService\SimpleType\TrailerSizeType $trailerSize)
    {
        $this->TrailerSize = $trailerSize;
        return $this;
    }
    

    
}