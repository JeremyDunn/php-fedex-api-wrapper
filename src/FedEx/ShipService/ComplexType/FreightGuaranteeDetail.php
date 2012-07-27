<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * 
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
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
    public function setType(\FedEx\ShipService\SimpleType\FreightGuaranteeType $type)
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