<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * CommercialInvoice element is required for electronic upload of CI data. It will serve to create/transmit an Electronic Commercial Invoice through the FedEx Systems. Customers are responsible for printing their own Commercial Invoice.If you would likeFedEx to generate a Commercial Invoice and transmit it to Customs. for clearance purposes, you need to specify that in the ShippingDocumentSpecification element. If you would like a copy of the Commercial Invoice that FedEx generated returned to you in reply it needs to be specified in the ETDDetail/RequestedDocumentCopies element. Commercial Invoice support consists of maximum of 99 commodity line items.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
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
     * @return CommercialInvoice
     */
    public function setComments(array $comments)
    {
        $this->Comments = $comments;
        return $this;
    }
    
    /**
     * Returns Any comments that need to be communicated about this shipment.
     *
     * @return string[]
     */
    public function getComments()
    {
        return $this->Comments;
    }
    
    /**
     * Any freight charges that are associated with this shipment.
     *
     * @param Money $freightCharge
     * @return CommercialInvoice
     */
    public function setFreightCharge(Money $freightCharge)
    {
        $this->FreightCharge = $freightCharge;
        return $this;
    }
    
    /**
     * Returns Any freight charges that are associated with this shipment.
     *
     * @return Money
     */
    public function getFreightCharge()
    {
        return $this->FreightCharge;
    }
    
    /**
     * Any taxes or miscellaneous charges(other than Freight charges or Insurance charges) that are associated with this shipment.
     *
     * @param Money $taxesOrMiscellaneousCharge
     * @return CommercialInvoice
     */
    public function setTaxesOrMiscellaneousCharge(Money $taxesOrMiscellaneousCharge)
    {
        $this->TaxesOrMiscellaneousCharge = $taxesOrMiscellaneousCharge;
        return $this;
    }
    
    /**
     * Returns Any taxes or miscellaneous charges(other than Freight charges or Insurance charges) that are associated with this shipment.
     *
     * @return Money
     */
    public function getTaxesOrMiscellaneousCharge()
    {
        return $this->TaxesOrMiscellaneousCharge;
    }
    
    /**
     * Specifies which kind of charge is being recorded in the preceding field.
     *
     * @param \FedEx\ShipService\SimpleType\TaxesOrMiscellaneousChargeType|string $taxesOrMiscellaneousChargeType
     * @return CommercialInvoice
     */
    public function setTaxesOrMiscellaneousChargeType($taxesOrMiscellaneousChargeType)
    {
        $this->TaxesOrMiscellaneousChargeType = $taxesOrMiscellaneousChargeType;
        return $this;
    }
    
    /**
     * Returns Specifies which kind of charge is being recorded in the preceding field.
     *
     * @return \FedEx\ShipService\SimpleType\TaxesOrMiscellaneousChargeType|string
     */
    public function getTaxesOrMiscellaneousChargeType()
    {
        return $this->TaxesOrMiscellaneousChargeType;
    }
    
    /**
     * Any packing costs that are associated with this shipment.
     *
     * @param Money $packingCosts
     * @return CommercialInvoice
     */
    public function setPackingCosts(Money $packingCosts)
    {
        $this->PackingCosts = $packingCosts;
        return $this;
    }
    
    /**
     * Returns Any packing costs that are associated with this shipment.
     *
     * @return Money
     */
    public function getPackingCosts()
    {
        return $this->PackingCosts;
    }
    
    /**
     * Any handling costs that are associated with this shipment.
     *
     * @param Money $handlingCosts
     * @return CommercialInvoice
     */
    public function setHandlingCosts(Money $handlingCosts)
    {
        $this->HandlingCosts = $handlingCosts;
        return $this;
    }
    
    /**
     * Returns Any handling costs that are associated with this shipment.
     *
     * @return Money
     */
    public function getHandlingCosts()
    {
        return $this->HandlingCosts;
    }
    
    /**
     * Free-form text.
     *
     * @param string $specialInstructions
     * @return CommercialInvoice
     */
    public function setSpecialInstructions($specialInstructions)
    {
        $this->SpecialInstructions = $specialInstructions;
        return $this;
    }
    
    /**
     * Returns Free-form text.
     *
     * @return string
     */
    public function getSpecialInstructions()
    {
        return $this->SpecialInstructions;
    }
    
    /**
     * Free-form text.
     *
     * @param string $declarationStatement
     * @return CommercialInvoice
     */
    public function setDeclarationStatement($declarationStatement)
    {
        $this->DeclarationStatement = $declarationStatement;
        return $this;
    }
    
    /**
     * Returns Free-form text.
     *
     * @return string
     */
    public function getDeclarationStatement()
    {
        return $this->DeclarationStatement;
    }
    
    /**
     * Free-form text.
     *
     * @param string $paymentTerms
     * @return CommercialInvoice
     */
    public function setPaymentTerms($paymentTerms)
    {
        $this->PaymentTerms = $paymentTerms;
        return $this;
    }
    
    /**
     * Returns Free-form text.
     *
     * @return string
     */
    public function getPaymentTerms()
    {
        return $this->PaymentTerms;
    }
    
    /**
     * The reason for the shipment. Note: SOLD is not a valid purpose for a Proforma Invoice.
     *
     * @param \FedEx\ShipService\SimpleType\PurposeOfShipmentType|string $purpose
     * @return CommercialInvoice
     */
    public function setPurpose($purpose)
    {
        $this->Purpose = $purpose;
        return $this;
    }
    
    /**
     * Returns The reason for the shipment. Note: SOLD is not a valid purpose for a Proforma Invoice.
     *
     * @return \FedEx\ShipService\SimpleType\PurposeOfShipmentType|string
     */
    public function getPurpose()
    {
        return $this->Purpose;
    }
    
    /**
     * Additional customer reference data.
     *
     * @param CustomerReference[] $customerReferences
     * @return CommercialInvoice
     */
    public function setCustomerReferences(array $customerReferences)
    {
        $this->CustomerReferences = $customerReferences;
        return $this;
    }
    
    /**
     * Returns Additional customer reference data.
     *
     * @return CustomerReference[]
     */
    public function getCustomerReferences()
    {
        return $this->CustomerReferences;
    }
    
    /**
     * Name of the International Expert that completed the Commercial Invoice different from Sender.
     *
     * @param string $originatorName
     * @return CommercialInvoice
     */
    public function setOriginatorName($originatorName)
    {
        $this->OriginatorName = $originatorName;
        return $this;
    }
    
    /**
     * Returns Name of the International Expert that completed the Commercial Invoice different from Sender.
     *
     * @return string
     */
    public function getOriginatorName()
    {
        return $this->OriginatorName;
    }
    
    /**
     * Required for dutiable international Express or Ground shipment. This field is not applicable to an international PIB(document) or a non-document which does not require a Commercial Invoice
     *
     * @param \FedEx\ShipService\SimpleType\TermsOfSaleType|string $termsOfSale
     * @return CommercialInvoice
     */
    public function setTermsOfSale($termsOfSale)
    {
        $this->TermsOfSale = $termsOfSale;
        return $this;
    }
    
    /**
     * Returns Required for dutiable international Express or Ground shipment. This field is not applicable to an international PIB(document) or a non-document which does not require a Commercial Invoice
     *
     * @return \FedEx\ShipService\SimpleType\TermsOfSaleType|string
     */
    public function getTermsOfSale()
    {
        return $this->TermsOfSale;
    }
    

    
}