<?php
namespace FedEx\TrackService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * SendNotificationsRequest
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information Service
 *
 * @property WebAuthenticationDetail $WebAuthenticationDetail
 * @property ClientDetail $ClientDetail
 * @property TransactionDetail $TransactionDetail
 * @property VersionId $Version
 * @property string $TrackingNumber
 * @property boolean $MultiPiece
 * @property string $PagingToken
 * @property string $TrackingNumberUniqueId
 * @property string $ShipDateRangeBegin
 * @property string $ShipDateRangeEnd
 * @property string $SenderEMailAddress
 * @property string $SenderContactName
 * @property ShipmentEventNotificationDetail $EventNotificationDetail

 */
class SendNotificationsRequest extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'SendNotificationsRequest';

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
     * Contains a free form field that is echoed back in the reply to match requests with replies and data that governs the data payload language/translations
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
     * The tracking number to which the notifications will be triggered from.
     *
     * @param string $trackingNumber
     * @return $this
     */
    public function setTrackingNumber($trackingNumber)
    {
        $this->values['TrackingNumber'] = $trackingNumber;
        return $this;
    }

    /**
     * Indicates whether to return tracking information for all associated packages.
     *
     * @param boolean $multiPiece
     * @return $this
     */
    public function setMultiPiece($multiPiece)
    {
        $this->values['MultiPiece'] = $multiPiece;
        return $this;
    }

    /**
     * When the MoreDataAvailable field is true in a TrackNotificationReply the PagingToken must be sent in the subsequent TrackNotificationRequest to retrieve the next page of data.
     *
     * @param string $pagingToken
     * @return $this
     */
    public function setPagingToken($pagingToken)
    {
        $this->values['PagingToken'] = $pagingToken;
        return $this;
    }

    /**
     * Use this field when your original request informs you that there are duplicates of this tracking number. If you get duplicates you will also receive some information about each of the duplicate tracking numbers to enable you to chose one and resend that number along with the TrackingNumberUniqueId to get notifications for that tracking number.
     *
     * @param string $trackingNumberUniqueId
     * @return $this
     */
    public function setTrackingNumberUniqueId($trackingNumberUniqueId)
    {
        $this->values['TrackingNumberUniqueId'] = $trackingNumberUniqueId;
        return $this;
    }

    /**
     * To narrow the search to a period in time the ShipDateRangeBegin and ShipDateRangeEnd can be used to help eliminate duplicates.
     *
     * @param string $shipDateRangeBegin
     * @return $this
     */
    public function setShipDateRangeBegin($shipDateRangeBegin)
    {
        $this->values['ShipDateRangeBegin'] = $shipDateRangeBegin;
        return $this;
    }

    /**
     * To narrow the search to a period in time the ShipDateRangeBegin and ShipDateRangeEnd can be used to help eliminate duplicates.
     *
     * @param string $shipDateRangeEnd
     * @return $this
     */
    public function setShipDateRangeEnd($shipDateRangeEnd)
    {
        $this->values['ShipDateRangeEnd'] = $shipDateRangeEnd;
        return $this;
    }

    /**
     * Included in the email notification identifying the requester of this notification.
     *
     * @param string $senderEMailAddress
     * @return $this
     */
    public function setSenderEMailAddress($senderEMailAddress)
    {
        $this->values['SenderEMailAddress'] = $senderEMailAddress;
        return $this;
    }

    /**
     * Included in the email notification identifying the requester of this notification.
     *
     * @param string $senderContactName
     * @return $this
     */
    public function setSenderContactName($senderContactName)
    {
        $this->values['SenderContactName'] = $senderContactName;
        return $this;
    }

    /**
     * This replaces eMailNotificationDetail
     *
     * @param ShipmentEventNotificationDetail $eventNotificationDetail
     * @return $this
     */
    public function setEventNotificationDetail(ShipmentEventNotificationDetail $eventNotificationDetail)
    {
        $this->values['EventNotificationDetail'] = $eventNotificationDetail;
        return $this;
    }
}
