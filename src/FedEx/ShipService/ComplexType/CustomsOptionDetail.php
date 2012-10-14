<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * CustomsOptionDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class CustomsOptionDetail
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'CustomsOptionDetail';

    /**
     * Set Type
     *
     * @param \FedEx\ShipService\SimpleType\CustomsOptionType|string $type
     * return CustomsOptionDetail
     */
    public function setType($type)
    {
        $this->Type = $type;
        return $this;
    }
    
    /**
     * Specifies additional description about customs options. This is a required field when the customs options type is "OTHER".
     *
     * @param string $description
     * return CustomsOptionDetail
     */
    public function setDescription($description)
    {
        $this->Description = $description;
        return $this;
    }
    

    
}