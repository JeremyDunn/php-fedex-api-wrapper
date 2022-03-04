<?php
namespace FedEx\PickupService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * PickupHistoryServiceSummary
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 *
 * @property string $Service
 * @property Weight $TotalWeight
 * @property int $TotalLineItems
 * @property int $TotalHandlingUnits
 * @property int $TotalPieces

 */
class PickupHistoryServiceSummary extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'PickupHistoryServiceSummary';

    /**
     * Set Service
     *
     * @param string $service
     * @return $this
     */
    public function setService($service)
    {
        $this->values['Service'] = $service;
        return $this;
    }

    /**
     * Set TotalWeight
     *
     * @param Weight $totalWeight
     * @return $this
     */
    public function setTotalWeight(Weight $totalWeight)
    {
        $this->values['TotalWeight'] = $totalWeight;
        return $this;
    }

    /**
     * Set TotalLineItems
     *
     * @param int $totalLineItems
     * @return $this
     */
    public function setTotalLineItems($totalLineItems)
    {
        $this->values['TotalLineItems'] = $totalLineItems;
        return $this;
    }

    /**
     * Set TotalHandlingUnits
     *
     * @param int $totalHandlingUnits
     * @return $this
     */
    public function setTotalHandlingUnits($totalHandlingUnits)
    {
        $this->values['TotalHandlingUnits'] = $totalHandlingUnits;
        return $this;
    }

    /**
     * Set TotalPieces
     *
     * @param int $totalPieces
     * @return $this
     */
    public function setTotalPieces($totalPieces)
    {
        $this->values['TotalPieces'] = $totalPieces;
        return $this;
    }
}
