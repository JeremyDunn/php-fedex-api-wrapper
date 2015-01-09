<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Information about the Freight Service Centers associated with this shipment.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class FreightCommitDetail
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'FreightCommitDetail';

    /**
     * Information about the origin Freight Service Center.
     *
     * @param FreightServiceCenterDetail $originDetail
     * @return FreightCommitDetail
     */
    public function setOriginDetail(FreightServiceCenterDetail $originDetail)
    {
        $this->OriginDetail = $originDetail;
        return $this;
    }
    
    /**
     * Returns Information about the origin Freight Service Center.
     *
     * @return FreightServiceCenterDetail
     */
    public function getOriginDetail()
    {
        return $this->OriginDetail;
    }
    
    /**
     * Information about the destination Freight Service Center.
     *
     * @param FreightServiceCenterDetail $destinationDetail
     * @return FreightCommitDetail
     */
    public function setDestinationDetail(FreightServiceCenterDetail $destinationDetail)
    {
        $this->DestinationDetail = $destinationDetail;
        return $this;
    }
    
    /**
     * Returns Information about the destination Freight Service Center.
     *
     * @return FreightServiceCenterDetail
     */
    public function getDestinationDetail()
    {
        return $this->DestinationDetail;
    }
    
    /**
     * The distance between the origin and destination FreightService Centers
     *
     * @param Distance $totalDistance
     * @return FreightCommitDetail
     */
    public function setTotalDistance(Distance $totalDistance)
    {
        $this->TotalDistance = $totalDistance;
        return $this;
    }
    
    /**
     * Returns The distance between the origin and destination FreightService Centers
     *
     * @return Distance
     */
    public function getTotalDistance()
    {
        return $this->TotalDistance;
    }
    

    
}