<?php
namespace FedEx\Pickup\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Data resulting from the processing of an LTL Freight pickup request.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class CompletedFreightPickupDetail
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'CompletedFreightPickupDetail';

    /**
     * Describes the origin service center handling the pickup.
     *
     * @param FreightServiceCenterDetail $origin
     * @return CompletedFreightPickupDetail
     */
    public function setOrigin(FreightServiceCenterDetail $origin)
    {
        $this->Origin = $origin;
        return $this;
    }
    
    /**
     * Returns Describes the origin service center handling the pickup.
     *
     * @return FreightServiceCenterDetail
     */
    public function getOrigin()
    {
        return $this->Origin;
    }
    
    /**
     * Describes the results for each line item in the original request.
     *
     * @param CompletedFreightPickupLineItem[] $lineItems
     * @return CompletedFreightPickupDetail
     */
    public function setLineItems(array $lineItems)
    {
        $this->LineItems = $lineItems;
        return $this;
    }
    
    /**
     * Returns Describes the results for each line item in the original request.
     *
     * @return CompletedFreightPickupLineItem[]
     */
    public function getLineItems()
    {
        return $this->LineItems;
    }
    
    /**
     * Total number of pieces from all line items from request.
     *
     * @param nonNegativeInteger $totalPieces
     * @return CompletedFreightPickupDetail
     */
    public function setTotalPieces($totalPieces)
    {
        $this->TotalPieces = $totalPieces;
        return $this;
    }
    
    /**
     * Returns Total number of pieces from all line items from request.
     *
     * @return nonNegativeInteger
     */
    public function getTotalPieces()
    {
        return $this->TotalPieces;
    }
    
    /**
     * Total weight from all line items from request.
     *
     * @param Weight $totalWeight
     * @return CompletedFreightPickupDetail
     */
    public function setTotalWeight(Weight $totalWeight)
    {
        $this->TotalWeight = $totalWeight;
        return $this;
    }
    
    /**
     * Returns Total weight from all line items from request.
     *
     * @return Weight
     */
    public function getTotalWeight()
    {
        return $this->TotalWeight;
    }
    
    /**
     * Total handling units from all line items from request.
     *
     * @param nonNegativeInteger $totalHandlingUnits
     * @return CompletedFreightPickupDetail
     */
    public function setTotalHandlingUnits($totalHandlingUnits)
    {
        $this->TotalHandlingUnits = $totalHandlingUnits;
        return $this;
    }
    
    /**
     * Returns Total handling units from all line items from request.
     *
     * @return nonNegativeInteger
     */
    public function getTotalHandlingUnits()
    {
        return $this->TotalHandlingUnits;
    }
    
    /**
     * Resulting status of pickup.
     *
     * @param \FedEx\Pickup\SimpleType\PickupEventType|string $status
     * @return CompletedFreightPickupDetail
     */
    public function setStatus($status)
    {
        $this->Status = $status;
        return $this;
    }
    
    /**
     * Returns Resulting status of pickup.
     *
     * @return \FedEx\Pickup\SimpleType\PickupEventType|string
     */
    public function getStatus()
    {
        return $this->Status;
    }
    

    
}