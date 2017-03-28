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
    protected $values = [];

    /**
     * The name of the extended class/data type
     *
     * @var string
     */
    protected $name;

    /**
     * __set implementation
     *
     * @param string $name
     * @param string $value
     */
    public function __set($name, $value)
    {
        $setValueMethod = "set{$name}";
        if (method_exists($this, $setValueMethod)) {
            $this->$setValueMethod($value);
        }
    }

    /**
     * __get implementation
     *
     * @param $name
     * @return mixed|null
     */
    public function &__get($name)
    {
        $nullValue = null;

        if (isset($this->values[$name])) {
            return $this->values[$name];
        }

        $setterMethodName = "set{$name}";
        $reflectionClass = new \ReflectionClass($this);
        if ($reflectionClass->hasMethod($setterMethodName)) {
            $parameterClass = $reflectionClass->getMethod($setterMethodName)->getParameters()[0]->getClass();
            if (!empty($parameterClass)) {
                $this->$setterMethodName(new $parameterClass->name());
                return $this->values[$name];
            }
        }

        return $nullValue;
    }

    /**
     * Recursive algorithm to convert complex types to an array
     *
     * @param array $arrayValues
     * @return array
     */
    protected function convertToArray($arrayValues)
    {
        $returnArray = [];

        foreach ($arrayValues as $key => $value) {
            if ($value instanceof self) {
                $returnArray[$key] = $value->toArray();
            } else if (is_array($value)) {
                $returnArray[$key] = $this->convertToArray($value);
            } else {
                $returnArray[$key] = (string) $value;
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
    public function toArray($renderTopKey = false)
    {
        $returnArray = $this->convertToArray($this->values);

        if ($renderTopKey) {
            return array($this->name => $returnArray);
        } else {
            return $returnArray;
        }
    }
}
