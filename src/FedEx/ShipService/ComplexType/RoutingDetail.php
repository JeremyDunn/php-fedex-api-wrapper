<?php
namespace FedEx\ShipService\ComplexType;

/**
 * Information about the routing, origin, destination and delivery of a shipment.
 *
 * @version     $Revision: 2 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class RoutingDetail
    extends AbstractComplexType
{
    protected $_name = 'RoutingDetail';

    /**
     * The routing information detail for this shipment.
     *
     * @param ShipmentRoutingDetail $ShipmentRoutingDetail
     * return RoutingDetail
     */
    public function setShipmentRoutingDetail(ShipmentRoutingDetail $shipmentRoutingDetail)
    {
        $this->ShipmentRoutingDetail = $shipmentRoutingDetail;
        return $this;
    }
    
    /**
     * The tracking number information and the data to form the Astra barcode for the label.
     *
     * @param array[RoutingAstraDetail] $AstraDetails
     * return RoutingDetail
     */
    public function setAstraDetails(array $astraDetails)
    {
        $this->AstraDetails = $astraDetails;
        return $this;
    }
    

    
}