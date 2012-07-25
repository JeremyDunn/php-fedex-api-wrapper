<?php
namespace FedEx\RateService\ComplexType;

/**
 * Supporting detail for applied options identified in a rate quote.
 *
 * @version     $Revision: 4 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information
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