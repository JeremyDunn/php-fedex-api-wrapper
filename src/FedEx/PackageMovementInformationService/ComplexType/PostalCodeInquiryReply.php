<?php
namespace FedEx\PackageMovementInformationService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * FedEx Postal Code Inquiry reply.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information Service
 *
 * @property \FedEx\PackageMovementInformationService\SimpleType\NotificationSeverityType|string $HighestSeverity
 * @property Notification[] $Notifications
 * @property TransactionDetail $TransactionDetail
 * @property VersionId $Version
 * @property boolean $ExpressFreightContractorDeliveryArea
 * @property PostalCodeServiceAreaDescription $ExpressDescription
 * @property PostalCodeServiceAreaDescription $ExpressFreightDescription

 */
class PostalCodeInquiryReply extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'PostalCodeInquiryReply';

    /**
     * Identifies the highest severity encountered when executing the request; in order from high to low: FAILURE, ERROR, WARNING, NOTE, SUCCESS.
     *
     * @param \FedEx\PackageMovementInformationService\SimpleType\NotificationSeverityType|string $highestSeverity
     * @return $this
     */
    public function setHighestSeverity($highestSeverity)
    {
        $this->values['HighestSeverity'] = $highestSeverity;
        return $this;
    }

    /**
     * The descriptive data detailing the status of a sumbitted transaction.
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
     * Descriptive data that governs data payload language/translations.  The TransactionDetail from the request is echoed back to the caller in the corresponding reply.
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
     * Identifies the version/level of a service operation expected by a caller (in each request) and performed by the callee (in each reply).
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
     * Flag identifying whether Express Freight Contractor Delivery Area.
     *
     * @param boolean $expressFreightContractorDeliveryArea
     * @return $this
     */
    public function setExpressFreightContractorDeliveryArea($expressFreightContractorDeliveryArea)
    {
        $this->values['ExpressFreightContractorDeliveryArea'] = $expressFreightContractorDeliveryArea;
        return $this;
    }

    /**
     * Postal code service area description for Express.
     *
     * @param PostalCodeServiceAreaDescription $expressDescription
     * @return $this
     */
    public function setExpressDescription(PostalCodeServiceAreaDescription $expressDescription)
    {
        $this->values['ExpressDescription'] = $expressDescription;
        return $this;
    }

    /**
     * Only service area field is currently provided for Express Freight.
     *
     * @param PostalCodeServiceAreaDescription $expressFreightDescription
     * @return $this
     */
    public function setExpressFreightDescription(PostalCodeServiceAreaDescription $expressFreightDescription)
    {
        $this->values['ExpressFreightDescription'] = $expressFreightDescription;
        return $this;
    }
}
