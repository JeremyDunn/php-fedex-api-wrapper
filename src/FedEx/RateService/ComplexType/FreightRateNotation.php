<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Additional non-monetary data returned with Freight rates.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class FreightRateNotation
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'FreightRateNotation';

    /**
     * Unique identifier for notation.
     *
     * @param string $code
     * @return FreightRateNotation
     */
    public function setCode($code)
    {
        $this->Code = $code;
        return $this;
    }
    
    /**
     * Returns Unique identifier for notation.
     *
     * @return string
     */
    public function getCode()
    {
        return $this->Code;
    }
    
    /**
     * Human-readable explanation of notation.
     *
     * @param string $description
     * @return FreightRateNotation
     */
    public function setDescription($description)
    {
        $this->Description = $description;
        return $this;
    }
    
    /**
     * Returns Human-readable explanation of notation.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->Description;
    }
    

    
}