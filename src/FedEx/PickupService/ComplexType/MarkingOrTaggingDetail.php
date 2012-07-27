<?php
namespace FedEx\Pickup\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specification for marking or tagging of pieces in shipment.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class MarkingOrTaggingDetail
    extends AbstractComplexType
{
    protected $_name = 'MarkingOrTaggingDetail';

    /**
     * Number of pieces to be marked or tagged by FedEx.
     *
     * @param positiveInteger $Count
     * return MarkingOrTaggingDetail
     */
    public function setCount($count)
    {
        $this->Count = $count;
        return $this;
    }
    

    
}