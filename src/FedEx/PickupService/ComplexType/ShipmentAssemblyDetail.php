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
    protected $_name = 'ShipmentAssemblyDetail';

    /**
     * Number of pieces or packages to be assembled
     *
     * @param nonNegativeInteger $PieceCount
     * return ShipmentAssemblyDetail
     */
    public function setPieceCount($pieceCount)
    {
        $this->PieceCount = $pieceCount;
        return $this;
    }
    
    /**
     * Total weight of pieces or packages to be assembled
     *
     * @param Weight $Weight
     * return ShipmentAssemblyDetail
     */
    public function setWeight(Weight $weight)
    {
        $this->Weight = $weight;
        return $this;
    }
    

    
}