<?php
namespace FedEx\Pickup\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Descriptive data for the client submitting a transaction.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
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
     * The FedEx account number associated with this transaction.
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
     * Returns The FedEx account number associated with this transaction.
     *
     * @return string
     */
    public function getAccountNumber()
    {
        return $this->AccountNumber;
    }
    
    /**
     * This number is assigned by FedEx and identifies the unique device from which the request is originating
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
     * Returns This number is assigned by FedEx and identifies the unique device from which the request is originating
     *
     * @return string
     */
    public function getMeterNumber()
    {
        return $this->MeterNumber;
    }
    
    /**
     * Set MeterInstance
     *
     * @param string $meterInstance
     * @return ClientDetail
     */
    public function setMeterInstance($meterInstance)
    {
        $this->MeterInstance = $meterInstance;
        return $this;
    }
    
    /**
     * Returns Set MeterInstance
     *
     * @return string
     */
    public function getMeterInstance()
    {
        return $this->MeterInstance;
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
     * Indicates the region from which the transaction is submitted.
     *
     * @param \FedEx\Pickup\SimpleType\ExpressRegionCode|string $region
     * @return ClientDetail
     */
    public function setRegion($region)
    {
        $this->Region = $region;
        return $this;
    }
    
    /**
     * Returns Indicates the region from which the transaction is submitted.
     *
     * @return \FedEx\Pickup\SimpleType\ExpressRegionCode|string
     */
    public function getRegion()
    {
        return $this->Region;
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