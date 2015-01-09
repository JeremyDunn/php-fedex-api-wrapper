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
     * @return ShippingDocumentSpecification
     */
    public function setShippingDocumentTypes(array $shippingDocumentTypes)
    {
        $this->ShippingDocumentTypes = $shippingDocumentTypes;
        return $this;
    }
    
    /**
     * Returns Indicates the types of shipping documents requested by the shipper.
     *
     * @return RequestedShippingDocumentType[]
     */
    public function getShippingDocumentTypes()
    {
        return $this->ShippingDocumentTypes;
    }
    
    /**
     * Set CertificateOfOrigin
     *
     * @param CertificateOfOriginDetail $certificateOfOrigin
     * @return ShippingDocumentSpecification
     */
    public function setCertificateOfOrigin(CertificateOfOriginDetail $certificateOfOrigin)
    {
        $this->CertificateOfOrigin = $certificateOfOrigin;
        return $this;
    }
    
    /**
     * Returns Set CertificateOfOrigin
     *
     * @return CertificateOfOriginDetail
     */
    public function getCertificateOfOrigin()
    {
        return $this->CertificateOfOrigin;
    }
    
    /**
     * Set CommercialInvoiceDetail
     *
     * @param CommercialInvoiceDetail $commercialInvoiceDetail
     * @return ShippingDocumentSpecification
     */
    public function setCommercialInvoiceDetail(CommercialInvoiceDetail $commercialInvoiceDetail)
    {
        $this->CommercialInvoiceDetail = $commercialInvoiceDetail;
        return $this;
    }
    
    /**
     * Returns Set CommercialInvoiceDetail
     *
     * @return CommercialInvoiceDetail
     */
    public function getCommercialInvoiceDetail()
    {
        return $this->CommercialInvoiceDetail;
    }
    
    /**
     * Specifies the production of each package-level custom document (the same specification is used for all packages).
     *
     * @param CustomDocumentDetail[] $customPackageDocumentDetail
     * @return ShippingDocumentSpecification
     */
    public function setCustomPackageDocumentDetail(array $customPackageDocumentDetail)
    {
        $this->CustomPackageDocumentDetail = $customPackageDocumentDetail;
        return $this;
    }
    
    /**
     * Returns Specifies the production of each package-level custom document (the same specification is used for all packages).
     *
     * @return CustomDocumentDetail[]
     */
    public function getCustomPackageDocumentDetail()
    {
        return $this->CustomPackageDocumentDetail;
    }
    
    /**
     * Specifies the production of a shipment-level custom document.
     *
     * @param CustomDocumentDetail[] $customShipmentDocumentDetail
     * @return ShippingDocumentSpecification
     */
    public function setCustomShipmentDocumentDetail(array $customShipmentDocumentDetail)
    {
        $this->CustomShipmentDocumentDetail = $customShipmentDocumentDetail;
        return $this;
    }
    
    /**
     * Returns Specifies the production of a shipment-level custom document.
     *
     * @return CustomDocumentDetail[]
     */
    public function getCustomShipmentDocumentDetail()
    {
        return $this->CustomShipmentDocumentDetail;
    }
    
    /**
     * This element is currently not supported and is for the future use. (Details pertaining to the GAA.)
     *
     * @param GeneralAgencyAgreementDetail $generalAgencyAgreementDetail
     * @return ShippingDocumentSpecification
     */
    public function setGeneralAgencyAgreementDetail(GeneralAgencyAgreementDetail $generalAgencyAgreementDetail)
    {
        $this->GeneralAgencyAgreementDetail = $generalAgencyAgreementDetail;
        return $this;
    }
    
    /**
     * Returns This element is currently not supported and is for the future use. (Details pertaining to the GAA.)
     *
     * @return GeneralAgencyAgreementDetail
     */
    public function getGeneralAgencyAgreementDetail()
    {
        return $this->GeneralAgencyAgreementDetail;
    }
    
    /**
     * Set NaftaCertificateOfOriginDetail
     *
     * @param NaftaCertificateOfOriginDetail $naftaCertificateOfOriginDetail
     * @return ShippingDocumentSpecification
     */
    public function setNaftaCertificateOfOriginDetail(NaftaCertificateOfOriginDetail $naftaCertificateOfOriginDetail)
    {
        $this->NaftaCertificateOfOriginDetail = $naftaCertificateOfOriginDetail;
        return $this;
    }
    
    /**
     * Returns Set NaftaCertificateOfOriginDetail
     *
     * @return NaftaCertificateOfOriginDetail
     */
    public function getNaftaCertificateOfOriginDetail()
    {
        return $this->NaftaCertificateOfOriginDetail;
    }
    
    /**
     * Specifies the production of the OP-900 document for hazardous materials packages.
     *
     * @param Op900Detail $op900Detail
     * @return ShippingDocumentSpecification
     */
    public function setOp900Detail(Op900Detail $op900Detail)
    {
        $this->Op900Detail = $op900Detail;
        return $this;
    }
    
    /**
     * Returns Specifies the production of the OP-900 document for hazardous materials packages.
     *
     * @return Op900Detail
     */
    public function getOp900Detail()
    {
        return $this->Op900Detail;
    }
    
    /**
     * Specifies the production of the 1421c document for dangerous goods shipment.
     *
     * @param DangerousGoodsShippersDeclarationDetail $dangerousGoodsShippersDeclarationDetail
     * @return ShippingDocumentSpecification
     */
    public function setDangerousGoodsShippersDeclarationDetail(DangerousGoodsShippersDeclarationDetail $dangerousGoodsShippersDeclarationDetail)
    {
        $this->DangerousGoodsShippersDeclarationDetail = $dangerousGoodsShippersDeclarationDetail;
        return $this;
    }
    
    /**
     * Returns Specifies the production of the 1421c document for dangerous goods shipment.
     *
     * @return DangerousGoodsShippersDeclarationDetail
     */
    public function getDangerousGoodsShippersDeclarationDetail()
    {
        return $this->DangerousGoodsShippersDeclarationDetail;
    }
    
    /**
     * Specifies the production of the OP-900 document for hazardous materials.
     *
     * @param FreightAddressLabelDetail $freightAddressLabelDetail
     * @return ShippingDocumentSpecification
     */
    public function setFreightAddressLabelDetail(FreightAddressLabelDetail $freightAddressLabelDetail)
    {
        $this->FreightAddressLabelDetail = $freightAddressLabelDetail;
        return $this;
    }
    
    /**
     * Returns Specifies the production of the OP-900 document for hazardous materials.
     *
     * @return FreightAddressLabelDetail
     */
    public function getFreightAddressLabelDetail()
    {
        return $this->FreightAddressLabelDetail;
    }
    
    /**
     * Specifies the production of the return instructions document.
     *
     * @param ReturnInstructionsDetail $returnInstructionsDetail
     * @return ShippingDocumentSpecification
     */
    public function setReturnInstructionsDetail(ReturnInstructionsDetail $returnInstructionsDetail)
    {
        $this->ReturnInstructionsDetail = $returnInstructionsDetail;
        return $this;
    }
    
    /**
     * Returns Specifies the production of the return instructions document.
     *
     * @return ReturnInstructionsDetail
     */
    public function getReturnInstructionsDetail()
    {
        return $this->ReturnInstructionsDetail;
    }
    

    
}