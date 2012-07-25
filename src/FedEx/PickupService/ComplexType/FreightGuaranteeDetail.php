<?php
namespace FedEx\PickupService\ComplexType;

/**
 * Descriptive data regarding a FedEx freight service pickup request.
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class FreightGuaranteeDetail
    extends AbstractComplexType
{
    protected $_name = 'FreightGuaranteeDetail';

    /**
     * Description of Guarantee
     *
     * @param FreightGuaranteeType $Type
     * return FreightGuaranteeDetail
     */
    public function setType(\FedEx\PickupService\SimpleType\FreightGuaranteeType $type)
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