<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Computed shipment level hazardous commodity information.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class CompletedHazardousShipmentDetail
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'CompletedHazardousShipmentDetail';

    /**
     * Set HazardousSummaryDetail
     *
     * @param CompletedHazardousSummaryDetail $hazardousSummaryDetail
     * @return CompletedHazardousShipmentDetail
     */
    public function setHazardousSummaryDetail(CompletedHazardousSummaryDetail $hazardousSummaryDetail)
    {
        $this->HazardousSummaryDetail = $hazardousSummaryDetail;
        return $this;
    }
    
    /**
     * Returns Set HazardousSummaryDetail
     *
     * @return CompletedHazardousSummaryDetail
     */
    public function getHazardousSummaryDetail()
    {
        return $this->HazardousSummaryDetail;
    }
    
    /**
     * Set DryIceDetail
     *
     * @param ShipmentDryIceDetail $dryIceDetail
     * @return CompletedHazardousShipmentDetail
     */
    public function setDryIceDetail(ShipmentDryIceDetail $dryIceDetail)
    {
        $this->DryIceDetail = $dryIceDetail;
        return $this;
    }
    
    /**
     * Returns Set DryIceDetail
     *
     * @return ShipmentDryIceDetail
     */
    public function getDryIceDetail()
    {
        return $this->DryIceDetail;
    }
    

    
}