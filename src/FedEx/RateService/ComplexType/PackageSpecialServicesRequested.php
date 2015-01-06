<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * These special services are available at the package level for some or all service types. If the shipper is requesting a special service which requires additional data, the package special service type must be present in the specialServiceTypes collection, and the supporting detail must be provided in the appropriate sub-object below.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class PackageSpecialServicesRequested
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'PackageSpecialServicesRequested';

    /**
     * The types of all special services requested for the enclosing shipment or package.
     *
     * @param PackageSpecialServiceType[] $specialServiceTypes
     * @return PackageSpecialServicesRequested
     */
    public function setSpecialServiceTypes(array $specialServiceTypes)
    {
        $this->SpecialServiceTypes = $specialServiceTypes;
        return $this;
    }
    
    /**
     * Returns The types of all special services requested for the enclosing shipment or package.
     *
     * @return PackageSpecialServiceType[]
     */
    public function getSpecialServiceTypes()
    {
        return $this->SpecialServiceTypes;
    }
    
    /**
     * For use with FedEx Ground services only; COD must be present in shipment's special services.
     *
     * @param CodDetail $codDetail
     * @return PackageSpecialServicesRequested
     */
    public function setCodDetail(CodDetail $codDetail)
    {
        $this->CodDetail = $codDetail;
        return $this;
    }
    
    /**
     * Returns For use with FedEx Ground services only; COD must be present in shipment's special services.
     *
     * @return CodDetail
     */
    public function getCodDetail()
    {
        return $this->CodDetail;
    }
    
    /**
     * Descriptive data required for a FedEx shipment containing dangerous materials. This element is required when SpecialServiceType.DANGEROUS_GOODS or HAZARDOUS_MATERIAL is present in the SpecialServiceTypes collection.
     *
     * @param DangerousGoodsDetail $dangerousGoodsDetail
     * @return PackageSpecialServicesRequested
     */
    public function setDangerousGoodsDetail(DangerousGoodsDetail $dangerousGoodsDetail)
    {
        $this->DangerousGoodsDetail = $dangerousGoodsDetail;
        return $this;
    }
    
    /**
     * Returns Descriptive data required for a FedEx shipment containing dangerous materials. This element is required when SpecialServiceType.DANGEROUS_GOODS or HAZARDOUS_MATERIAL is present in the SpecialServiceTypes collection.
     *
     * @return DangerousGoodsDetail
     */
    public function getDangerousGoodsDetail()
    {
        return $this->DangerousGoodsDetail;
    }
    
    /**
     * Descriptive data required for a FedEx shipment containing dry ice. This element is required when SpecialServiceType.DRY_ICE is present in the SpecialServiceTypes collection.
     *
     * @param Weight $dryIceWeight
     * @return PackageSpecialServicesRequested
     */
    public function setDryIceWeight(Weight $dryIceWeight)
    {
        $this->DryIceWeight = $dryIceWeight;
        return $this;
    }
    
    /**
     * Returns Descriptive data required for a FedEx shipment containing dry ice. This element is required when SpecialServiceType.DRY_ICE is present in the SpecialServiceTypes collection.
     *
     * @return Weight
     */
    public function getDryIceWeight()
    {
        return $this->DryIceWeight;
    }
    
    /**
     * The descriptive data required for FedEx signature services. This element is required when SpecialServiceType.SIGNATURE_OPTION is present in the SpecialServiceTypes collection.
     *
     * @param SignatureOptionDetail $signatureOptionDetail
     * @return PackageSpecialServicesRequested
     */
    public function setSignatureOptionDetail(SignatureOptionDetail $signatureOptionDetail)
    {
        $this->SignatureOptionDetail = $signatureOptionDetail;
        return $this;
    }
    
    /**
     * Returns The descriptive data required for FedEx signature services. This element is required when SpecialServiceType.SIGNATURE_OPTION is present in the SpecialServiceTypes collection.
     *
     * @return SignatureOptionDetail
     */
    public function getSignatureOptionDetail()
    {
        return $this->SignatureOptionDetail;
    }
    
    /**
     * To be filled.
     *
     * @param PriorityAlertDetail $priorityAlertDetail
     * @return PackageSpecialServicesRequested
     */
    public function setPriorityAlertDetail(PriorityAlertDetail $priorityAlertDetail)
    {
        $this->PriorityAlertDetail = $priorityAlertDetail;
        return $this;
    }
    
    /**
     * Returns To be filled.
     *
     * @return PriorityAlertDetail
     */
    public function getPriorityAlertDetail()
    {
        return $this->PriorityAlertDetail;
    }
    

    
}