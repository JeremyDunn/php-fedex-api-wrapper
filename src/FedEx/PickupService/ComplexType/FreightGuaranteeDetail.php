<?php
namespace FedEx\Pickup\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Descriptive data regarding a FedEx freight service pickup request.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class FreightGuaranteeDetail
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'FreightGuaranteeDetail';

    /**
     * Description of Guarantee
     *
     * @param \FedEx\Pickup\SimpleType\FreightGuaranteeType|string $type
     * @return FreightGuaranteeDetail
     */
    public function setType($type)
    {
        $this->Type = $type;
        return $this;
    }
    
    /**
     * Returns Description of Guarantee
     *
     * @return \FedEx\Pickup\SimpleType\FreightGuaranteeType|string
     */
    public function getType()
    {
        return $this->Type;
    }
    
    /**
     * Date for all Freight guarantee types.
     *
     * @param date $date
     * @return FreightGuaranteeDetail
     */
    public function setDate($date)
    {
        $this->Date = $date;
        return $this;
    }
    
    /**
     * Returns Date for all Freight guarantee types.
     *
     * @return date
     */
    public function getDate()
    {
        return $this->Date;
    }
    

    
}