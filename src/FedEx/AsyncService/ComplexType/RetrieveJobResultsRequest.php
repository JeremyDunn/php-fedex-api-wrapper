<?php
namespace FedEx\AsyncService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * This request object is used by the client to retrieve artifacts stored by the ASYNC service.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  ASync Service
 *
 * @property WebAuthenticationDetail $WebAuthenticationDetail
 * @property ClientDetail $ClientDetail
 * @property TransactionDetail $TransactionDetail
 * @property VersionId $Version
 * @property string $JobId
 * @property ArtifactRetrievalFilter[] $Filters

 */
class RetrieveJobResultsRequest extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'RetrieveJobResultsRequest';

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
     * Specifies the job under which the desired artifacts are stored.
     *
     * @param string $jobId
     * @return $this
     */
    public function setJobId($jobId)
    {
        $this->values['JobId'] = $jobId;
        return $this;
    }

    /**
     * Specifies the filters to be used for retrieving artifacts.
     *
     * @param ArtifactRetrievalFilter[] $filters
     * @return $this
     */
    public function setFilters(array $filters)
    {
        $this->values['Filters'] = $filters;
        return $this;
    }
}
