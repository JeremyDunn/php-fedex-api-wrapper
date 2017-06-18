<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Data applicable to shipments using FEDEX_FREIGHT and FEDEX_NATIONAL_FREIGHT services.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 *
 * @property string $FedExFreightAccountNumber
 * @property ContactAndAddress $FedExFreightBillingContactAndAddress
 * @property string $FedExNationalFreightAccountNumber
 * @property ContactAndAddress $FedExNationalFreightBillingContactAndAddress
 * @property \FedEx\RateService\SimpleType\FreightShipmentRoleType|string $Role
 * @property \FedEx\RateService\SimpleType\FreightAccountPaymentType|string $PaymentType
 * @property Money $DeclaredValuePerUnit
 * @property string $DeclaredValueUnits
 * @property LiabilityCoverageDetail $LiabilityCoverageDetail
 * @property string[] $Coupons
 * @property int $TotalHandlingUnits
 * @property float $ClientDiscountPercent
 * @property Weight $PalletWeight
 * @property Dimensions $ShipmentDimensions
 * @property string $Comment
 * @property FreightSpecialServicePayment[] $SpecialServicePayments
 * @property FreightShipmentLineItem[] $LineItems

 */
class FreightShipmentDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'FreightShipmentDetail';

    /**
     * Account number used with FEDEX_FREIGHT service.
     *
     * @param string $fedExFreightAccountNumber
     * @return $this
     */
    public function setFedExFreightAccountNumber($fedExFreightAccountNumber)
    {
        $this->values['FedExFreightAccountNumber'] = $fedExFreightAccountNumber;
        return $this;
    }

    /**
     * Used for validating FedEx Freight account number and (optionally) identifying third party payment on the bill of lading.
     *
     * @param ContactAndAddress $fedExFreightBillingContactAndAddress
     * @return $this
     */
    public function setFedExFreightBillingContactAndAddress(ContactAndAddress $fedExFreightBillingContactAndAddress)
    {
        $this->values['FedExFreightBillingContactAndAddress'] = $fedExFreightBillingContactAndAddress;
        return $this;
    }

    /**
     * Account number used with FEDEX_NATIONAL_FREIGHT service.
     *
     * @param string $fedExNationalFreightAccountNumber
     * @return $this
     */
    public function setFedExNationalFreightAccountNumber($fedExNationalFreightAccountNumber)
    {
        $this->values['FedExNationalFreightAccountNumber'] = $fedExNationalFreightAccountNumber;
        return $this;
    }

    /**
     * Used for validating FedEx National Freight account number and (optionally) identifying third party payment on the bill of lading.
     *
     * @param ContactAndAddress $fedExNationalFreightBillingContactAndAddress
     * @return $this
     */
    public function setFedExNationalFreightBillingContactAndAddress(ContactAndAddress $fedExNationalFreightBillingContactAndAddress)
    {
        $this->values['FedExNationalFreightBillingContactAndAddress'] = $fedExNationalFreightBillingContactAndAddress;
        return $this;
    }

    /**
     * Indicates the role of the party submitting the transaction.
     *
     * @param \FedEx\RateService\SimpleType\FreightShipmentRoleType|string $role
     * @return $this
     */
    public function setRole($role)
    {
        $this->values['Role'] = $role;
        return $this;
    }

    /**
     * Designates which of the requester's tariffs will be used for rating.
     *
     * @param \FedEx\RateService\SimpleType\FreightAccountPaymentType|string $paymentType
     * @return $this
     */
    public function setPaymentType($paymentType)
    {
        $this->values['PaymentType'] = $paymentType;
        return $this;
    }

    /**
     * Identifies the declared value for the shipment
     *
     * @param Money $declaredValuePerUnit
     * @return $this
     */
    public function setDeclaredValuePerUnit(Money $declaredValuePerUnit)
    {
        $this->values['DeclaredValuePerUnit'] = $declaredValuePerUnit;
        return $this;
    }

    /**
     * Identifies the declared value units corresponding to the above defined declared value
     *
     * @param string $declaredValueUnits
     * @return $this
     */
    public function setDeclaredValueUnits($declaredValueUnits)
    {
        $this->values['DeclaredValueUnits'] = $declaredValueUnits;
        return $this;
    }

    /**
     * Set LiabilityCoverageDetail
     *
     * @param LiabilityCoverageDetail $liabilityCoverageDetail
     * @return $this
     */
    public function setLiabilityCoverageDetail(LiabilityCoverageDetail $liabilityCoverageDetail)
    {
        $this->values['LiabilityCoverageDetail'] = $liabilityCoverageDetail;
        return $this;
    }

    /**
     * Identifiers for promotional discounts offered to customers.
     *
     * @param string $coupons
     * @return $this
     */
    public function setCoupons($coupons)
    {
        $this->values['Coupons'] = $coupons;
        return $this;
    }

    /**
     * Total number of individual handling units in the entire shipment (for unit pricing).
     *
     * @param int $totalHandlingUnits
     * @return $this
     */
    public function setTotalHandlingUnits($totalHandlingUnits)
    {
        $this->values['TotalHandlingUnits'] = $totalHandlingUnits;
        return $this;
    }

    /**
     * Estimated discount rate provided by client for unsecured rate quote.
     *
     * @param float $clientDiscountPercent
     * @return $this
     */
    public function setClientDiscountPercent($clientDiscountPercent)
    {
        $this->values['ClientDiscountPercent'] = $clientDiscountPercent;
        return $this;
    }

    /**
     * Total weight of pallets used in shipment.
     *
     * @param Weight $palletWeight
     * @return $this
     */
    public function setPalletWeight(Weight $palletWeight)
    {
        $this->values['PalletWeight'] = $palletWeight;
        return $this;
    }

    /**
     * Overall shipment dimensions.
     *
     * @param Dimensions $shipmentDimensions
     * @return $this
     */
    public function setShipmentDimensions(Dimensions $shipmentDimensions)
    {
        $this->values['ShipmentDimensions'] = $shipmentDimensions;
        return $this;
    }

    /**
     * Description for the shipment.
     *
     * @param string $comment
     * @return $this
     */
    public function setComment($comment)
    {
        $this->values['Comment'] = $comment;
        return $this;
    }

    /**
     * Specifies which party will pay surcharges for any special services which support split billing.
     *
     * @param FreightSpecialServicePayment[] $specialServicePayments
     * @return $this
     */
    public function setSpecialServicePayments(array $specialServicePayments)
    {
        $this->values['SpecialServicePayments'] = $specialServicePayments;
        return $this;
    }

    /**
     * Details of the commodities in the shipment.
     *
     * @param FreightShipmentLineItem[] $lineItems
     * @return $this
     */
    public function setLineItems(array $lineItems)
    {
        $this->values['LineItems'] = $lineItems;
        return $this;
    }
}
