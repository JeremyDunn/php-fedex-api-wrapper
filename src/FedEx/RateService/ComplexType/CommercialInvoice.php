<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * CommercialInvoice element is required for electronic upload of CI data. It will serve to create/transmit an Electronic Commercial Invoice through the FedEx Systems. Customers are responsible for printing their own Commercial Invoice.If you would likeFedEx to generate a Commercial Invoice and transmit it to Customs. for clearance purposes, you need to specify that in the ShippingDocumentSpecification element. If you would like a copy of the Commercial Invoice that FedEx generated returned to you in reply it needs to be specified in the ETDDetail/RequestedDocumentCopies element. Commercial Invoice support consists of maximum of 99 commodity line items.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class CommercialInvoice
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'CommercialInvoice';

    /**
     * Any comments that need to be communicated about this shipment.
     *
     * @param string[] $comments
     * return CommercialInvoice
     */
    public function setComments(array $comments)
    {
        $this->Comments = $comments;
        return $this;
    }
    
    /**
     * Any freight charges that are associated with this shipment.
     *
     * @param Money $freightCharge
     * return CommercialInvoice
     */
    public function setFreightCharge(Money $freightCharge)
    {
        $this->FreightCharge = $freightCharge;
        return $this;
    }
    
    /**
     * Any taxes or miscellaneous charges(other than Freight charges or Insurance charges) that are associated with this shipment.
     *
     * @param Money $taxesOrMiscellaneousCharge
     * return CommercialInvoice
     */
    public function setTaxesOrMiscellaneousCharge(Money $taxesOrMiscellaneousCharge)
    {
        $this->TaxesOrMiscellaneousCharge = $taxesOrMiscellaneousCharge;
        return $this;
    }
    
    /**
     * Specifies which kind of charge is being recorded in the preceding field.
     *
     * @param \FedEx\RateService\SimpleType\TaxesOrMiscellaneousChargeType|string $taxesOrMiscellaneousChargeType
     * return CommercialInvoice
     */
    public function setTaxesOrMiscellaneousChargeType($taxesOrMiscellaneousChargeType)
    {
        $this->TaxesOrMiscellaneousChargeType = $taxesOrMiscellaneousChargeType;
        return $this;
    }
    
    /**
     * Any packing costs that are associated with this shipment.
     *
     * @param Money $packingCosts
     * return CommercialInvoice
     */
    public function setPackingCosts(Money $packingCosts)
    {
        $this->PackingCosts = $packingCosts;
        return $this;
    }
    
    /**
     * Any handling costs that are associated with this shipment.
     *
     * @param Money $handlingCosts
     * return CommercialInvoice
     */
    public function setHandlingCosts(Money $handlingCosts)
    {
        $this->HandlingCosts = $handlingCosts;
        return $this;
    }
    
    /**
     * Free-form text.
     *
     * @param string $specialInstructions
     * return CommercialInvoice
     */
    public function setSpecialInstructions($specialInstructions)
    {
        $this->SpecialInstructions = $specialInstructions;
        return $this;
    }
    
    /**
     * Free-form text.
     *
     * @param string $declarationStatment
     * return CommercialInvoice
     */
    public function setDeclarationStatment($declarationStatment)
    {
        $this->DeclarationStatment = $declarationStatment;
        return $this;
    }
    
    /**
     * Free-form text.
     *
     * @param string $paymentTerms
     * return CommercialInvoice
     */
    public function setPaymentTerms($paymentTerms)
    {
        $this->PaymentTerms = $paymentTerms;
        return $this;
    }
    
    /**
     * The reason for the shipment. Note: SOLD is not a valid purpose for a Proforma Invoice.
     *
     * @param \FedEx\RateService\SimpleType\PurposeOfShipmentType|string $purpose
     * return CommercialInvoice
     */
    public function setPurpose($purpose)
    {
        $this->Purpose = $purpose;
        return $this;
    }
    
    /**
     * Customer assigned Invoice number
     *
     * @param string $customerInvoiceNumber
     * return CommercialInvoice
     */
    public function setCustomerInvoiceNumber($customerInvoiceNumber)
    {
        $this->CustomerInvoiceNumber = $customerInvoiceNumber;
        return $this;
    }
    
    /**
     * Name of the International Expert that completed the Commercial Invoice different from Sender.
     *
     * @param string $originatorName
     * return CommercialInvoice
     */
    public function setOriginatorName($originatorName)
    {
        $this->OriginatorName = $originatorName;
        return $this;
    }
    
    /**
     * Required for dutiable international Express or Ground shipment. This field is not applicable to an international PIB(document) or a non-document which does not require a Commercial Invoice
     *
     * @param \FedEx\RateService\SimpleType\TermsOfSaleType|string $termsOfSale
     * return CommercialInvoice
     */
    public function setTermsOfSale($termsOfSale)
    {
        $this->TermsOfSale = $termsOfSale;
        return $this;
    }
    

    
}