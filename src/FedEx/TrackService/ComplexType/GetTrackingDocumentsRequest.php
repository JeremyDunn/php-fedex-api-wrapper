<?php
namespace FedEx\TrackService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * GetTrackingDocumentsRequest
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information Service
 *
 * @property WebAuthenticationDetail $WebAuthenticationDetail
 * @property ClientDetail $ClientDetail
 * @property TransactionDetail $TransactionDetail
 * @property VersionId $Version
 * @property TrackSelectionDetail[] $SelectionDetails
 * @property TrackingDocumentSpecification $TrackingDocumentSpecification

 */
class GetTrackingDocumentsRequest extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'GetTrackingDocumentsRequest';

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
     * Set SelectionDetails
     *
     * @param TrackSelectionDetail[] $selectionDetails
     * @return $this
     */
    public function setSelectionDetails(array $selectionDetails)
    {
        $this->values['SelectionDetails'] = $selectionDetails;
        return $this;
    }

    /**
     * Set TrackingDocumentSpecification
     *
     * @param TrackingDocumentSpecification $trackingDocumentSpecification
     * @return $this
     */
    public function setTrackingDocumentSpecification(TrackingDocumentSpecification $trackingDocumentSpecification)
    {
        $this->values['TrackingDocumentSpecification'] = $trackingDocumentSpecification;
        return $this;
    }
}
