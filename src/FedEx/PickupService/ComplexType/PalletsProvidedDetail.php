<?php
namespace FedEx\PickupService\ComplexType;

/**
 * Specifications for pallets to be provided on Freight shipment.
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
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