<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * RateRequest
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class RateRequest
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'RateRequest';

    /**
     * Descriptive data to be used in authentication of the sender's identity (and right to use FedEx web services).
     *
     * @param WebAuthenticationDetail $webAuthenticationDetail
     * @return RateRequest
     */
    public function setWebAuthenticationDetail(WebAuthenticationDetail $webAuthenticationDetail)
    {
        $this->WebAuthenticationDetail = $webAuthenticationDetail;
        return $this;
    }
    
    /**
     * Returns Descriptive data to be used in authentication of the sender's identity (and right to use FedEx web services).
     *
     * @return WebAuthenticationDetail
     */
    public function getWebAuthenticationDetail()
    {
        return $this->WebAuthenticationDetail;
    }
    
    /**
     * Set ClientDetail
     *
     * @param ClientDetail $clientDetail
     * @return RateRequest
     */
    public function setClientDetail(ClientDetail $clientDetail)
    {
        $this->ClientDetail = $clientDetail;
        return $this;
    }
    
    /**
     * Returns Set ClientDetail
     *
     * @return ClientDetail
     */
    public function getClientDetail()
    {
        return $this->ClientDetail;
    }
    
    /**
     * Set TransactionDetail
     *
     * @param TransactionDetail $transactionDetail
     * @return RateRequest
     */
    public function setTransactionDetail(TransactionDetail $transactionDetail)
    {
        $this->TransactionDetail = $transactionDetail;
        return $this;
    }
    
    /**
     * Returns Set TransactionDetail
     *
     * @return TransactionDetail
     */
    public function getTransactionDetail()
    {
        return $this->TransactionDetail;
    }
    
    /**
     * Set Version
     *
     * @param VersionId $version
     * @return RateRequest
     */
    public function setVersion(VersionId $version)
    {
        $this->Version = $version;
        return $this;
    }
    
    /**
     * Returns Set Version
     *
     * @return VersionId
     */
    public function getVersion()
    {
        return $this->Version;
    }
    
    /**
     * Allows the caller to specify that the transit time and commit data are to be returned in the reply.
     *
     * @param boolean $returnTransitAndCommit
     * @return RateRequest
     */
    public function setReturnTransitAndCommit($returnTransitAndCommit)
    {
        $this->ReturnTransitAndCommit = $returnTransitAndCommit;
        return $this;
    }
    
    /**
     * Returns Allows the caller to specify that the transit time and commit data are to be returned in the reply.
     *
     * @return boolean
     */
    public function getReturnTransitAndCommit()
    {
        return $this->ReturnTransitAndCommit;
    }
    
    /**
     * Candidate carriers for rate-shopping use case. This field is only considered if requestedShipment/serviceType is omitted.
     *
     * @param CarrierCodeType[] $carrierCodes
     * @return RateRequest
     */
    public function setCarrierCodes(array $carrierCodes)
    {
        $this->CarrierCodes = $carrierCodes;
        return $this;
    }
    
    /**
     * Returns Candidate carriers for rate-shopping use case. This field is only considered if requestedShipment/serviceType is omitted.
     *
     * @return CarrierCodeType[]
     */
    public function getCarrierCodes()
    {
        return $this->CarrierCodes;
    }
    
    /**
     * Contains zero or more service options whose combinations are to be considered when replying with available services.
     *
     * @param ServiceOptionType[] $variableOptions
     * @return RateRequest
     */
    public function setVariableOptions(array $variableOptions)
    {
        $this->VariableOptions = $variableOptions;
        return $this;
    }
    
    /**
     * Returns Contains zero or more service options whose combinations are to be considered when replying with available services.
     *
     * @return ServiceOptionType[]
     */
    public function getVariableOptions()
    {
        return $this->VariableOptions;
    }
    
    /**
     * If provided, identifies the consolidation to which this open shipment should be added after successful creation.
     *
     * @param ConsolidationKey $consolidationKey
     * @return RateRequest
     */
    public function setConsolidationKey(ConsolidationKey $consolidationKey)
    {
        $this->ConsolidationKey = $consolidationKey;
        return $this;
    }
    
    /**
     * Returns If provided, identifies the consolidation to which this open shipment should be added after successful creation.
     *
     * @return ConsolidationKey
     */
    public function getConsolidationKey()
    {
        return $this->ConsolidationKey;
    }
    
    /**
     * The shipment for which a rate quote (or rate-shopping comparison) is desired.
     *
     * @param RequestedShipment $requestedShipment
     * @return RateRequest
     */
    public function setRequestedShipment(RequestedShipment $requestedShipment)
    {
        $this->RequestedShipment = $requestedShipment;
        return $this;
    }
    
    /**
     * Returns The shipment for which a rate quote (or rate-shopping comparison) is desired.
     *
     * @return RequestedShipment
     */
    public function getRequestedShipment()
    {
        return $this->RequestedShipment;
    }
    

    
}