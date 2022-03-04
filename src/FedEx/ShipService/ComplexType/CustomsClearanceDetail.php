<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * CustomsClearanceDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 *
 * @property BrokerDetail[] $Brokers
 * @property \FedEx\ShipService\SimpleType\ClearanceBrokerageType|string $ClearanceBrokerage
 * @property CustomsOptionDetail $CustomsOptions
 * @property Party $ImporterOfRecord
 * @property RecipientCustomsId $RecipientCustomsId
 * @property Payment $DutiesPayment
 * @property \FedEx\ShipService\SimpleType\InternationalDocumentContentType|string $DocumentContent
 * @property Money $CustomsValue
 * @property \FedEx\ShipService\SimpleType\FreightOnValueType|string $FreightOnValue
 * @property Money $InsuranceCharges
 * @property boolean $PartiesToTransactionAreRelated
 * @property CommercialInvoice $CommercialInvoice
 * @property Commodity[] $Commodities
 * @property ExportDetail $ExportDetail
 * @property \FedEx\ShipService\SimpleType\RegulatoryControlType|string[] $RegulatoryControls
 * @property CustomsDeclarationStatementDetail $DeclarationStatementDetail

 */
class CustomsClearanceDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'CustomsClearanceDetail';

    /**
     * Set Brokers
     *
     * @param BrokerDetail[] $brokers
     * @return $this
     */
    public function setBrokers(array $brokers)
    {
        $this->values['Brokers'] = $brokers;
        return $this;
    }

    /**
     * Interacts both with properties of the shipment and contractual relationship with the shipper.
     *
     * @param \FedEx\ShipService\SimpleType\ClearanceBrokerageType|string $clearanceBrokerage
     * @return $this
     */
    public function setClearanceBrokerage($clearanceBrokerage)
    {
        $this->values['ClearanceBrokerage'] = $clearanceBrokerage;
        return $this;
    }

    /**
     * Set CustomsOptions
     *
     * @param CustomsOptionDetail $customsOptions
     * @return $this
     */
    public function setCustomsOptions(CustomsOptionDetail $customsOptions)
    {
        $this->values['CustomsOptions'] = $customsOptions;
        return $this;
    }

    /**
     * Set ImporterOfRecord
     *
     * @param Party $importerOfRecord
     * @return $this
     */
    public function setImporterOfRecord(Party $importerOfRecord)
    {
        $this->values['ImporterOfRecord'] = $importerOfRecord;
        return $this;
    }

    /**
     * Specifies how the recipient is identified for customs purposes; the requirements on this information vary with destination country.
     *
     * @param RecipientCustomsId $recipientCustomsId
     * @return $this
     */
    public function setRecipientCustomsId(RecipientCustomsId $recipientCustomsId)
    {
        $this->values['RecipientCustomsId'] = $recipientCustomsId;
        return $this;
    }

    /**
     * Set DutiesPayment
     *
     * @param Payment $dutiesPayment
     * @return $this
     */
    public function setDutiesPayment(Payment $dutiesPayment)
    {
        $this->values['DutiesPayment'] = $dutiesPayment;
        return $this;
    }

    /**
     * Set DocumentContent
     *
     * @param \FedEx\ShipService\SimpleType\InternationalDocumentContentType|string $documentContent
     * @return $this
     */
    public function setDocumentContent($documentContent)
    {
        $this->values['DocumentContent'] = $documentContent;
        return $this;
    }

    /**
     * This represents the total commodity value of the shipment plus the charges required by the destination country.
     *
     * @param Money $customsValue
     * @return $this
     */
    public function setCustomsValue(Money $customsValue)
    {
        $this->values['CustomsValue'] = $customsValue;
        return $this;
    }

    /**
     * Identifies responsibilities with respect to loss, damage, etc.
     *
     * @param \FedEx\ShipService\SimpleType\FreightOnValueType|string $freightOnValue
     * @return $this
     */
    public function setFreightOnValue($freightOnValue)
    {
        $this->values['FreightOnValue'] = $freightOnValue;
        return $this;
    }

    /**
     * Documents amount paid to third party for coverage of shipment content.
     *
     * @param Money $insuranceCharges
     * @return $this
     */
    public function setInsuranceCharges(Money $insuranceCharges)
    {
        $this->values['InsuranceCharges'] = $insuranceCharges;
        return $this;
    }

    /**
     * Set PartiesToTransactionAreRelated
     *
     * @param boolean $partiesToTransactionAreRelated
     * @return $this
     */
    public function setPartiesToTransactionAreRelated($partiesToTransactionAreRelated)
    {
        $this->values['PartiesToTransactionAreRelated'] = $partiesToTransactionAreRelated;
        return $this;
    }

    /**
     * Set CommercialInvoice
     *
     * @param CommercialInvoice $commercialInvoice
     * @return $this
     */
    public function setCommercialInvoice(CommercialInvoice $commercialInvoice)
    {
        $this->values['CommercialInvoice'] = $commercialInvoice;
        return $this;
    }

    /**
     * Set Commodities
     *
     * @param Commodity[] $commodities
     * @return $this
     */
    public function setCommodities(array $commodities)
    {
        $this->values['Commodities'] = $commodities;
        return $this;
    }

    /**
     * Set ExportDetail
     *
     * @param ExportDetail $exportDetail
     * @return $this
     */
    public function setExportDetail(ExportDetail $exportDetail)
    {
        $this->values['ExportDetail'] = $exportDetail;
        return $this;
    }

    /**
     * Set RegulatoryControls
     *
     * @param \FedEx\ShipService\SimpleType\RegulatoryControlType[]|string[] $regulatoryControls
     * @return $this
     */
    public function setRegulatoryControls(array $regulatoryControls)
    {
        $this->values['RegulatoryControls'] = $regulatoryControls;
        return $this;
    }

    /**
     * Set DeclarationStatementDetail
     *
     * @param CustomsDeclarationStatementDetail $declarationStatementDetail
     * @return $this
     */
    public function setDeclarationStatementDetail(CustomsDeclarationStatementDetail $declarationStatementDetail)
    {
        $this->values['DeclarationStatementDetail'] = $declarationStatementDetail;
        return $this;
    }
}
