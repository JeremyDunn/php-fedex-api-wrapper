<?php
namespace FedEx\InFlightShipmentService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Descriptive data for the client submitting a transaction.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  In Flight Shipment Service
 *
 * @property string $AccountNumber
 * @property string $GroundShipperNumber
 * @property string $MeterNumber
 * @property string $MasterMeterNumber
 * @property string $MeterInstance
 * @property string $CompanyId
 * @property string $SoftwareId
 * @property string $SoftwareRelease
 * @property string $ClientProductId
 * @property string $ClientProductVersion
 * @property string $MiddlewareProductId
 * @property string $MiddlewareProductVersion
 * @property string $IntegratorId
 * @property \FedEx\InFlightShipmentService\SimpleType\ExpressRegionCode|string $Region
 * @property \FedEx\InFlightShipmentService\SimpleType\AutoConfigurationType|string $AutoConfigurationType
 * @property string $CspCredentialKey
 * @property string $UserCredentialKey
 * @property InitiativeManifest $InitiativeManifest
 * @property Localization $Localization

 */
class ClientDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ClientDetail';

    /**
     * The FedEx account number associated with this transaction.
     *
     * @param string $accountNumber
     * @return $this
     */
    public function setAccountNumber($accountNumber)
    {
        $this->values['AccountNumber'] = $accountNumber;
        return $this;
    }

    /**
     * The FedEx Ground account number.
     *
     * @param string $groundShipperNumber
     * @return $this
     */
    public function setGroundShipperNumber($groundShipperNumber)
    {
        $this->values['GroundShipperNumber'] = $groundShipperNumber;
        return $this;
    }

    /**
     * This number is assigned by FedEx and identifies the unique device from which the request is originating
     *
     * @param string $meterNumber
     * @return $this
     */
    public function setMeterNumber($meterNumber)
    {
        $this->values['MeterNumber'] = $meterNumber;
        return $this;
    }

    /**
     * FedEx internal use only.
     *
     * @param string $masterMeterNumber
     * @return $this
     */
    public function setMasterMeterNumber($masterMeterNumber)
    {
        $this->values['MasterMeterNumber'] = $masterMeterNumber;
        return $this;
    }

    /**
     * Set MeterInstance
     *
     * @param string $meterInstance
     * @return $this
     */
    public function setMeterInstance($meterInstance)
    {
        $this->values['MeterInstance'] = $meterInstance;
        return $this;
    }

    /**
     * FedEx internal use only. The PassKey company identifier.
     *
     * @param string $companyId
     * @return $this
     */
    public function setCompanyId($companyId)
    {
        $this->values['CompanyId'] = $companyId;
        return $this;
    }

    /**
     * Client software component (e.g. "CAFE", "INET", "WBUS", etc.)
     *
     * @param string $softwareId
     * @return $this
     */
    public function setSoftwareId($softwareId)
    {
        $this->values['SoftwareId'] = $softwareId;
        return $this;
    }

    /**
     * Client software component version/revision (e.g. "1800", "2630", etc.)
     *
     * @param string $softwareRelease
     * @return $this
     */
    public function setSoftwareRelease($softwareRelease)
    {
        $this->values['SoftwareRelease'] = $softwareRelease;
        return $this;
    }

    /**
     * A FedEx assigned identifier for a third party software product used by customer to do business with FedEx. Such as a Compatible Solution Provider's product.
     *
     * @param string $clientProductId
     * @return $this
     */
    public function setClientProductId($clientProductId)
    {
        $this->values['ClientProductId'] = $clientProductId;
        return $this;
    }

    /**
     * The version of the third party product.
     *
     * @param string $clientProductVersion
     * @return $this
     */
    public function setClientProductVersion($clientProductVersion)
    {
        $this->values['ClientProductVersion'] = $clientProductVersion;
        return $this;
    }

    /**
     * FedEx internal use only.
     *
     * @param string $middlewareProductId
     * @return $this
     */
    public function setMiddlewareProductId($middlewareProductId)
    {
        $this->values['MiddlewareProductId'] = $middlewareProductId;
        return $this;
    }

    /**
     * FedEx internal use only.
     *
     * @param string $middlewareProductVersion
     * @return $this
     */
    public function setMiddlewareProductVersion($middlewareProductVersion)
    {
        $this->values['MiddlewareProductVersion'] = $middlewareProductVersion;
        return $this;
    }

    /**
     * Only used in transactions which require identification of the FedEx Office integrator.
     *
     * @param string $integratorId
     * @return $this
     */
    public function setIntegratorId($integratorId)
    {
        $this->values['IntegratorId'] = $integratorId;
        return $this;
    }

    /**
     * Indicates the region from which the transaction is submitted.
     *
     * @param \FedEx\InFlightShipmentService\SimpleType\ExpressRegionCode|string $region
     * @return $this
     */
    public function setRegion($region)
    {
        $this->values['Region'] = $region;
        return $this;
    }

    /**
     * Used for off-line uploads only.
     *
     * @param \FedEx\InFlightShipmentService\SimpleType\AutoConfigurationType|string $autoConfigurationType
     * @return $this
     */
    public function setAutoConfigurationType($autoConfigurationType)
    {
        $this->values['AutoConfigurationType'] = $autoConfigurationType;
        return $this;
    }

    /**
     * Set CspCredentialKey
     *
     * @param string $cspCredentialKey
     * @return $this
     */
    public function setCspCredentialKey($cspCredentialKey)
    {
        $this->values['CspCredentialKey'] = $cspCredentialKey;
        return $this;
    }

    /**
     * Set UserCredentialKey
     *
     * @param string $userCredentialKey
     * @return $this
     */
    public function setUserCredentialKey($userCredentialKey)
    {
        $this->values['UserCredentialKey'] = $userCredentialKey;
        return $this;
    }

    /**
     * Set InitiativeManifest
     *
     * @param InitiativeManifest $initiativeManifest
     * @return $this
     */
    public function setInitiativeManifest(InitiativeManifest $initiativeManifest)
    {
        $this->values['InitiativeManifest'] = $initiativeManifest;
        return $this;
    }

    /**
     * The language to be used for human-readable Notification.localizedMessages in responses to the request containing this ClientDetail object. Different requests from the same client may contain different Localization data. (Contrast with TransactionDetail.localization, which governs data payload language/translation.)
     *
     * @param Localization $localization
     * @return $this
     */
    public function setLocalization(Localization $localization)
    {
        $this->values['Localization'] = $localization;
        return $this;
    }
}
