<?php
namespace FedEx\RateService\ComplexType;

/**
 * CommercialInvoice element is required for electronic upload of CI data. It will serve to create/transmit an Electronic Commercial Invoice through the FedEx Systems. Customers are responsible for printing their own Commercial Invoice.If you would likeFedEx to generate a Commercial Invoice and transmit it to Customs. for clearance purposes, you need to specify that in the ShippingDocumentSpecification element. If you would like a copy of the Commercial Invoice that FedEx generated returned to you in reply it needs to be specified in the ETDDetail/RequestedDocumentCopies element. Commercial Invoice support consists of maximum of 99 commodity line items.
 *
 * @version     $Revision: 4 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information
 */
class CommercialInvoice
    extends AbstractComplexType
{
    protected $_name = 'CommercialInvoice';

    /**
     * Any comments that need to be communicated about this shipment.
     *
     * @param array[string] $Comments
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
     * @param Money $FreightCharge
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
     * @param Money $TaxesOrMiscellaneousCharge
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
     * @param TaxesOrMiscellaneousChargeType $TaxesOrMiscellaneousChargeType
     * return CommercialInvoice
     */
    public function setTaxesOrMiscellaneousChargeType(\FedEx\RateService\SimpleType\TaxesOrMiscellaneousChargeType $taxesOrMiscellaneousChargeType)
    {
        $this->TaxesOrMiscellaneousChargeType = $taxesOrMiscellaneousChargeType;
        return $this;
    }
    
    /**
     * Any packing costs that are associated with this shipment.
     *
     * @param Money $PackingCosts
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
     * @param Money $HandlingCosts
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
     * @param string $SpecialInstructions
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
     * @param string $DeclarationStatment
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
     * @param string $PaymentTerms
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
     * @param PurposeOfShipmentType $Purpose
     * return CommercialInvoice
     */
    public function setPurpose(\FedEx\RateService\SimpleType\PurposeOfShipmentType $purpose)
    {
        $this->Purpose = $purpose;
        return $this;
    }
    
    /**
     * Customer assigned Invoice number
     *
     * @param string $CustomerInvoiceNumber
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
     * @param string $OriginatorName
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
     * @param TermsOfSaleType $TermsOfSale
     * return CommercialInvoice
     */
    public function setTermsOfSale(\FedEx\RateService\SimpleType\TermsOfSaleType $termsOfSale)
    {
        $this->TermsOfSale = $termsOfSale;
        return $this;
    }
    

    
}