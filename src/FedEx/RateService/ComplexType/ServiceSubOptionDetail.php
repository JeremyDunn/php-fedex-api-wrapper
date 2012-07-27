<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Supporting detail for applied options identified in a rate quote.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class ServiceSubOptionDetail
    extends AbstractComplexType
{
    protected $_name = 'ServiceSubOptionDetail';

    /**
     * Identifies the type of Freight Guarantee applied, if FREIGHT_GUARANTEE is applied to the rate quote.
     *
     * @param FreightGuaranteeType $FreightGuarantee
     * return ServiceSubOptionDetail
     */
    public function setFreightGuarantee(\FedEx\RateService\SimpleType\FreightGuaranteeType $freightGuarantee)
    {
        $this->FreightGuarantee = $freightGuarantee;
        return $this;
    }
    
    /**
     * Identifies the smartPostHubId used during rate quote, if SMART_POST_HUB_ID is a variable option on the rate request.
     *
     * @param string $SmartPostHubId
     * return ServiceSubOptionDetail
     */
    public function setSmartPostHubId($smartPostHubId)
    {
        $this->SmartPostHubId = $smartPostHubId;
        return $this;
    }
    
    /**
     * Identifies the indicia used during rate quote, if SMART_POST_ALLOWED_INDICIA is a variable option on the rate request.
     *
     * @param SmartPostIndiciaType $SmartPostIndicia
     * return ServiceSubOptionDetail
     */
    public function setSmartPostIndicia(\FedEx\RateService\SimpleType\SmartPostIndiciaType $smartPostIndicia)
    {
        $this->SmartPostIndicia = $smartPostIndicia;
        return $this;
    }
    

    
}