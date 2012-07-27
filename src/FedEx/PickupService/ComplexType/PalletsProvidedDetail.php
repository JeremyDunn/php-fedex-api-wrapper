<?php
namespace FedEx\Pickup\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specifications for pallets to be provided on Freight shipment.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class PalletsProvidedDetail
    extends AbstractComplexType
{
    protected $_name = 'PalletsProvidedDetail';

    /**
     * Number of pallets to be provided.
     *
     * @param positiveInteger $PalletCount
     * return PalletsProvidedDetail
     */
    public function setPalletCount($palletCount)
    {
        $this->PalletCount = $palletCount;
        return $this;
    }
    

    
}