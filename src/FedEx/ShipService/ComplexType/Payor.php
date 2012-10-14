<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * The descriptive data identifying the party responsible for payment for a service.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class Payor
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'Payor';

    /**
     * Set ResponsibleParty
     *
     * @param Party $responsibleParty
     * return Payor
     */
    public function setResponsibleParty(Party $responsibleParty)
    {
        $this->ResponsibleParty = $responsibleParty;
        return $this;
    }
    

    
}