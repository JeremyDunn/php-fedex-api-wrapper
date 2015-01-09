<?php
namespace FedEx\CloseService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Descriptive data for the client submitting a transaction.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Close Service
 */
class ClientDetail
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'ClientDetail';

    /**
     * Set AccountNumber
     *
     * @param string $accountNumber
     * @return ClientDetail
     */
    public function setAccountNumber($accountNumber)
    {
        $this->AccountNumber = $accountNumber;
        return $this;
    }
    
    /**
     * Returns Set AccountNumber
     *
     * @return string
     */
    public function getAccountNumber()
    {
        return $this->AccountNumber;
    }
    
    /**
     * Set MeterNumber
     *
     * @param string $meterNumber
     * @return ClientDetail
     */
    public function setMeterNumber($meterNumber)
    {
        $this->MeterNumber = $meterNumber;
        return $this;
    }
    
    /**
     * Returns Set MeterNumber
     *
     * @return string
     */
    public function getMeterNumber()
    {
        return $this->MeterNumber;
    }
    
    /**
     * Only used in transactions which require identification of the Fed Ex Office integrator.
     *
     * @param string $integratorId
     * @return ClientDetail
     */
    public function setIntegratorId($integratorId)
    {
        $this->IntegratorId = $integratorId;
        return $this;
    }
    
    /**
     * Returns Only used in transactions which require identification of the Fed Ex Office integrator.
     *
     * @return string
     */
    public function getIntegratorId()
    {
        return $this->IntegratorId;
    }
    
    /**
     * The language to be used for human-readable Notification.localizedMessages in responses to the request containing this ClientDetail object. Different requests from the same client may contain different Localization data. (Contrast with TransactionDetail.localization, which governs data payload language/translation.)
     *
     * @param Localization $localization
     * @return ClientDetail
     */
    public function setLocalization(Localization $localization)
    {
        $this->Localization = $localization;
        return $this;
    }
    
    /**
     * Returns The language to be used for human-readable Notification.localizedMessages in responses to the request containing this ClientDetail object. Different requests from the same client may contain different Localization data. (Contrast with TransactionDetail.localization, which governs data payload language/translation.)
     *
     * @return Localization
     */
    public function getLocalization()
    {
        return $this->Localization;
    }
    

    
}