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

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'PalletsProvidedDetail';

    /**
     * Number of pallets to be provided.
     *
     * @param positiveInteger $palletCount
     * @return PalletsProvidedDetail
     */
    public function setPalletCount($palletCount)
    {
        $this->PalletCount = $palletCount;
        return $this;
    }
    
    /**
     * Returns Number of pallets to be provided.
     *
     * @return positiveInteger
     */
    public function getPalletCount()
    {
        return $this->PalletCount;
    }
    

    
}