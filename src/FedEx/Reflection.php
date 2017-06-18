<?php

namespace FedEx;

class Reflection
{
    /**
     * Returns the fully qualified class name for a ComplexType setter method accepting an array of other ComplexTypes
     *
     * @param \ReflectionParameter $reflectionParameter
     * @return string|null
     */
    public static function getAbstractClassSetterMethodArrayType(\ReflectionParameter $reflectionParameter)
    {
        if (!$reflectionParameter->isArray()) {
            return null;
        }
        preg_match('/@param\s+([^\s]+)/', $reflectionParameter->getDeclaringFunction()->getDocComment(), $matches);
        if (isset($matches[1])) {
            if (stristr($matches[1], 'SimpleType')) {
                return str_replace('[]', '', explode('|', $matches[1])[0]);
            } else {
                $namespaceParts = explode('\\', $reflectionParameter->getDeclaringClass()->name);
                array_pop($namespaceParts);
                return join('\\', $namespaceParts) . '\\' . str_replace('[]', '', $matches[1]);
            }
        }
    }

    /**
     * Returns the scalar type expeted for a ComplexType setter method
     *
     * @param \ReflectionParameter $reflectionParameter
     * @return string|null
     */
    public static function getAbstractClassSetterMethodScalarType(\ReflectionParameter $reflectionParameter)
    {
        if ($reflectionParameter->isArray() || ($reflectionParameter->getClass() instanceof \ReflectionClass)) {
            return null;
        }

        preg_match('/@param\s+([^\s]+)/', $reflectionParameter->getDeclaringFunction()->getDocComment(), $matches);
        if (!isset($matches[1])) {
            return null;
        }

        $match = $matches[1];

        if (preg_match('/(.*)\|string$/', $match, $matches)) {
            if (isset($matches[1]) && class_exists($matches[1])) {
                return $matches[1];
            }
        }

        return $match;
    }

    /**
     * Is fully qualified class name a Simpletype?
     *
     * @param string $fullyQualifiedClassName
     * @return bool
     */
    public static function isClassNameSimpleType($fullyQualifiedClassName)
    {
        if (preg_match('/SimpleType/', $fullyQualifiedClassName)) {
            return true;
        }
        return false;
    }
}
