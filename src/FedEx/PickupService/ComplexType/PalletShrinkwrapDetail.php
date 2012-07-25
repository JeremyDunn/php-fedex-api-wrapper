<?php
namespace FedEx\PickupService\ComplexType;

/**
 * Specifications for pallets to be shrinkwrapped as part of a Freight shipment.
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class PalletShrinkwrapDetail
    extends AbstractComplexType
{
    protected $_name = 'PalletShrinkwrapDetail';

    /**
     * Number of pallets to be shrinkwrapped.
     *
     * @param positiveInteger $PalletCount
     * return PalletShrinkwrapDetail
     */
    public function setPalletCount($palletCount)
    {
        $this->PalletCount = $palletCount;
        return $this;
    }
    

    
}