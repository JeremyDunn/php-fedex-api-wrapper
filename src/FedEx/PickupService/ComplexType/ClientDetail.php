<?php
namespace FedEx\PickupService\ComplexType;

/**
 * Descriptive data for the client submitting a transaction.
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class ClientDetail
    extends AbstractComplexType
{
    protected $_name = 'ClientDetail';

    /**
     * The FedEx account number associated with this transaction.
     *
     * @param string $AccountNumber
     * return ClientDetail
     */
    public function setAccountNumber($accountNumber)
    {
        $this->AccountNumber = $accountNumber;
        return $this;
    }
    
    /**
     * This number is assigned by FedEx and identifies the unique device from which the request is originating
     *
     * @param string $MeterNumber
     * return ClientDetail
     */
    public function setMeterNumber($meterNumber)
    {
        $this->MeterNumber = $meterNumber;
        return $this;
    }
    
    /**
     * 
     *
     * @param string $MeterInstance
     * return ClientDetail
     */
    public function setMeterInstance($meterInstance)
    {
        $this->MeterInstance = $meterInstance;
        return $this;
    }
    
    /**
     * Only used in transactions which require identification of the Fed Ex Office integrator.
     *
     * @param string $IntegratorId
     * return ClientDetail
     */
    public function setIntegratorId($integratorId)
    {
        $this->IntegratorId = $integratorId;
        return $this;
    }
    
    /**
     * Indicates the region from which the transaction is submitted.
     *
     * @param ExpressRegionCode $Region
     * return ClientDetail
     */
    public function setRegion(\FedEx\PickupService\SimpleType\ExpressRegionCode $region)
    {
        $this->Region = $region;
        return $this;
    }
    
    /**
     * The language to be used for human-readable Notification.localizedMessages in responses to the request containing this ClientDetail object. Different requests from the same client may contain different Localization data. (Contrast with TransactionDetail.localization, which governs data payload language/translation.)
     *
     * @param Localization $Localization
     * return ClientDetail
     */
    public function setLocalization(Localization $localization)
    {
        $this->Localization = $localization;
        return $this;
    }
    

    
}