<?php
namespace FedEx\OpenShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * InternationalTrafficInArmsRegulationsDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  OpenShip Service
 *
 * @property string $LicenseOrExemptionNumber

 */
class InternationalTrafficInArmsRegulationsDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'InternationalTrafficInArmsRegulationsDetail';

    /**
     * Set LicenseOrExemptionNumber
     *
     * @param string $licenseOrExemptionNumber
     * @return $this
     */
    public function setLicenseOrExemptionNumber($licenseOrExemptionNumber)
    {
        $this->values['LicenseOrExemptionNumber'] = $licenseOrExemptionNumber;
        return $this;
    }
}
