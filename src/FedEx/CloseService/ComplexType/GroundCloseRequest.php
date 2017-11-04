<?php
namespace FedEx\CloseService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * GroundCloseRequest
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Close Service
 *
 * @property WebAuthenticationDetail $WebAuthenticationDetail
 * @property ClientDetail $ClientDetail
 * @property TransactionDetail $TransactionDetail
 * @property VersionId $Version
 * @property \FedEx\CloseService\SimpleType\CloseGroupingType|string $CloseGrouping
 * @property string $TimeUpToWhichShipmentsAreToBeClosed
 * @property CloseManifestReferenceDetail $ManifestReferenceDetail

 */
class GroundCloseRequest extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'GroundCloseRequest';

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
     * Set CloseGrouping
     *
     * @param \FedEx\CloseService\SimpleType\CloseGroupingType|string $closeGrouping
     * @return $this
     */
    public function setCloseGrouping($closeGrouping)
    {
        $this->values['CloseGrouping'] = $closeGrouping;
        return $this;
    }

    /**
     * Set TimeUpToWhichShipmentsAreToBeClosed
     *
     * @param string $timeUpToWhichShipmentsAreToBeClosed
     * @return $this
     */
    public function setTimeUpToWhichShipmentsAreToBeClosed($timeUpToWhichShipmentsAreToBeClosed)
    {
        $this->values['TimeUpToWhichShipmentsAreToBeClosed'] = $timeUpToWhichShipmentsAreToBeClosed;
        return $this;
    }

    /**
     * Set ManifestReferenceDetail
     *
     * @param CloseManifestReferenceDetail $manifestReferenceDetail
     * @return $this
     */
    public function setManifestReferenceDetail(CloseManifestReferenceDetail $manifestReferenceDetail)
    {
        $this->values['ManifestReferenceDetail'] = $manifestReferenceDetail;
        return $this;
    }
}
