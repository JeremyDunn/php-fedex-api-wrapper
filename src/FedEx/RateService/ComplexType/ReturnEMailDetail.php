<?php
namespace FedEx\RateService\ComplexType;

/**
 * 
 *
 * @version     $Revision: 4 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information
 */
class ReturnEMailDetail
    extends AbstractComplexType
{
    protected $_name = 'ReturnEMailDetail';

    /**
     * 
     *
     * @param string $MerchantPhoneNumber
     * return ReturnEMailDetail
     */
    public function setMerchantPhoneNumber($merchantPhoneNumber)
    {
        $this->MerchantPhoneNumber = $merchantPhoneNumber;
        return $this;
    }
    
    /**
     * Identifies the allowed (merchant-authorized) special services which may be selected when the subsequent shipment is created. Only services represented in EMailLabelAllowedSpecialServiceType will be controlled by this list.
     *
     * @param array[ReturnEMailAllowedSpecialServiceType] $AllowedSpecialServices
     * return ReturnEMailDetail
     */
    public function setAllowedSpecialServices(array $allowedSpecialServices)
    {
        $this->AllowedSpecialServices = $allowedSpecialServices;
        return $this;
    }
    

    
}