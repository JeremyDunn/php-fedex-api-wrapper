<?php
namespace FedEx\Pickup\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Descriptive data regarding a FedEx freight service pickup request.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 *
 * @property \FedEx\Pickup\SimpleType\FreightGuaranteeType|string $Type
 * @property date $Date

 */
class FreightGuaranteeDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'FreightGuaranteeDetail';

    /**
     * Description of Guarantee
     *
     * @param \FedEx\Pickup\SimpleType\FreightGuaranteeType|string $type
     * @return $this
     */
    public function setType($type)
    {
        $this->values['Type'] = $type;
        return $this;
    }

    /**
     * Date for all Freight guarantee types.
     *
     * @param date $date
     * @return $this
     */
    public function setDate($date)
    {
        $this->values['Date'] = $date;
        return $this;
    }

    
}
