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
class FreightGuaranteeDetail
    extends AbstractComplexType
{
    protected $_name = 'FreightGuaranteeDetail';

    /**
     * 
     *
     * @param FreightGuaranteeType $Type
     * return FreightGuaranteeDetail
     */
    public function setType(\FedEx\RateService\SimpleType\FreightGuaranteeType $type)
    {
        $this->Type = $type;
        return $this;
    }
    
    /**
     * Date for all Freight guarantee types.
     *
     * @param date $Date
     * return FreightGuaranteeDetail
     */
    public function setDate($date)
    {
        $this->Date = $date;
        return $this;
    }
    

    
}