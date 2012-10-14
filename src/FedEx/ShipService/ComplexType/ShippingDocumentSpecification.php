<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Contains all data required for additional (non-label) shipping documents to be produced in conjunction with a specific shipment.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class ShippingDocumentSpecification
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'ShippingDocumentSpecification';

    /**
     * Indicates the types of shipping documents requested by the shipper.
     *
     * @param RequestedShippingDocumentType[] $shippingDocumentTypes
     * return ShippingDocumentSpecification
     */
    public function setShippingDocumentTypes(array $shippingDocumentTypes)
    {
        $this->ShippingDocumentTypes = $shippingDocumentTypes;
        return $this;
    }
    
    /**
     * Set CertificateOfOrigin
     *
     * @param CertificateOfOriginDetail $certificateOfOrigin
     * return ShippingDocumentSpecification
     */
    public function setCertificateOfOrigin(CertificateOfOriginDetail $certificateOfOrigin)
    {
        $this->CertificateOfOrigin = $certificateOfOrigin;
        return $this;
    }
    
    /**
     * Set CommercialInvoiceDetail
     *
     * @param CommercialInvoiceDetail $commercialInvoiceDetail
     * return ShippingDocumentSpecification
     */
    public function setCommercialInvoiceDetail(CommercialInvoiceDetail $commercialInvoiceDetail)
    {
        $this->CommercialInvoiceDetail = $commercialInvoiceDetail;
        return $this;
    }
    
    /**
     * Specifies the production of each package-level custom document (the same specification is used for all packages).
     *
     * @param CustomDocumentDetail[] $customPackageDocumentDetail
     * return ShippingDocumentSpecification
     */
    public function setCustomPackageDocumentDetail(array $customPackageDocumentDetail)
    {
        $this->CustomPackageDocumentDetail = $customPackageDocumentDetail;
        return $this;
    }
    
    /**
     * Specifies the production of a shipment-level custom document.
     *
     * @param CustomDocumentDetail[] $customShipmentDocumentDetail
     * return ShippingDocumentSpecification
     */
    public function setCustomShipmentDocumentDetail(array $customShipmentDocumentDetail)
    {
        $this->CustomShipmentDocumentDetail = $customShipmentDocumentDetail;
        return $this;
    }
    
    /**
     * This element is currently not supported and is for the future use. (Details pertaining to the GAA.)
     *
     * @param GeneralAgencyAgreementDetail $generalAgencyAgreementDetail
     * return ShippingDocumentSpecification
     */
    public function setGeneralAgencyAgreementDetail(GeneralAgencyAgreementDetail $generalAgencyAgreementDetail)
    {
        $this->GeneralAgencyAgreementDetail = $generalAgencyAgreementDetail;
        return $this;
    }
    
    /**
     * Set NaftaCertificateOfOriginDetail
     *
     * @param NaftaCertificateOfOriginDetail $naftaCertificateOfOriginDetail
     * return ShippingDocumentSpecification
     */
    public function setNaftaCertificateOfOriginDetail(NaftaCertificateOfOriginDetail $naftaCertificateOfOriginDetail)
    {
        $this->NaftaCertificateOfOriginDetail = $naftaCertificateOfOriginDetail;
        return $this;
    }
    
    /**
     * Specifies the production of the OP-900 document for hazardous materials packages.
     *
     * @param Op900Detail $op900Detail
     * return ShippingDocumentSpecification
     */
    public function setOp900Detail(Op900Detail $op900Detail)
    {
        $this->Op900Detail = $op900Detail;
        return $this;
    }
    
    /**
     * Specifies the production of the 1421c document for dangerous goods shipment.
     *
     * @param DangerousGoodsShippersDeclarationDetail $dangerousGoodsShippersDeclarationDetail
     * return ShippingDocumentSpecification
     */
    public function setDangerousGoodsShippersDeclarationDetail(DangerousGoodsShippersDeclarationDetail $dangerousGoodsShippersDeclarationDetail)
    {
        $this->DangerousGoodsShippersDeclarationDetail = $dangerousGoodsShippersDeclarationDetail;
        return $this;
    }
    
    /**
     * Specifies the production of the OP-900 document for hazardous materials.
     *
     * @param FreightAddressLabelDetail $freightAddressLabelDetail
     * return ShippingDocumentSpecification
     */
    public function setFreightAddressLabelDetail(FreightAddressLabelDetail $freightAddressLabelDetail)
    {
        $this->FreightAddressLabelDetail = $freightAddressLabelDetail;
        return $this;
    }
    
    /**
     * Specifies the production of the return instructions document.
     *
     * @param ReturnInstructionsDetail $returnInstructionsDetail
     * return ShippingDocumentSpecification
     */
    public function setReturnInstructionsDetail(ReturnInstructionsDetail $returnInstructionsDetail)
    {
        $this->ReturnInstructionsDetail = $returnInstructionsDetail;
        return $this;
    }
    

    
}