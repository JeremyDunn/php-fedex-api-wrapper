<?php
namespace FedEx\Pickup\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specification for sorting and/or segregating performed on shipment.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class SortAndSegregateDetail
    extends AbstractComplexType
{
    protected $_name = 'SortAndSegregateDetail';

    /**
     * Number of pieces or packages to be sorted/segregated
     *
     * @param nonNegativeInteger $PieceCount
     * return SortAndSegregateDetail
     */
    public function setPieceCount($pieceCount)
    {
        $this->PieceCount = $pieceCount;
        return $this;
    }
    
    /**
     * Total weight of pieces or packages to be sorted/segregated
     *
     * @param Weight $Weight
     * return SortAndSegregateDetail
     */
    public function setWeight(Weight $weight)
    {
        $this->Weight = $weight;
        return $this;
    }
    

    
}