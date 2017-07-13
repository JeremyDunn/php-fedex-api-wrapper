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
     * Constructor
     *
     * @param array $options Data as key => value array
     */
    public function __construct(array $options = null)
    {
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
     * __isset implementation
     *
     * @param $name
     * @return bool
     */
    public function __isset($name)
    {
        return null !== $this->__get($name);
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

    /**
     * Populates this class and children using provided $stdClass
     * Use this method to populate a response from the \SoapClient
     *
     * @param \stdClass $stdClass
     */
    public function populateFromStdClass(\stdClass $stdClass)
    {
        $reflectionClass = new \ReflectionClass($this);

        $setterMethods = array_filter($reflectionClass->getMethods(\ReflectionMethod::IS_PUBLIC), function ($reflectionMethod) {
            return (preg_match('/^set.*$/', $reflectionMethod->name));
        });

        foreach ($setterMethods as $reflectionMethod) {
            /* @var $reflectionMethod \ReflectionMethod */
            $methodName = $reflectionMethod->name;
            $stdPropertyName = str_replace('set', '', $methodName);
            $parameterValue = null;
            $reflectionParameter = $reflectionMethod->getParameters()[0];

            if ($reflectionParameter->getClass() instanceof \ReflectionClass) {
                //class
                $classPropertyName = $reflectionParameter->getClass()->name;
                $parameterValue = new $classPropertyName;
                if (isset($stdClass->$stdPropertyName)) {
                    $parameterValue->populateFromStdClass($stdClass->$stdPropertyName);
                }
            } elseif ($reflectionParameter->isArray()) {
                //array
                $arrayType = Reflection::getAbstractClassSetterMethodArrayType($reflectionParameter);
                if (Reflection::isClassNameSimpleType($arrayType)) {
                } else {
                    if (isset($stdClass->$stdPropertyName)) {
                        $parameterValue = [];
                        if (is_array($stdClass->$stdPropertyName)) {
                            foreach ($stdClass->$stdPropertyName as $property) {
                                $class = new $arrayType;
                                $parameterValue[] = $class;
                                $class->populateFromStdClass($property);
                            }
                        } else {
                            $class = new $arrayType;
                            $parameterValue[] = $class;
                            $class->populateFromStdClass($stdClass->$stdPropertyName);
                        }
                    }
                }
            } else {
                //is scalar type
                if (isset($stdClass->$stdPropertyName)) {
                    $parameterValue = $stdClass->$stdPropertyName;
                }
            }

            if (isset($parameterValue, $stdClass->$stdPropertyName)) {
                $this->$methodName($parameterValue);
            }
        }
    }
}
