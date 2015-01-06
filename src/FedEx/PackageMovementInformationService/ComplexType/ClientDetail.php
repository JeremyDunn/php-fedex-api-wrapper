<?php
namespace FedEx\PackageMovementInformationService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Descriptive data for the client submitting a transaction.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information Service
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