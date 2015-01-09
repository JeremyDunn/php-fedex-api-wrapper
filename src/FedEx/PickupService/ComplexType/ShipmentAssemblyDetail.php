<?php
namespace FedEx\Pickup\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specification for assembly performed on shipment.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class ShipmentAssemblyDetail
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'ShipmentAssemblyDetail';

    /**
     * Number of pieces or packages to be assembled
     *
     * @param nonNegativeInteger $pieceCount
     * @return ShipmentAssemblyDetail
     */
    public function setPieceCount($pieceCount)
    {
        $this->PieceCount = $pieceCount;
        return $this;
    }
    
    /**
     * Returns Number of pieces or packages to be assembled
     *
     * @return nonNegativeInteger
     */
    public function getPieceCount()
    {
        return $this->PieceCount;
    }
    
    /**
     * Total weight of pieces or packages to be assembled
     *
     * @param Weight $weight
     * @return ShipmentAssemblyDetail
     */
    public function setWeight(Weight $weight)
    {
        $this->Weight = $weight;
        return $this;
    }
    
    /**
     * Returns Total weight of pieces or packages to be assembled
     *
     * @return Weight
     */
    public function getWeight()
    {
        return $this->Weight;
    }
    

    
}