<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Contains all data required for additional (non-label) shipping documents to be produced in conjunction with a specific shipment.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 *
 * @property \FedEx\RateService\SimpleType\RequestedShippingDocumentType|string[] $ShippingDocumentTypes
 * @property CertificateOfOriginDetail $CertificateOfOrigin
 * @property CommercialInvoiceDetail $CommercialInvoiceDetail
 * @property CustomDocumentDetail[] $CustomPackageDocumentDetail
 * @property CustomDocumentDetail[] $CustomShipmentDocumentDetail
 * @property GeneralAgencyAgreementDetail $GeneralAgencyAgreementDetail
 * @property NaftaCertificateOfOriginDetail $NaftaCertificateOfOriginDetail
 * @property Op900Detail $Op900Detail

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
     * @param \FedEx\RateService\SimpleType\RequestedShippingDocumentType[]|string[] $shippingDocumentTypes
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
     * Details pertaining to the GAA.
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
     * Details pertaining to NAFTA COO.
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
}
