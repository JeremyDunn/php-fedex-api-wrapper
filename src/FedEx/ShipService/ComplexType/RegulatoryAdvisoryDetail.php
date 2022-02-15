<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * RegulatoryAdvisoryDetail
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 *
 * @property RegulatoryProhibition[] $Prohibitions

 */
class RegulatoryAdvisoryDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'RegulatoryAdvisoryDetail';

    /**
     * Set Prohibitions
     *
     * @param RegulatoryProhibition[] $prohibitions
     * @return $this
     */
    public function setProhibitions(array $prohibitions)
    {
        $this->values['Prohibitions'] = $prohibitions;
        return $this;
    }
}
