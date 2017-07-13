<?php
namespace FedEx\PickupService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specification for sorting and/or segregating performed on shipment.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 *
 * @property int $PieceCount
 * @property Weight $Weight

 */
class SortAndSegregateDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'SortAndSegregateDetail';

    /**
     * Number of pieces or packages to be sorted/segregated
     *
     * @param int $pieceCount
     * @return $this
     */
    public function setPieceCount($pieceCount)
    {
        $this->values['PieceCount'] = $pieceCount;
        return $this;
    }

    /**
     * Total weight of pieces or packages to be sorted/segregated
     *
     * @param Weight $weight
     * @return $this
     */
    public function setWeight(Weight $weight)
    {
        $this->values['Weight'] = $weight;
        return $this;
    }
}
