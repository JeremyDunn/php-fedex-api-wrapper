<?php
namespace FedEx;

/**
 * Abstract class for SimpleTypes
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 */
abstract class AbstractSimpleType
{
    /**
     *
     * @var string
     */
    protected $_value;

    /**
     * Constructor
     *
     * @param string $value
     */
    public function __construct($value)
    {
        $this->_value = $value;
    }

    /**
     * __toString() implementation
     *
     * @return string
     */
    public function __toString()
    {
        return $this->_value;
    }
}
