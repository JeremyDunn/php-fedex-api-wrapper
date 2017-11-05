<?php
namespace FedEx\TrackService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * TrackRequest
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
 * @property int $TransactionTimeOutValueInMilliseconds
 * @property \FedEx\TrackService\SimpleType\TrackRequestProcessingOptionType|string[] $ProcessingOptions

 */
class TrackRequest extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'TrackRequest';

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
     * Descriptive data identifying the client submitting the transaction.
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
     * Contains a free form field that is echoed back in the reply to match requests with replies and data that governs the data payload language/translations.
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
     * The version of the request being used.
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
     * Specifies the details needed to select the shipment being requested to be tracked.
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
     * The customer can specify a desired time out value for this particular transaction.
     *
     * @param int $transactionTimeOutValueInMilliseconds
     * @return $this
     */
    public function setTransactionTimeOutValueInMilliseconds($transactionTimeOutValueInMilliseconds)
    {
        $this->values['TransactionTimeOutValueInMilliseconds'] = $transactionTimeOutValueInMilliseconds;
        return $this;
    }

    /**
     * Set ProcessingOptions
     *
     * @param \FedEx\TrackService\SimpleType\TrackRequestProcessingOptionType[]|string[] $processingOptions
     * @return $this
     */
    public function setProcessingOptions(array $processingOptions)
    {
        $this->values['ProcessingOptions'] = $processingOptions;
        return $this;
    }
}
