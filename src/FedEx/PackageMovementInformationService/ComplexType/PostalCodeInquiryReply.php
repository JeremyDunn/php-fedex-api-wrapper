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

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'PostalCodeInquiryReply';

    /**
     * Identifies the highest severity encountered when executing the request; in order from high to low: FAILURE, ERROR, WARNING, NOTE, SUCCESS.
     *
     * @param \FedEx\PackageMovementInformationService\SimpleType\NotificationSeverityType|string $highestSeverity
     * @return PostalCodeInquiryReply
     */
    public function setHighestSeverity($highestSeverity)
    {
        $this->HighestSeverity = $highestSeverity;
        return $this;
    }
    
    /**
     * Returns Identifies the highest severity encountered when executing the request; in order from high to low: FAILURE, ERROR, WARNING, NOTE, SUCCESS.
     *
     * @return \FedEx\PackageMovementInformationService\SimpleType\NotificationSeverityType|string
     */
    public function getHighestSeverity()
    {
        return $this->HighestSeverity;
    }
    
    /**
     * The descriptive data detailing the status of a sumbitted transaction.
     *
     * @param Notification[] $notifications
     * @return PostalCodeInquiryReply
     */
    public function setNotifications(array $notifications)
    {
        $this->Notifications = $notifications;
        return $this;
    }
    
    /**
     * Returns The descriptive data detailing the status of a sumbitted transaction.
     *
     * @return Notification[]
     */
    public function getNotifications()
    {
        return $this->Notifications;
    }
    
    /**
     * Descriptive data that governs data payload language/translations.  The TransactionDetail from the request is echoed back to the caller in the corresponding reply.
     *
     * @param TransactionDetail $transactionDetail
     * @return PostalCodeInquiryReply
     */
    public function setTransactionDetail(TransactionDetail $transactionDetail)
    {
        $this->TransactionDetail = $transactionDetail;
        return $this;
    }
    
    /**
     * Returns Descriptive data that governs data payload language/translations.  The TransactionDetail from the request is echoed back to the caller in the corresponding reply.
     *
     * @return TransactionDetail
     */
    public function getTransactionDetail()
    {
        return $this->TransactionDetail;
    }
    
    /**
     * Identifies the version/level of a service operation expected by a caller (in each request) and performed by the callee (in each reply).
     *
     * @param VersionId $version
     * @return PostalCodeInquiryReply
     */
    public function setVersion(VersionId $version)
    {
        $this->Version = $version;
        return $this;
    }
    
    /**
     * Returns Identifies the version/level of a service operation expected by a caller (in each request) and performed by the callee (in each reply).
     *
     * @return VersionId
     */
    public function getVersion()
    {
        return $this->Version;
    }
    
    /**
     * Flag identifying whether Express Freight Contractor Delivery Area.
     *
     * @param boolean $expressFreightContractorDeliveryArea
     * @return PostalCodeInquiryReply
     */
    public function setExpressFreightContractorDeliveryArea($expressFreightContractorDeliveryArea)
    {
        $this->ExpressFreightContractorDeliveryArea = $expressFreightContractorDeliveryArea;
        return $this;
    }
    
    /**
     * Returns Flag identifying whether Express Freight Contractor Delivery Area.
     *
     * @return boolean
     */
    public function getExpressFreightContractorDeliveryArea()
    {
        return $this->ExpressFreightContractorDeliveryArea;
    }
    
    /**
     * Postal code service area description for Express.
     *
     * @param PostalCodeServiceAreaDescription $expressDescription
     * @return PostalCodeInquiryReply
     */
    public function setExpressDescription(PostalCodeServiceAreaDescription $expressDescription)
    {
        $this->ExpressDescription = $expressDescription;
        return $this;
    }
    
    /**
     * Returns Postal code service area description for Express.
     *
     * @return PostalCodeServiceAreaDescription
     */
    public function getExpressDescription()
    {
        return $this->ExpressDescription;
    }
    
    /**
     * Only service area field is currently provided for Express Freight.
     *
     * @param PostalCodeServiceAreaDescription $expressFreightDescription
     * @return PostalCodeInquiryReply
     */
    public function setExpressFreightDescription(PostalCodeServiceAreaDescription $expressFreightDescription)
    {
        $this->ExpressFreightDescription = $expressFreightDescription;
        return $this;
    }
    
    /**
     * Returns Only service area field is currently provided for Express Freight.
     *
     * @return PostalCodeServiceAreaDescription
     */
    public function getExpressFreightDescription()
    {
        return $this->ExpressFreightDescription;
    }
    

    
}