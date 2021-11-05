<?php
namespace FedEx\OpenShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * UsmcaCommodityDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  OpenShip Service
 *
 * @property \FedEx\OpenShipService\SimpleType\UsmcaOriginCriterionCode|string $OriginCriterion

 */
class UsmcaCommodityDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'UsmcaCommodityDetail';

    /**
     * Set OriginCriterion
     *
     * @param \FedEx\OpenShipService\SimpleType\UsmcaOriginCriterionCode|string $originCriterion
     * @return $this
     */
    public function setOriginCriterion($originCriterion)
    {
        $this->values['OriginCriterion'] = $originCriterion;
        return $this;
    }
}
