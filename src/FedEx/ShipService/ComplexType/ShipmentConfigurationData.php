<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specifies data structures that may be re-used multiple times with s single shipment.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class ShipmentConfigurationData
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'ShipmentConfigurationData';

    /**
     * Specifies the data that is common to dangerous goods packages in the shipment. This is populated when the shipment contains packages with identical dangerous goods commodities.
     *
     * @param DangerousGoodsDetail[] $dangerousGoodsPackageConfigurations
     * return ShipmentConfigurationData
     */
    public function setDangerousGoodsPackageConfigurations(array $dangerousGoodsPackageConfigurations)
    {
        $this->DangerousGoodsPackageConfigurations = $dangerousGoodsPackageConfigurations;
        return $this;
    }
    

    
}