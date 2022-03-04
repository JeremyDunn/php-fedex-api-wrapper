<?php
namespace FedEx\AddressValidationService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * AddressValidationReply
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Address Validation Service
 *
 * @property \FedEx\AddressValidationService\SimpleType\NotificationSeverityType|string $HighestSeverity
 * @property Notification[] $Notifications
 * @property TransactionDetail $TransactionDetail
 * @property VersionId $Version
 * @property string $ReplyTimestamp
 * @property AddressValidationResult[] $AddressResults

 */
class AddressValidationReply extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'AddressValidationReply';

    /**
     * Set HighestSeverity
     *
     * @param \FedEx\AddressValidationService\SimpleType\NotificationSeverityType|string $highestSeverity
     * @return $this
     */
    public function setHighestSeverity($highestSeverity)
    {
        $this->values['HighestSeverity'] = $highestSeverity;
        return $this;
    }

    /**
     * Set Notifications
     *
     * @param Notification[] $notifications
     * @return $this
     */
    public function setNotifications(array $notifications)
    {
        $this->values['Notifications'] = $notifications;
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
     * Set ReplyTimestamp
     *
     * @param string $replyTimestamp
     * @return $this
     */
    public function setReplyTimestamp($replyTimestamp)
    {
        $this->values['ReplyTimestamp'] = $replyTimestamp;
        return $this;
    }

    /**
     * Set AddressResults
     *
     * @param AddressValidationResult[] $addressResults
     * @return $this
     */
    public function setAddressResults(array $addressResults)
    {
        $this->values['AddressResults'] = $addressResults;
        return $this;
    }
}
