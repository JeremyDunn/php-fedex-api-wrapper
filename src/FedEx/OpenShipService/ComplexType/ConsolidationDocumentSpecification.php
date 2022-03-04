<?php
namespace FedEx\OpenShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Contains all data required for (non-label) documents to be produced in conjunction with a specific international distribution consolidation.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  OpenShip Service
 *
 * @property \FedEx\OpenShipService\SimpleType\RequestedConsolidationDocumentType|string[] $ConsolidationDocumentTypes
 * @property CondensedCrnReportDetail $CondensedCrnReportDetail
 * @property ConsolidatedCommercialInvoiceDetail $ConsolidatedCommercialInvoiceDetail
 * @property CustomConsolidationDocumentDetail[] $CustomDocumentDetails
 * @property ConsolidationCustomsLinehaulReportDetail $ConsolidatedCustomsLinehaulReportDetail
 * @property ConsolidatedPartyReportDetail $ConsolidatedPartyReportDetail
 * @property ConsolidatedSoldToSummaryReportDetail $ConsolidatedSoldToSummaryReportDetail
 * @property CustomsPackingListDetail $CustomsPackingListDetail
 * @property CrnReportDetail $CrnReportDetail
 * @property CommoditiesByTrackingNumberReportDetail $CommoditiesByTrackingNumberDetail

 */
class ConsolidationDocumentSpecification extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ConsolidationDocumentSpecification';

    /**
     * Indicates the types of international distribution documents requested by the shipper.
     *
     * @param \FedEx\OpenShipService\SimpleType\RequestedConsolidationDocumentType[]|string[] $consolidationDocumentTypes
     * @return $this
     */
    public function setConsolidationDocumentTypes(array $consolidationDocumentTypes)
    {
        $this->values['ConsolidationDocumentTypes'] = $consolidationDocumentTypes;
        return $this;
    }

    /**
     * Specifies the production of the short form of the Child Reference Number document.
     *
     * @param CondensedCrnReportDetail $condensedCrnReportDetail
     * @return $this
     */
    public function setCondensedCrnReportDetail(CondensedCrnReportDetail $condensedCrnReportDetail)
    {
        $this->values['CondensedCrnReportDetail'] = $condensedCrnReportDetail;
        return $this;
    }

    /**
     * Specifies the production of the consolidated commercial invoice document.
     *
     * @param ConsolidatedCommercialInvoiceDetail $consolidatedCommercialInvoiceDetail
     * @return $this
     */
    public function setConsolidatedCommercialInvoiceDetail(ConsolidatedCommercialInvoiceDetail $consolidatedCommercialInvoiceDetail)
    {
        $this->values['ConsolidatedCommercialInvoiceDetail'] = $consolidatedCommercialInvoiceDetail;
        return $this;
    }

    /**
     * Specifies the production of the consolidation-level custom documents.
     *
     * @param CustomConsolidationDocumentDetail[] $customDocumentDetails
     * @return $this
     */
    public function setCustomDocumentDetails(array $customDocumentDetails)
    {
        $this->values['CustomDocumentDetails'] = $customDocumentDetails;
        return $this;
    }

    /**
     * Set ConsolidatedCustomsLinehaulReportDetail
     *
     * @param ConsolidationCustomsLinehaulReportDetail $consolidatedCustomsLinehaulReportDetail
     * @return $this
     */
    public function setConsolidatedCustomsLinehaulReportDetail(ConsolidationCustomsLinehaulReportDetail $consolidatedCustomsLinehaulReportDetail)
    {
        $this->values['ConsolidatedCustomsLinehaulReportDetail'] = $consolidatedCustomsLinehaulReportDetail;
        return $this;
    }

    /**
     * Set ConsolidatedPartyReportDetail
     *
     * @param ConsolidatedPartyReportDetail $consolidatedPartyReportDetail
     * @return $this
     */
    public function setConsolidatedPartyReportDetail(ConsolidatedPartyReportDetail $consolidatedPartyReportDetail)
    {
        $this->values['ConsolidatedPartyReportDetail'] = $consolidatedPartyReportDetail;
        return $this;
    }

    /**
     * Set ConsolidatedSoldToSummaryReportDetail
     *
     * @param ConsolidatedSoldToSummaryReportDetail $consolidatedSoldToSummaryReportDetail
     * @return $this
     */
    public function setConsolidatedSoldToSummaryReportDetail(ConsolidatedSoldToSummaryReportDetail $consolidatedSoldToSummaryReportDetail)
    {
        $this->values['ConsolidatedSoldToSummaryReportDetail'] = $consolidatedSoldToSummaryReportDetail;
        return $this;
    }

    /**
     * Specifies the production of the consolidation-level customs packing list.
     *
     * @param CustomsPackingListDetail $customsPackingListDetail
     * @return $this
     */
    public function setCustomsPackingListDetail(CustomsPackingListDetail $customsPackingListDetail)
    {
        $this->values['CustomsPackingListDetail'] = $customsPackingListDetail;
        return $this;
    }

    /**
     * Specifies the production of the Child Reference Number document.
     *
     * @param CrnReportDetail $crnReportDetail
     * @return $this
     */
    public function setCrnReportDetail(CrnReportDetail $crnReportDetail)
    {
        $this->values['CrnReportDetail'] = $crnReportDetail;
        return $this;
    }

    /**
     * Set CommoditiesByTrackingNumberDetail
     *
     * @param CommoditiesByTrackingNumberReportDetail $commoditiesByTrackingNumberDetail
     * @return $this
     */
    public function setCommoditiesByTrackingNumberDetail(CommoditiesByTrackingNumberReportDetail $commoditiesByTrackingNumberDetail)
    {
        $this->values['CommoditiesByTrackingNumberDetail'] = $commoditiesByTrackingNumberDetail;
        return $this;
    }
}
