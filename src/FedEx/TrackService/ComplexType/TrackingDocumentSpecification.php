<?php
namespace FedEx\TrackService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * TrackingDocumentSpecification
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information Service
 *
 * @property \FedEx\TrackService\SimpleType\TrackingDocumentType|string[] $DocumentTypes
 * @property TrackingBillOfLadingDocumentDetail $BillOfLadingDocumentDetail
 * @property TrackingFreightBillingDocumentDetail $FreightBillingDocumentDetail
 * @property TrackingSignatureProofOfDeliveryDetail $SignatureProofOfDeliveryDetail

 */
class TrackingDocumentSpecification extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'TrackingDocumentSpecification';

    /**
     * Set DocumentTypes
     *
     * @param \FedEx\TrackService\SimpleType\TrackingDocumentType[]|string[] $documentTypes
     * @return $this
     */
    public function setDocumentTypes(array $documentTypes)
    {
        $this->values['DocumentTypes'] = $documentTypes;
        return $this;
    }

    /**
     * Set BillOfLadingDocumentDetail
     *
     * @param TrackingBillOfLadingDocumentDetail $billOfLadingDocumentDetail
     * @return $this
     */
    public function setBillOfLadingDocumentDetail(TrackingBillOfLadingDocumentDetail $billOfLadingDocumentDetail)
    {
        $this->values['BillOfLadingDocumentDetail'] = $billOfLadingDocumentDetail;
        return $this;
    }

    /**
     * Set FreightBillingDocumentDetail
     *
     * @param TrackingFreightBillingDocumentDetail $freightBillingDocumentDetail
     * @return $this
     */
    public function setFreightBillingDocumentDetail(TrackingFreightBillingDocumentDetail $freightBillingDocumentDetail)
    {
        $this->values['FreightBillingDocumentDetail'] = $freightBillingDocumentDetail;
        return $this;
    }

    /**
     * Set SignatureProofOfDeliveryDetail
     *
     * @param TrackingSignatureProofOfDeliveryDetail $signatureProofOfDeliveryDetail
     * @return $this
     */
    public function setSignatureProofOfDeliveryDetail(TrackingSignatureProofOfDeliveryDetail $signatureProofOfDeliveryDetail)
    {
        $this->values['SignatureProofOfDeliveryDetail'] = $signatureProofOfDeliveryDetail;
        return $this;
    }
}
