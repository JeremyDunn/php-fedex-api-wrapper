<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Contains all data required for additional (non-label) shipping documents to be produced in conjunction with a specific shipment.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class ShippingDocumentSpecification
    extends AbstractComplexType
{
    protected $_name = 'ShippingDocumentSpecification';

    /**
     * Indicates the types of shipping documents requested by the shipper.
     *
     * @param array[RequestedShippingDocumentType] $ShippingDocumentTypes
     * return ShippingDocumentSpecification
     */
    public function setShippingDocumentTypes(array $shippingDocumentTypes)
    {
        $this->ShippingDocumentTypes = $shippingDocumentTypes;
        return $this;
    }
    
    /**
     * 
     *
     * @param CertificateOfOriginDetail $CertificateOfOrigin
     * return ShippingDocumentSpecification
     */
    public function setCertificateOfOrigin(CertificateOfOriginDetail $certificateOfOrigin)
    {
        $this->CertificateOfOrigin = $certificateOfOrigin;
        return $this;
    }
    
    /**
     * 
     *
     * @param CommercialInvoiceDetail $CommercialInvoiceDetail
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
     * @param array[CustomDocumentDetail] $CustomPackageDocumentDetail
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
     * @param array[CustomDocumentDetail] $CustomShipmentDocumentDetail
     * return ShippingDocumentSpecification
     */
    public function setCustomShipmentDocumentDetail(array $customShipmentDocumentDetail)
    {
        $this->CustomShipmentDocumentDetail = $customShipmentDocumentDetail;
        return $this;
    }
    
    /**
     * Details pertaining to the GAA.
     *
     * @param GeneralAgencyAgreementDetail $GeneralAgencyAgreementDetail
     * return ShippingDocumentSpecification
     */
    public function setGeneralAgencyAgreementDetail(GeneralAgencyAgreementDetail $generalAgencyAgreementDetail)
    {
        $this->GeneralAgencyAgreementDetail = $generalAgencyAgreementDetail;
        return $this;
    }
    
    /**
     * Details pertaining to NAFTA COO.
     *
     * @param NaftaCertificateOfOriginDetail $NaftaCertificateOfOriginDetail
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
     * @param Op900Detail $Op900Detail
     * return ShippingDocumentSpecification
     */
    public function setOp900Detail(Op900Detail $op900Detail)
    {
        $this->Op900Detail = $op900Detail;
        return $this;
    }
    

    
}