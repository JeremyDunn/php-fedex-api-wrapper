<?php
namespace FedEx\Pickup\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specification for storage provided for shipment.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class StorageDetail
    extends AbstractComplexType
{
    protected $_name = 'StorageDetail';

    /**
     * Total time shipment is held by carrier.
     *
     * @param duration $Duration
     * return StorageDetail
     */
    public function setDuration(duration $duration)
    {
        $this->Duration = $duration;
        return $this;
    }
    

    
}