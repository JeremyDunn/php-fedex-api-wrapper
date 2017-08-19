<?php

namespace FedEx\Utility;

use FedEx\AbstractComplexType;
use Faker\Factory;
use FedEx\Reflection;

class ComplexTypePopulator
{
    protected $ignoreMethods = [
        '__set',
        '__get',
        'toArray'
    ];

    /**
     * @var \Faker\Generator
     */
    protected $faker;

    public function __construct()
    {
        $this->faker = Factory::create();
    }

    /**
     * Recursively populates a ComplexType object with fake data
     *
     * @param AbstractComplexType $object
     * @return $this
     */
    public function populate(AbstractComplexType $object)
    {
        /* @var $object \FedEx\RateService\ComplexType\RateRequest */
        $reflectionClass = new \ReflectionClass($object);

        $setterMethods = array_filter($reflectionClass->getMethods(\ReflectionMethod::IS_PUBLIC), function ($reflectionMethod) {
            return (preg_match('/^set.*$/', $reflectionMethod->name));
        });

        foreach ($setterMethods as $reflectionMethod) {
            if (in_array($reflectionMethod->name, $this->ignoreMethods)) {
                continue;
            }

            $fakeValue = $this->getFakeValue($reflectionMethod);

            //recursively populate child classes
            if ($fakeValue instanceof AbstractComplexType) {
                $this->populate($fakeValue);
            }

            $object->{$reflectionMethod->name}($fakeValue);
        }

        return $this;
    }

    protected function getFakeValue(\ReflectionMethod $reflectionMethod)
    {
        foreach ($reflectionMethod->getParameters() as $reflectionParameter) {
            if ($reflectionParameter->getClass() instanceof \ReflectionClass) {
                $className = $reflectionParameter->getClass()->name;
                return new $className;
            } elseif ($reflectionParameter->isArray()) {
                $arrayType = Reflection::getAbstractClassSetterMethodArrayType($reflectionParameter);
                if (class_exists($arrayType)) {
                    if (Reflection::isClassNameSimpleType($arrayType)) {
                        return [$this->getRandomConstValueFromSimpleType($arrayType)];
                    } else {
                        $complexType = new $arrayType();
                        $this->populate($complexType);
                        return [$complexType];
                    }
                }
                return ['test'];
            } else {
                $scalarType = Reflection::getAbstractClassSetterMethodScalarType($reflectionParameter);

                if (class_exists($scalarType)) {
                    return $this->getRandomConstValueFromSimpleType($scalarType);
                }

                switch ($scalarType) {
                    case 'boolean':
                    case 'bool':
                        return $this->faker->boolean;
                        break;
                    case 'float':
                        return $this->faker->randomFloat(2, 1, 10);
                        break;
                    case 'int':
                        return $this->faker->randomNumber(1);
                        break;
                    case 'string':
                    default:
                        return $this->faker->word;
                        break;
                }
            }
        }
    }



    /**
     * Returns a random class constant value from a SimpleType object
     *
     * @param string $fullyQualifiedClassName
     * @return string|null
     */
    protected function getRandomConstValueFromSimpleType($fullyQualifiedClassName)
    {
        if (!class_exists($fullyQualifiedClassName)) {
            return null;
        }

        $simpleType = new $fullyQualifiedClassName('temp value');
        $reflectionClass = new \ReflectionClass($simpleType);
        $constantValues = $reflectionClass->getConstants();
        return $constantValues[array_rand($constantValues)];
    }
}
