<?php
namespace FedEx\CloseService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Descriptive data for the client submitting a transaction.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Close Service
 *
 * @property string $AccountNumber
 * @property string $MeterNumber
 * @property string $IntegratorId
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
     * Set AccountNumber
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
     * Set MeterNumber
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
     * Only used in transactions which require identification of the Fed Ex Office integrator.
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
