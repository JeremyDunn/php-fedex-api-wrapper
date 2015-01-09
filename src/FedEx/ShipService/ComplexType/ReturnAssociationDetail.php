<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * ReturnAssociationDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class ReturnAssociationDetail
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'ReturnAssociationDetail';

    /**
     * Specifies the tracking number of the master associated with the return shipment.
     *
     * @param string $trackingNumber
     * @return ReturnAssociationDetail
     */
    public function setTrackingNumber($trackingNumber)
    {
        $this->TrackingNumber = $trackingNumber;
        return $this;
    }
    
    /**
     * Returns Specifies the tracking number of the master associated with the return shipment.
     *
     * @return string
     */
    public function getTrackingNumber()
    {
        return $this->TrackingNumber;
    }
    
    /**
     * Set ShipDate
     *
     * @param date $shipDate
     * @return ReturnAssociationDetail
     */
    public function setShipDate($shipDate)
    {
        $this->ShipDate = $shipDate;
        return $this;
    }
    
    /**
     * Returns Set ShipDate
     *
     * @return date
     */
    public function getShipDate()
    {
        return $this->ShipDate;
    }
    

    
}