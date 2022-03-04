<?php
namespace FedEx\InFlightShipmentService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * TransactionDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  In Flight Shipment Service
 *
 * @property string $CustomerTransactionId
 * @property Localization $Localization
 * @property string $InternalTransactionId
 * @property boolean $Tracing
 * @property \FedEx\InFlightShipmentService\SimpleType\TransactionSourceFormat|string $SourceFormat
 * @property \FedEx\InFlightShipmentService\SimpleType\WebServiceEnvironment|string $Environment

 */
class TransactionDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'TransactionDetail';

    /**
     * Free form text to be echoed back in the reply. Used to match requests and replies.
     *
     * @param string $customerTransactionId
     * @return $this
     */
    public function setCustomerTransactionId($customerTransactionId)
    {
        $this->values['CustomerTransactionId'] = $customerTransactionId;
        return $this;
    }

    /**
     * Governs data payload language/translations (contrasted with ClientDetail.localization, which governs Notification.localizedMessage language selection).
     *
     * @param Localization $localization
     * @return $this
     */
    public function setLocalization(Localization $localization)
    {
        $this->values['Localization'] = $localization;
        return $this;
    }

    /**
     * Unique identifier assigned/forwarded by internal FAST services only, to associate service transactions comprising a single business work unit.
     *
     * @param string $internalTransactionId
     * @return $this
     */
    public function setInternalTransactionId($internalTransactionId)
    {
        $this->values['InternalTransactionId'] = $internalTransactionId;
        return $this;
    }

    /**
     * Each FAST service should log request/reply pairs for any transaction in which this attribute is true. This is for internal use only (capturing transaction data for diagnostic purposes).
     *
     * @param boolean $tracing
     * @return $this
     */
    public function setTracing($tracing)
    {
        $this->values['Tracing'] = $tracing;
        return $this;
    }

    /**
     * Indicates the format in which the transaction was presented to FedEx, used to help identify error-translation context.
     *
     * @param \FedEx\InFlightShipmentService\SimpleType\TransactionSourceFormat|string $sourceFormat
     * @return $this
     */
    public function setSourceFormat($sourceFormat)
    {
        $this->values['SourceFormat'] = $sourceFormat;
        return $this;
    }

    /**
     * Identifies the environment (level) in which the current transaction should be processed.
     *
     * @param \FedEx\InFlightShipmentService\SimpleType\WebServiceEnvironment|string $environment
     * @return $this
     */
    public function setEnvironment($environment)
    {
        $this->values['Environment'] = $environment;
        return $this;
    }
}
