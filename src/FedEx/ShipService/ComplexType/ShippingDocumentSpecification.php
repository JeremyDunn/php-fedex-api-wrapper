<?php
namespace FedEx\ShipService\ComplexType;

/**
 * Contains all data required for additional (non-label) shipping documents to be produced in conjunction with a specific shipment.
 *
 * @version     $Revision: 4 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
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
     * This element is currently not supported and is for the future use. (Details pertaining to the GAA.)
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
     * 
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
    
    /**
     * Specifies the production of the OP-900 document for hazardous materials.
     *
     * @param FreightAddressLabelDetail $FreightAddressLabelDetail
     * return ShippingDocumentSpecification
     */
    public function setFreightAddressLabelDetail(FreightAddressLabelDetail $freightAddressLabelDetail)
    {
        $this->FreightAddressLabelDetail = $freightAddressLabelDetail;
        return $this;
    }
    

    
}