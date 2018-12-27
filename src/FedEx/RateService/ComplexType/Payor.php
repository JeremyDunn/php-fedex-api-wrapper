<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Payor
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 *
 * @property Party $ResponsibleParty

 */
class Payor extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'Payor';

    /**
     * Set ResponsibleParty
     *
     * @param Party $responsibleParty
     * @return $this
     */
    public function setResponsibleParty(Party $responsibleParty)
    {
        $this->values['ResponsibleParty'] = $responsibleParty;
        return $this;
    }
}
