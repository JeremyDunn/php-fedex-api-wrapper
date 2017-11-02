<?php
namespace FedEx\DGLDService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * ListDangerousGoodsReply
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  List Dangerous Goods Service
 *
 * @property \FedEx\DGLDService\SimpleType\NotificationSeverityType|string $HighestSeverity
 * @property Notification[] $Notifications
 * @property TransactionDetail $TransactionDetail
 * @property VersionId $Version
 * @property \FedEx\DGLDService\SimpleType\HazardousCommodityRegulationType|string $Regulation
 * @property \FedEx\DGLDService\SimpleType\DangerousGoodsAccessibilityType|string $Accessibility
 * @property \FedEx\DGLDService\SimpleType\HazardousCommodityOptionType|string[] $Options
 * @property ListDangerousGoodsDetail[] $Details

 */
class ListDangerousGoodsReply extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ListDangerousGoodsReply';

    /**
     * Set HighestSeverity
     *
     * @param \FedEx\DGLDService\SimpleType\NotificationSeverityType|string $highestSeverity
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
     * Set Regulation
     *
     * @param \FedEx\DGLDService\SimpleType\HazardousCommodityRegulationType|string $regulation
     * @return $this
     */
    public function setRegulation($regulation)
    {
        $this->values['Regulation'] = $regulation;
        return $this;
    }

    /**
     * Set Accessibility
     *
     * @param \FedEx\DGLDService\SimpleType\DangerousGoodsAccessibilityType|string $accessibility
     * @return $this
     */
    public function setAccessibility($accessibility)
    {
        $this->values['Accessibility'] = $accessibility;
        return $this;
    }

    /**
     * Set Options
     *
     * @param \FedEx\DGLDService\SimpleType\HazardousCommodityOptionType[]|string[] $options
     * @return $this
     */
    public function setOptions(array $options)
    {
        $this->values['Options'] = $options;
        return $this;
    }

    /**
     * Set Details
     *
     * @param ListDangerousGoodsDetail[] $details
     * @return $this
     */
    public function setDetails(array $details)
    {
        $this->values['Details'] = $details;
        return $this;
    }
}
