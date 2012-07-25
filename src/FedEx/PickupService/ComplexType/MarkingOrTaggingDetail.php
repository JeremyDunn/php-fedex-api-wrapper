<?php
namespace FedEx\PickupService\ComplexType;

/**
 * Specification for marking or tagging of pieces in shipment.
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
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