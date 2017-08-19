<?php
namespace FedEx\OpenShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specifies details for a package containing alcohol
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  OpenShip Service
 *
 * @property \FedEx\OpenShipService\SimpleType\AlcoholRecipientType|string $RecipientType

 */
class AlcoholDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'AlcoholDetail';

    /**
     * The license type that the recipient of the alcohol package.
     *
     * @param \FedEx\OpenShipService\SimpleType\AlcoholRecipientType|string $recipientType
     * @return $this
     */
    public function setRecipientType($recipientType)
    {
        $this->values['RecipientType'] = $recipientType;
        return $this;
    }
}
