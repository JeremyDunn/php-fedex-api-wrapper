<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Information about the Freight Service Centers associated with this shipment.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 *
 * @property FreightServiceCenterDetail $OriginDetail
 * @property FreightServiceCenterDetail $DestinationDetail
 * @property Distance $TotalDistance

 */
class FreightCommitDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'FreightCommitDetail';

    /**
     * Information about the origin Freight Service Center.
     *
     * @param FreightServiceCenterDetail $originDetail
     * @return $this
     */
    public function setOriginDetail(FreightServiceCenterDetail $originDetail)
    {
        $this->values['OriginDetail'] = $originDetail;
        return $this;
    }

    /**
     * Information about the destination Freight Service Center.
     *
     * @param FreightServiceCenterDetail $destinationDetail
     * @return $this
     */
    public function setDestinationDetail(FreightServiceCenterDetail $destinationDetail)
    {
        $this->values['DestinationDetail'] = $destinationDetail;
        return $this;
    }

    /**
     * The distance between the origin and destination FreightService Centers
     *
     * @param Distance $totalDistance
     * @return $this
     */
    public function setTotalDistance(Distance $totalDistance)
    {
        $this->values['TotalDistance'] = $totalDistance;
        return $this;
    }
}
