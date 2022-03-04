<?php
namespace FedEx\PickupService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specifications for pallets to be provided on Freight shipment.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 *
 * @property int $PalletCount

 */
class PalletsProvidedDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'PalletsProvidedDetail';

    /**
     * Number of pallets to be provided.
     *
     * @param int $palletCount
     * @return $this
     */
    public function setPalletCount($palletCount)
    {
        $this->values['PalletCount'] = $palletCount;
        return $this;
    }
}
