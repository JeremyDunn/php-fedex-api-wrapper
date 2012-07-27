<?php
namespace FedEx;

/**
 * Abstract class for SimpleTypes
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 */
abstract class AbstractComplexType
{

    /**
     * Holds the data as a key => value array
     *
     * @var array
     */
    protected $_values = array();

    /**
     * The name of the extended class/data type
     *
     * @var string
     */
    protected $_name;

    /**
     * Constructor
     *
     * @param array $options Data as key => value array
     */
    public function __construct(array $options = null) {
        if (is_array($options)) {
            foreach ($options as $name => $value) {
                $this->$name = $value;
            }
        }
    }

    /**
     * __set implementation
     *
     * @param string $name
     * @param string $value
     */
    public function __set($name, $value) {
        $this->_values[$name] = $value;
    }

    /**
     * Recursive algorthim to convert complex types to an array
     *
     * @param array $arrayValues
     * @return array
     */
    protected function _convertToArray($arrayValues) {
        $returnArray = array();

        foreach ($arrayValues as $key => $value) {

            if ($value instanceof self) {
                $returnArray[$key] = $value->toArray();
            } else if (is_array($value)) {
                $returnArray[$key] = $this->_convertToArray($value);
            } else {
                if ($value instanceof SimpleType\AbstractSimpleType) {
                    $returnArray[$key] = (string) $value;
                } else {
                    $returnArray[$key] = $value;
                }
            }
        }

        return $returnArray;
    }

    /**
     * Returns the complex type as an array
     *
     * @param boolean $renderTopKey
     * @return array
     */
    public function toArray($renderTopKey = false) {
        $returnArray = $this->_convertToArray($this->_values);

        if ($renderTopKey) {
            return array($this->_name => $returnArray);
        } else {
            return $returnArray;
        }
    }
}