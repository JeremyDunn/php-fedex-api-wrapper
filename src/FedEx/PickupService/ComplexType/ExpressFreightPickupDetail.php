<?php
namespace FedEx\PickupService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * ExpressFreightPickupDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 *
 * @property \FedEx\PickupService\SimpleType\ServiceType|string $Service
 * @property string $BookingNumber
 * @property Dimensions $Dimensions
 * @property \FedEx\PickupService\SimpleType\TruckType|string $TruckType
 * @property \FedEx\PickupService\SimpleType\TrailerSizeType|string $TrailerSize

 */
class ExpressFreightPickupDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ExpressFreightPickupDetail';

    /**
     * Set Service
     *
     * @param \FedEx\PickupService\SimpleType\ServiceType|string $service
     * @return $this
     */
    public function setService($service)
    {
        $this->values['Service'] = $service;
        return $this;
    }

    /**
     * Set BookingNumber
     *
     * @param string $bookingNumber
     * @return $this
     */
    public function setBookingNumber($bookingNumber)
    {
        $this->values['BookingNumber'] = $bookingNumber;
        return $this;
    }

    /**
     * Set Dimensions
     *
     * @param Dimensions $dimensions
     * @return $this
     */
    public function setDimensions(Dimensions $dimensions)
    {
        $this->values['Dimensions'] = $dimensions;
        return $this;
    }

    /**
     * Set TruckType
     *
     * @param \FedEx\PickupService\SimpleType\TruckType|string $truckType
     * @return $this
     */
    public function setTruckType($truckType)
    {
        $this->values['TruckType'] = $truckType;
        return $this;
    }

    /**
     * Set TrailerSize
     *
     * @param \FedEx\PickupService\SimpleType\TrailerSizeType|string $trailerSize
     * @return $this
     */
    public function setTrailerSize($trailerSize)
    {
        $this->values['TrailerSize'] = $trailerSize;
        return $this;
    }
}
