<?php
namespace FedEx\ShipService\ComplexType;

/**
 * Additional non-monetary data returned with Freight rates.
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class FreightRateNotation
    extends AbstractComplexType
{
    protected $_name = 'FreightRateNotation';

    /**
     * Unique identifier for notation.
     *
     * @param string $Code
     * return FreightRateNotation
     */
    public function setCode($code)
    {
        $this->Code = $code;
        return $this;
    }
    
    /**
     * Human-readable explanation of notation.
     *
     * @param string $Description
     * return FreightRateNotation
     */
    public function setDescription($description)
    {
        $this->Description = $description;
        return $this;
    }
    

    
}