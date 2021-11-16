<?php
namespace FedEx\UploadDocumentService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * ServiceDescription
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Upload Document Service
 *
 * @property string $ServiceId
 * @property string $ServiceType
 * @property string $Code
 * @property ProductName[] $Names
 * @property string[] $OperatingOrgCodes
 * @property string $ServiceCategory
 * @property string $Description
 * @property string $AstraDescription

 */
class ServiceDescription extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ServiceDescription';

    /**
     * FOR FEDEX INTERNAL USE ONLY: Designates the service ID.
     *
     * @param string $serviceId
     * @return $this
     */
    public function setServiceId($serviceId)
    {
        $this->values['ServiceId'] = $serviceId;
        return $this;
    }

    /**
     * Set ServiceType
     *
     * @param string $serviceType
     * @return $this
     */
    public function setServiceType($serviceType)
    {
        $this->values['ServiceType'] = $serviceType;
        return $this;
    }

    /**
     * Set Code
     *
     * @param string $code
     * @return $this
     */
    public function setCode($code)
    {
        $this->values['Code'] = $code;
        return $this;
    }

    /**
     * Branded, translated, and/or localized names for this service.
     *
     * @param ProductName[] $names
     * @return $this
     */
    public function setNames(array $names)
    {
        $this->values['Names'] = $names;
        return $this;
    }

    /**
     * FOR FEDEX INTERNAL USE ONLY: The operating org code in a service.
     *
     * @param string $operatingOrgCodes
     * @return $this
     */
    public function setOperatingOrgCodes($operatingOrgCodes)
    {
        $this->values['OperatingOrgCodes'] = $operatingOrgCodes;
        return $this;
    }

    /**
     * FOR FEDEX INTERNAL USE ONLY: This is tied to the Product EFS interface definition which will currently contain the values of 'parcel' or 'freight'.
     *
     * @param string $serviceCategory
     * @return $this
     */
    public function setServiceCategory($serviceCategory)
    {
        $this->values['ServiceCategory'] = $serviceCategory;
        return $this;
    }

    /**
     * Set Description
     *
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->values['Description'] = $description;
        return $this;
    }

    /**
     * Set AstraDescription
     *
     * @param string $astraDescription
     * @return $this
     */
    public function setAstraDescription($astraDescription)
    {
        $this->values['AstraDescription'] = $astraDescription;
        return $this;
    }
}
