<?php
namespace FedEx\OpenShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * DeleteOpenConsolidationRequest
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  OpenShip Service
 *
 * @property WebAuthenticationDetail $WebAuthenticationDetail
 * @property ClientDetail $ClientDetail
 * @property TransactionDetail $TransactionDetail
 * @property VersionId $Version
 * @property ConsolidationKey $ConsolidationKey
 * @property TrackingId $TrackingId

 */
class DeleteOpenConsolidationRequest extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'DeleteOpenConsolidationRequest';

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
     * Set ConsolidationKey
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
     * This is an optional field and will be used to confirm that the the tracking id being passed is the MAWB tracking id of the consolidation.
     *
     * @param TrackingId $trackingId
     * @return $this
     */
    public function setTrackingId(TrackingId $trackingId)
    {
        $this->values['TrackingId'] = $trackingId;
        return $this;
    }
}
