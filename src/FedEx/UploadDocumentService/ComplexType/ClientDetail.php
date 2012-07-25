<?php
namespace FedEx\UploadDocumentService\ComplexType;

/**
 * Descriptive data for the client submitting a transaction.
 *
 * @version     $Revision: 2 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Upload Document Service
 */
class ClientDetail
    extends AbstractComplexType
{
    protected $_name = 'ClientDetail';

    /**
     * The FedEx account number assigned to the customer initiating the request.
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
     * Identifies the unique client device submitting the request. This number is assigned by FedEx and identifies the unique device from which the request is originating.
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
     * Only used in transactions which require identification of the FedEx Office integrator.
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