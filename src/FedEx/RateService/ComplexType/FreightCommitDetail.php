<?php
namespace FedEx\RateService\ComplexType;

/**
 * Information about the Freight Service Centers associated with this shipment.
 *
 * @version     $Revision: 2 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information
 */
class FreightCommitDetail
    extends AbstractComplexType
{
    protected $_name = 'FreightCommitDetail';

    /**
     * Information about the origin Freight Service Center.
     *
     * @param FreightServiceCenterDetail $OriginDetail
     * return FreightCommitDetail
     */
    public function setOriginDetail(FreightServiceCenterDetail $originDetail)
    {
        $this->OriginDetail = $originDetail;
        return $this;
    }
    
    /**
     * Information about the destination Freight Service Center.
     *
     * @param FreightServiceCenterDetail $DestinationDetail
     * return FreightCommitDetail
     */
    public function setDestinationDetail(FreightServiceCenterDetail $destinationDetail)
    {
        $this->DestinationDetail = $destinationDetail;
        return $this;
    }
    
    /**
     * The distance between the origin and destination FreightService Centers
     *
     * @param Distance $TotalDistance
     * return FreightCommitDetail
     */
    public function setTotalDistance(Distance $totalDistance)
    {
        $this->TotalDistance = $totalDistance;
        return $this;
    }
    

    
}