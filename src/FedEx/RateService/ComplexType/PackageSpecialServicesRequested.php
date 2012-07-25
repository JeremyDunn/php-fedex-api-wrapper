<?php
namespace FedEx\RateService\ComplexType;

/**
 * These special services are available at the package level for some or all service types. If the shipper is requesting a special service which requires additional data, the package special service type must be present in the specialServiceTypes collection, and the supporting detail must be provided in the appropriate sub-object below.
 *
 * @version     $Revision: 4 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information
 */
class PackageSpecialServicesRequested
    extends AbstractComplexType
{
    protected $_name = 'PackageSpecialServicesRequested';

    /**
     * The types of all special services requested for the enclosing shipment or package.
     *
     * @param array[PackageSpecialServiceType] $SpecialServiceTypes
     * return PackageSpecialServicesRequested
     */
    public function setSpecialServiceTypes(array $specialServiceTypes)
    {
        $this->SpecialServiceTypes = $specialServiceTypes;
        return $this;
    }
    
    /**
     * For use with FedEx Ground services only; COD must be present in shipment's special services.
     *
     * @param CodDetail $CodDetail
     * return PackageSpecialServicesRequested
     */
    public function setCodDetail(CodDetail $codDetail)
    {
        $this->CodDetail = $codDetail;
        return $this;
    }
    
    /**
     * Descriptive data required for a FedEx shipment containing dangerous materials. This element is required when SpecialServiceType.DANGEROUS_GOODS or HAZARDOUS_MATERIAL is present in the SpecialServiceTypes collection.
     *
     * @param DangerousGoodsDetail $DangerousGoodsDetail
     * return PackageSpecialServicesRequested
     */
    public function setDangerousGoodsDetail(DangerousGoodsDetail $dangerousGoodsDetail)
    {
        $this->DangerousGoodsDetail = $dangerousGoodsDetail;
        return $this;
    }
    
    /**
     * Descriptive data required for a FedEx shipment containing dry ice. This element is required when SpecialServiceType.DRY_ICE is present in the SpecialServiceTypes collection.
     *
     * @param Weight $DryIceWeight
     * return PackageSpecialServicesRequested
     */
    public function setDryIceWeight(Weight $dryIceWeight)
    {
        $this->DryIceWeight = $dryIceWeight;
        return $this;
    }
    
    /**
     * The descriptive data required for FedEx signature services. This element is required when SpecialServiceType.SIGNATURE_OPTION is present in the SpecialServiceTypes collection.
     *
     * @param SignatureOptionDetail $SignatureOptionDetail
     * return PackageSpecialServicesRequested
     */
    public function setSignatureOptionDetail(SignatureOptionDetail $signatureOptionDetail)
    {
        $this->SignatureOptionDetail = $signatureOptionDetail;
        return $this;
    }
    
    /**
     * To be filled.
     *
     * @param PriorityAlertDetail $PriorityAlertDetail
     * return PackageSpecialServicesRequested
     */
    public function setPriorityAlertDetail(PriorityAlertDetail $priorityAlertDetail)
    {
        $this->PriorityAlertDetail = $priorityAlertDetail;
        return $this;
    }
    

    
}