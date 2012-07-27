<?php
namespace FedEx\PackageMovementInformationService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * FedEx Postal Code Inquiry reply.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information Service
 */
class PostalCodeInquiryReply
    extends AbstractComplexType
{
    protected $_name = 'PostalCodeInquiryReply';

    /**
     * Identifies the highest severity encountered when executing the request; in order from high to low: FAILURE, ERROR, WARNING, NOTE, SUCCESS.
     *
     * @param NotificationSeverityType $HighestSeverity
     * return PostalCodeInquiryReply
     */
    public function setHighestSeverity(\FedEx\PackageMovementInformationService\SimpleType\NotificationSeverityType $highestSeverity)
    {
        $this->HighestSeverity = $highestSeverity;
        return $this;
    }
    
    /**
     * The descriptive data detailing the status of a sumbitted transaction.
     *
     * @param array[Notification] $Notifications
     * return PostalCodeInquiryReply
     */
    public function setNotifications(array $notifications)
    {
        $this->Notifications = $notifications;
        return $this;
    }
    
    /**
     * Descriptive data that governs data payload language/translations.  The TransactionDetail from the request is echoed back to the caller in the corresponding reply.
     *
     * @param TransactionDetail $TransactionDetail
     * return PostalCodeInquiryReply
     */
    public function setTransactionDetail(TransactionDetail $transactionDetail)
    {
        $this->TransactionDetail = $transactionDetail;
        return $this;
    }
    
    /**
     * Identifies the version/level of a service operation expected by a caller (in each request) and performed by the callee (in each reply).
     *
     * @param VersionId $Version
     * return PostalCodeInquiryReply
     */
    public function setVersion(VersionId $version)
    {
        $this->Version = $version;
        return $this;
    }
    
    /**
     * Flag identifying whether Express Freight Contractor Delivery Area.
     *
     * @param boolean $ExpressFreightContractorDeliveryArea
     * return PostalCodeInquiryReply
     */
    public function setExpressFreightContractorDeliveryArea($expressFreightContractorDeliveryArea)
    {
        $this->ExpressFreightContractorDeliveryArea = $expressFreightContractorDeliveryArea;
        return $this;
    }
    
    /**
     * Postal code service area description for Express.
     *
     * @param PostalCodeServiceAreaDescription $ExpressDescription
     * return PostalCodeInquiryReply
     */
    public function setExpressDescription(PostalCodeServiceAreaDescription $expressDescription)
    {
        $this->ExpressDescription = $expressDescription;
        return $this;
    }
    
    /**
     * Only service area field is currently provided for Express Freight.
     *
     * @param PostalCodeServiceAreaDescription $ExpressFreightDescription
     * return PostalCodeInquiryReply
     */
    public function setExpressFreightDescription(PostalCodeServiceAreaDescription $expressFreightDescription)
    {
        $this->ExpressFreightDescription = $expressFreightDescription;
        return $this;
    }
    

    
}