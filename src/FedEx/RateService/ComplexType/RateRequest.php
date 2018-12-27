<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * RateRequest
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 *
 * @property WebAuthenticationDetail $WebAuthenticationDetail
 * @property ClientDetail $ClientDetail
 * @property TransactionDetail $TransactionDetail
 * @property VersionId $Version
 * @property boolean $ReturnTransitAndCommit
 * @property \FedEx\RateService\SimpleType\CarrierCodeType|string[] $CarrierCodes
 * @property \FedEx\RateService\SimpleType\ServiceOptionType|string[] $VariableOptions
 * @property ConsolidationKey $ConsolidationKey
 * @property RequestedShipment $RequestedShipment

 */
class RateRequest extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'RateRequest';

    /**
     * Descriptive data to be used in authentication of the sender's identity (and right to use FedEx web services).
     *
     * @param WebAuthenticationDetail $webAuthenticationDetail
     * @return $this
     */
    public function setWebAuthenticationDetail(WebAuthenticationDetail $webAuthenticationDetail)
    {
        $this->values['WebAuthenticationDetail'] = $webAuthenticationDetail;
        return $this;
    }

    /**
     * Set ClientDetail
     *
     * @param ClientDetail $clientDetail
     * @return $this
     */
    public function setClientDetail(ClientDetail $clientDetail)
    {
        $this->values['ClientDetail'] = $clientDetail;
        return $this;
    }

    /**
     * Set TransactionDetail
     *
     * @param TransactionDetail $transactionDetail
     * @return $this
     */
    public function setTransactionDetail(TransactionDetail $transactionDetail)
    {
        $this->values['TransactionDetail'] = $transactionDetail;
        return $this;
    }

    /**
     * Set Version
     *
     * @param VersionId $version
     * @return $this
     */
    public function setVersion(VersionId $version)
    {
        $this->values['Version'] = $version;
        return $this;
    }

    /**
     * Allows the caller to specify that the transit time and commit data are to be returned in the reply.
     *
     * @param boolean $returnTransitAndCommit
     * @return $this
     */
    public function setReturnTransitAndCommit($returnTransitAndCommit)
    {
        $this->values['ReturnTransitAndCommit'] = $returnTransitAndCommit;
        return $this;
    }

    /**
     * Candidate carriers for rate-shopping use case. This field is only considered if requestedShipment/serviceType is omitted.
     *
     * @param \FedEx\RateService\SimpleType\CarrierCodeType[]|string[] $carrierCodes
     * @return $this
     */
    public function setCarrierCodes(array $carrierCodes)
    {
        $this->values['CarrierCodes'] = $carrierCodes;
        return $this;
    }

    /**
     * Contains zero or more service options whose combinations are to be considered when replying with available services.
     *
     * @param \FedEx\RateService\SimpleType\ServiceOptionType[]|string[] $variableOptions
     * @return $this
     */
    public function setVariableOptions(array $variableOptions)
    {
        $this->values['VariableOptions'] = $variableOptions;
        return $this;
    }

    /**
     * If provided, identifies the consolidation to which this open shipment should be added after successful creation.
     *
     * @param ConsolidationKey $consolidationKey
     * @return $this
     */
    public function setConsolidationKey(ConsolidationKey $consolidationKey)
    {
        $this->values['ConsolidationKey'] = $consolidationKey;
        return $this;
    }

    /**
     * The shipment for which a rate quote (or rate-shopping comparison) is desired.
     *
     * @param RequestedShipment $requestedShipment
     * @return $this
     */
    public function setRequestedShipment(RequestedShipment $requestedShipment)
    {
        $this->values['RequestedShipment'] = $requestedShipment;
        return $this;
    }
}
