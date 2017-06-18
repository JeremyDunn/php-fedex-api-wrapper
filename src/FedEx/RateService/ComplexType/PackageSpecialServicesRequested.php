<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * These special services are available at the package level for some or all service types. If the shipper is requesting a special service which requires additional data, the package special service type must be present in the specialServiceTypes collection, and the supporting detail must be provided in the appropriate sub-object below.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 *
 * @property \FedEx\RateService\SimpleType\PackageSpecialServiceType|string[] $SpecialServiceTypes
 * @property CodDetail $CodDetail
 * @property DangerousGoodsDetail $DangerousGoodsDetail
 * @property Weight $DryIceWeight
 * @property SignatureOptionDetail $SignatureOptionDetail
 * @property PriorityAlertDetail $PriorityAlertDetail
 * @property AlcoholDetail $AlcoholDetail

 */
class PackageSpecialServicesRequested extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'PackageSpecialServicesRequested';

    /**
     * The types of all special services requested for the enclosing shipment or package.
     *
     * @param \FedEx\RateService\SimpleType\PackageSpecialServiceType[]|string[] $specialServiceTypes
     * @return $this
     */
    public function setSpecialServiceTypes(array $specialServiceTypes)
    {
        $this->values['SpecialServiceTypes'] = $specialServiceTypes;
        return $this;
    }

    /**
     * For use with FedEx Ground services only; COD must be present in shipment's special services.
     *
     * @param CodDetail $codDetail
     * @return $this
     */
    public function setCodDetail(CodDetail $codDetail)
    {
        $this->values['CodDetail'] = $codDetail;
        return $this;
    }

    /**
     * Set DangerousGoodsDetail
     *
     * @param DangerousGoodsDetail $dangerousGoodsDetail
     * @return $this
     */
    public function setDangerousGoodsDetail(DangerousGoodsDetail $dangerousGoodsDetail)
    {
        $this->values['DangerousGoodsDetail'] = $dangerousGoodsDetail;
        return $this;
    }

    /**
     * Set DryIceWeight
     *
     * @param Weight $dryIceWeight
     * @return $this
     */
    public function setDryIceWeight(Weight $dryIceWeight)
    {
        $this->values['DryIceWeight'] = $dryIceWeight;
        return $this;
    }

    /**
     * Set SignatureOptionDetail
     *
     * @param SignatureOptionDetail $signatureOptionDetail
     * @return $this
     */
    public function setSignatureOptionDetail(SignatureOptionDetail $signatureOptionDetail)
    {
        $this->values['SignatureOptionDetail'] = $signatureOptionDetail;
        return $this;
    }

    /**
     * Set PriorityAlertDetail
     *
     * @param PriorityAlertDetail $priorityAlertDetail
     * @return $this
     */
    public function setPriorityAlertDetail(PriorityAlertDetail $priorityAlertDetail)
    {
        $this->values['PriorityAlertDetail'] = $priorityAlertDetail;
        return $this;
    }

    /**
     * Set AlcoholDetail
     *
     * @param AlcoholDetail $alcoholDetail
     * @return $this
     */
    public function setAlcoholDetail(AlcoholDetail $alcoholDetail)
    {
        $this->values['AlcoholDetail'] = $alcoholDetail;
        return $this;
    }

    
}
