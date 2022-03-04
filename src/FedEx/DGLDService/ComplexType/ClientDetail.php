<?php
namespace FedEx\DGLDService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Descriptive data for the client submitting a transaction.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  List Dangerous Goods Service
 *
 * @property string $AccountNumber
 * @property string $MeterNumber
 * @property string $MeterInstance
 * @property string $IntegratorId
 * @property \FedEx\DGLDService\SimpleType\ExpressRegionCode|string $Region
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
     * @param \FedEx\DGLDService\SimpleType\ExpressRegionCode|string $region
     * @return $this
     */
    public function setRegion($region)
    {
        $this->values['Region'] = $region;
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
