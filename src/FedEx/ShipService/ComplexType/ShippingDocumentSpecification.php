<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Contains all data required for additional (non-label) shipping documents to be produced in conjunction with a specific shipment.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 *
 * @property \FedEx\ShipService\SimpleType\RequestedShippingDocumentType|string[] $ShippingDocumentTypes
 * @property CertificateOfOriginDetail $CertificateOfOrigin
 * @property CommercialInvoiceDetail $CommercialInvoiceDetail
 * @property CustomDocumentDetail[] $CustomPackageDocumentDetail
 * @property CustomDocumentDetail[] $CustomShipmentDocumentDetail
 * @property ExportDeclarationDetail $ExportDeclarationDetail
 * @property GeneralAgencyAgreementDetail $GeneralAgencyAgreementDetail
 * @property NaftaCertificateOfOriginDetail $NaftaCertificateOfOriginDetail
 * @property Op900Detail $Op900Detail
 * @property DangerousGoodsShippersDeclarationDetail $DangerousGoodsShippersDeclarationDetail
 * @property FreightAddressLabelDetail $FreightAddressLabelDetail
 * @property FreightBillOfLadingDetail $FreightBillOfLadingDetail
 * @property ReturnInstructionsDetail $ReturnInstructionsDetail

 */
class ShippingDocumentSpecification extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShippingDocumentSpecification';

    /**
     * Indicates the types of shipping documents requested by the shipper.
     *
     * @param \FedEx\ShipService\SimpleType\RequestedShippingDocumentType[]|string[] $shippingDocumentTypes
     * @return $this
     */
    public function setShippingDocumentTypes(array $shippingDocumentTypes)
    {
        $this->values['ShippingDocumentTypes'] = $shippingDocumentTypes;
        return $this;
    }

    /**
     * Set CertificateOfOrigin
     *
     * @param CertificateOfOriginDetail $certificateOfOrigin
     * @return $this
     */
    public function setCertificateOfOrigin(CertificateOfOriginDetail $certificateOfOrigin)
    {
        $this->values['CertificateOfOrigin'] = $certificateOfOrigin;
        return $this;
    }

    /**
     * Set CommercialInvoiceDetail
     *
     * @param CommercialInvoiceDetail $commercialInvoiceDetail
     * @return $this
     */
    public function setCommercialInvoiceDetail(CommercialInvoiceDetail $commercialInvoiceDetail)
    {
        $this->values['CommercialInvoiceDetail'] = $commercialInvoiceDetail;
        return $this;
    }

    /**
     * Specifies the production of each package-level custom document (the same specification is used for all packages).
     *
     * @param CustomDocumentDetail[] $customPackageDocumentDetail
     * @return $this
     */
    public function setCustomPackageDocumentDetail(array $customPackageDocumentDetail)
    {
        $this->values['CustomPackageDocumentDetail'] = $customPackageDocumentDetail;
        return $this;
    }

    /**
     * Specifies the production of a shipment-level custom document.
     *
     * @param CustomDocumentDetail[] $customShipmentDocumentDetail
     * @return $this
     */
    public function setCustomShipmentDocumentDetail(array $customShipmentDocumentDetail)
    {
        $this->values['CustomShipmentDocumentDetail'] = $customShipmentDocumentDetail;
        return $this;
    }

    /**
     * Set ExportDeclarationDetail
     *
     * @param ExportDeclarationDetail $exportDeclarationDetail
     * @return $this
     */
    public function setExportDeclarationDetail(ExportDeclarationDetail $exportDeclarationDetail)
    {
        $this->values['ExportDeclarationDetail'] = $exportDeclarationDetail;
        return $this;
    }

    /**
     * Set GeneralAgencyAgreementDetail
     *
     * @param GeneralAgencyAgreementDetail $generalAgencyAgreementDetail
     * @return $this
     */
    public function setGeneralAgencyAgreementDetail(GeneralAgencyAgreementDetail $generalAgencyAgreementDetail)
    {
        $this->values['GeneralAgencyAgreementDetail'] = $generalAgencyAgreementDetail;
        return $this;
    }

    /**
     * Set NaftaCertificateOfOriginDetail
     *
     * @param NaftaCertificateOfOriginDetail $naftaCertificateOfOriginDetail
     * @return $this
     */
    public function setNaftaCertificateOfOriginDetail(NaftaCertificateOfOriginDetail $naftaCertificateOfOriginDetail)
    {
        $this->values['NaftaCertificateOfOriginDetail'] = $naftaCertificateOfOriginDetail;
        return $this;
    }

    /**
     * Specifies the production of the OP-900 document for hazardous materials packages.
     *
     * @param Op900Detail $op900Detail
     * @return $this
     */
    public function setOp900Detail(Op900Detail $op900Detail)
    {
        $this->values['Op900Detail'] = $op900Detail;
        return $this;
    }

    /**
     * Specifies the production of the 1421c document for dangerous goods shipment.
     *
     * @param DangerousGoodsShippersDeclarationDetail $dangerousGoodsShippersDeclarationDetail
     * @return $this
     */
    public function setDangerousGoodsShippersDeclarationDetail(DangerousGoodsShippersDeclarationDetail $dangerousGoodsShippersDeclarationDetail)
    {
        $this->values['DangerousGoodsShippersDeclarationDetail'] = $dangerousGoodsShippersDeclarationDetail;
        return $this;
    }

    /**
     * Specifies the production of the OP-900 document for hazardous materials.
     *
     * @param FreightAddressLabelDetail $freightAddressLabelDetail
     * @return $this
     */
    public function setFreightAddressLabelDetail(FreightAddressLabelDetail $freightAddressLabelDetail)
    {
        $this->values['FreightAddressLabelDetail'] = $freightAddressLabelDetail;
        return $this;
    }

    /**
     * Set FreightBillOfLadingDetail
     *
     * @param FreightBillOfLadingDetail $freightBillOfLadingDetail
     * @return $this
     */
    public function setFreightBillOfLadingDetail(FreightBillOfLadingDetail $freightBillOfLadingDetail)
    {
        $this->values['FreightBillOfLadingDetail'] = $freightBillOfLadingDetail;
        return $this;
    }

    /**
     * Specifies the production of the return instructions document.
     *
     * @param ReturnInstructionsDetail $returnInstructionsDetail
     * @return $this
     */
    public function setReturnInstructionsDetail(ReturnInstructionsDetail $returnInstructionsDetail)
    {
        $this->values['ReturnInstructionsDetail'] = $returnInstructionsDetail;
        return $this;
    }
}
