<?php
namespace FedEx\OpenShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specifies the information necessary for printing the NAFTA Low Value statement on customs documentation.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  OpenShip Service
 *
 * @property \FedEx\OpenShipService\SimpleType\CustomsRoleType|string $Role

 */
class NaftaLowValueStatementDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'NaftaLowValueStatementDetail';

    /**
     * Specifies the NAFTA statement role.
     *
     * @param \FedEx\OpenShipService\SimpleType\CustomsRoleType|string $role
     * @return $this
     */
    public function setRole($role)
    {
        $this->values['Role'] = $role;
        return $this;
    }
}
