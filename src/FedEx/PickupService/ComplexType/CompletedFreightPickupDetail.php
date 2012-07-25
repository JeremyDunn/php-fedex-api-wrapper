<?php
namespace FedEx\PickupService\ComplexType;

/**
 * Data resulting from the processing of an LTL Freight pickup request.
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class CompletedFreightPickupDetail
    extends AbstractComplexType
{
    protected $_name = 'CompletedFreightPickupDetail';

    /**
     * Describes the origin service center handling the pickup.
     *
     * @param FreightServiceCenterDetail $Origin
     * return CompletedFreightPickupDetail
     */
    public function setOrigin(FreightServiceCenterDetail $origin)
    {
        $this->Origin = $origin;
        return $this;
    }
    
    /**
     * Describes the results for each line item in the original request.
     *
     * @param array[CompletedFreightPickupLineItem] $LineItems
     * return CompletedFreightPickupDetail
     */
    public function setLineItems(array $lineItems)
    {
        $this->LineItems = $lineItems;
        return $this;
    }
    
    /**
     * Total number of pieces from all line items from request.
     *
     * @param nonNegativeInteger $TotalPieces
     * return CompletedFreightPickupDetail
     */
    public function setTotalPieces($totalPieces)
    {
        $this->TotalPieces = $totalPieces;
        return $this;
    }
    
    /**
     * Total weight from all line items from request.
     *
     * @param Weight $TotalWeight
     * return CompletedFreightPickupDetail
     */
    public function setTotalWeight(Weight $totalWeight)
    {
        $this->TotalWeight = $totalWeight;
        return $this;
    }
    
    /**
     * Total handling units from all line items from request.
     *
     * @param nonNegativeInteger $TotalHandlingUnits
     * return CompletedFreightPickupDetail
     */
    public function setTotalHandlingUnits($totalHandlingUnits)
    {
        $this->TotalHandlingUnits = $totalHandlingUnits;
        return $this;
    }
    
    /**
     * Resulting status of pickup.
     *
     * @param PickupEventType $Status
     * return CompletedFreightPickupDetail
     */
    public function setStatus(\FedEx\PickupService\SimpleType\PickupEventType $status)
    {
        $this->Status = $status;
        return $this;
    }
    

    
}