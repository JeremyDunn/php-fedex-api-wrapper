<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * InternationalTrafficInArmsRegulationsDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class InternationalTrafficInArmsRegulationsDetail
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'InternationalTrafficInArmsRegulationsDetail';

    /**
     * Set LicenseOrExemptionNumber
     *
     * @param string $licenseOrExemptionNumber
     * return InternationalTrafficInArmsRegulationsDetail
     */
    public function setLicenseOrExemptionNumber($licenseOrExemptionNumber)
    {
        $this->LicenseOrExemptionNumber = $licenseOrExemptionNumber;
        return $this;
    }
    

    
}