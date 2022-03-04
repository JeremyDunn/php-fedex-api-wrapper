<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * CommercialInvoice element is required for electronic upload of CI data. It will serve to create/transmit an Electronic Commercial Invoice through the FedEx Systems. Customers are responsible for printing their own Commercial Invoice.If you would likeFedEx to generate a Commercial Invoice and transmit it to Customs. for clearance purposes, you need to specify that in the ShippingDocumentSpecification element. If you would like a copy of the Commercial Invoice that FedEx generated returned to you in reply it needs to be specified in the ETDDetail/RequestedDocumentCopies element. Commercial Invoice support consists of maximum of 99 commodity line items.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 *
 * @property string[] $Comments
 * @property Money $FreightCharge
 * @property Money $TaxesOrMiscellaneousCharge
 * @property \FedEx\RateService\SimpleType\TaxesOrMiscellaneousChargeType|string $TaxesOrMiscellaneousChargeType
 * @property Money $PackingCosts
 * @property Money $HandlingCosts
 * @property string $SpecialInstructions
 * @property string $DeclarationStatement
 * @property string $PaymentTerms
 * @property \FedEx\RateService\SimpleType\PurposeOfShipmentType|string $Purpose
 * @property string $OriginatorName
 * @property string $TermsOfSale

 */
class CommercialInvoice extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'CommercialInvoice';

    /**
     * Any comments that need to be communicated about this shipment.
     *
     * @param string $comments
     * @return $this
     */
    public function setComments($comments)
    {
        $this->values['Comments'] = $comments;
        return $this;
    }

    /**
     * Any freight charges that are associated with this shipment.
     *
     * @param Money $freightCharge
     * @return $this
     */
    public function setFreightCharge(Money $freightCharge)
    {
        $this->values['FreightCharge'] = $freightCharge;
        return $this;
    }

    /**
     * Any taxes or miscellaneous charges(other than Freight charges or Insurance charges) that are associated with this shipment.
     *
     * @param Money $taxesOrMiscellaneousCharge
     * @return $this
     */
    public function setTaxesOrMiscellaneousCharge(Money $taxesOrMiscellaneousCharge)
    {
        $this->values['TaxesOrMiscellaneousCharge'] = $taxesOrMiscellaneousCharge;
        return $this;
    }

    /**
     * Specifies which kind of charge is being recorded in the preceding field.
     *
     * @param \FedEx\RateService\SimpleType\TaxesOrMiscellaneousChargeType|string $taxesOrMiscellaneousChargeType
     * @return $this
     */
    public function setTaxesOrMiscellaneousChargeType($taxesOrMiscellaneousChargeType)
    {
        $this->values['TaxesOrMiscellaneousChargeType'] = $taxesOrMiscellaneousChargeType;
        return $this;
    }

    /**
     * Any packing costs that are associated with this shipment.
     *
     * @param Money $packingCosts
     * @return $this
     */
    public function setPackingCosts(Money $packingCosts)
    {
        $this->values['PackingCosts'] = $packingCosts;
        return $this;
    }

    /**
     * Any handling costs that are associated with this shipment.
     *
     * @param Money $handlingCosts
     * @return $this
     */
    public function setHandlingCosts(Money $handlingCosts)
    {
        $this->values['HandlingCosts'] = $handlingCosts;
        return $this;
    }

    /**
     * Free-form text.
     *
     * @param string $specialInstructions
     * @return $this
     */
    public function setSpecialInstructions($specialInstructions)
    {
        $this->values['SpecialInstructions'] = $specialInstructions;
        return $this;
    }

    /**
     * Free-form text.
     *
     * @param string $declarationStatement
     * @return $this
     */
    public function setDeclarationStatement($declarationStatement)
    {
        $this->values['DeclarationStatement'] = $declarationStatement;
        return $this;
    }

    /**
     * Free-form text.
     *
     * @param string $paymentTerms
     * @return $this
     */
    public function setPaymentTerms($paymentTerms)
    {
        $this->values['PaymentTerms'] = $paymentTerms;
        return $this;
    }

    /**
     * The reason for the shipment. Note: SOLD is not a valid purpose for a Proforma Invoice.
     *
     * @param \FedEx\RateService\SimpleType\PurposeOfShipmentType|string $purpose
     * @return $this
     */
    public function setPurpose($purpose)
    {
        $this->values['Purpose'] = $purpose;
        return $this;
    }

    /**
     * Name of the International Expert that completed the Commercial Invoice different from Sender.
     *
     * @param string $originatorName
     * @return $this
     */
    public function setOriginatorName($originatorName)
    {
        $this->values['OriginatorName'] = $originatorName;
        return $this;
    }

    /**
     * Required for dutiable international Express or Ground shipments. This field is not applicable to an international PIB(document) or a non-document which does not require a Commercial Invoice.
     *
     * @param string $termsOfSale
     * @return $this
     */
    public function setTermsOfSale($termsOfSale)
    {
        $this->values['TermsOfSale'] = $termsOfSale;
        return $this;
    }
}
