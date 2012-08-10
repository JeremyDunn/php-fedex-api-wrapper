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

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'ServiceSubOptionDetail';

    /**
     * Identifies the type of Freight Guarantee applied, if FREIGHT_GUARANTEE is applied to the rate quote.
     *
     * @param \FedEx\RateService\SimpleType\FreightGuaranteeType|string $freightGuarantee
     * return ServiceSubOptionDetail
     */
    public function setFreightGuarantee($freightGuarantee)
    {
        $this->FreightGuarantee = $freightGuarantee;
        return $this;
    }
    
    /**
     * Identifies the smartPostHubId used during rate quote, if SMART_POST_HUB_ID is a variable option on the rate request.
     *
     * @param string $smartPostHubId
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
     * @param \FedEx\RateService\SimpleType\SmartPostIndiciaType|string $smartPostIndicia
     * return ServiceSubOptionDetail
     */
    public function setSmartPostIndicia($smartPostIndicia)
    {
        $this->SmartPostIndicia = $smartPostIndicia;
        return $this;
    }
    

    
}