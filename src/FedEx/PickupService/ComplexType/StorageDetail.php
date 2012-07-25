<?php
namespace FedEx\PickupService\ComplexType;

/**
 * Specification for storage provided for shipment.
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
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