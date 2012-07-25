<?php
namespace FedEx\RateService\ComplexType;

/**
 * Descriptive data sent to FedEx by a customer in order to rate a package/shipment.
 *
 * @version     $Revision: 2 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information
 */
class RateRequest
    extends AbstractComplexType
{
    protected $_name = 'RateRequest';

    /**
     * Descriptive data to be used in authentication of the sender's identity (and right to use FedEx web services).
     *
     * @param WebAuthenticationDetail $WebAuthenticationDetail
     * return RateRequest
     */
    public function setWebAuthenticationDetail(WebAuthenticationDetail $webAuthenticationDetail)
    {
        $this->WebAuthenticationDetail = $webAuthenticationDetail;
        return $this;
    }
    
    /**
     * Descriptive data identifying the client submitting the transaction.
     *
     * @param ClientDetail $ClientDetail
     * return RateRequest
     */
    public function setClientDetail(ClientDetail $clientDetail)
    {
        $this->ClientDetail = $clientDetail;
        return $this;
    }
    
    /**
     * Descriptive data for this customer transaction. The TransactionDetail from the request is echoed back to the caller in the corresponding reply.
     *
     * @param TransactionDetail $TransactionDetail
     * return RateRequest
     */
    public function setTransactionDetail(TransactionDetail $transactionDetail)
    {
        $this->TransactionDetail = $transactionDetail;
        return $this;
    }
    
    /**
     * Identifies the version/level of a service operation expected by a caller (in each request) and performed by the callee (in each reply).
     *
     * @param VersionId $Version
     * return RateRequest
     */
    public function setVersion(VersionId $version)
    {
        $this->Version = $version;
        return $this;
    }
    
    /**
     * Allows the caller to specify that the transit time and commit data are to be returned in the reply.
     *
     * @param boolean $ReturnTransitAndCommit
     * return RateRequest
     */
    public function setReturnTransitAndCommit($returnTransitAndCommit)
    {
        $this->ReturnTransitAndCommit = $returnTransitAndCommit;
        return $this;
    }
    
    /**
     * Candidate carriers for rate-shopping use case. This field is only considered if requestedShipment/serviceType is omitted.
     *
     * @param array[CarrierCodeType] $CarrierCodes
     * return RateRequest
     */
    public function setCarrierCodes(array $carrierCodes)
    {
        $this->CarrierCodes = $carrierCodes;
        return $this;
    }
    
    /**
     * Contains zero or more service options whose combinations are to be considered when replying with available services.
     *
     * @param array[ServiceOptionType] $VariableOptions
     * return RateRequest
     */
    public function setVariableOptions(array $variableOptions)
    {
        $this->VariableOptions = $variableOptions;
        return $this;
    }
    
    /**
     * The shipment for which a rate quote (or rate-shopping comparison) is desired.
     *
     * @param RequestedShipment $RequestedShipment
     * return RateRequest
     */
    public function setRequestedShipment(RequestedShipment $requestedShipment)
    {
        $this->RequestedShipment = $requestedShipment;
        return $this;
    }
    

    
}