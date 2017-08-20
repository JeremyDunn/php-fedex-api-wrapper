<?php

namespace FedEx;

use FedEx\Exception\RequestMethodNotFoundException;

class RequestFactory
{
    /**
     * FedEx key user credential.
     *
     * @var string
     */
    public static $key;

    /**
     * FedEx password user credential.
     *
     * @var string
     */
    public static $password;

    /**
     * FedEx account number client detail.
     *
     * @var string
     */
    public static $accountNumber;

    /**
     * FedEx meter number client detail.
     *
     * @var string
     */
    public static $meterNumber;

    /**
     * Creates and partially populates the ComplexType request object needed for a Request method.
     *
     * Version (or any object with fixed values) will be prepopulated.
     * WebAuthenticationDetail and ClientDetail will be populated if the corresponding static values are set in this class.
     *
     * @param AbstractRequest $request
     * @param string $requestMethod
     * @return AbstractComplexType
     * @throws RequestMethodNotFoundException
     * @throws \ReflectionException
     */
    public static function createRequest(AbstractRequest $request, $requestMethod)
    {
        $reflectionClass = new \ReflectionClass($request);
        foreach ($reflectionClass->getMethods() as $classMethod) {
            if (get_class($request) === $classMethod->class && $classMethod->name === $requestMethod) {
                $methodParameters = $classMethod->getParameters();
                if (isset($methodParameters[0])) {
                    $requestClassName = (string) $methodParameters[0]->getType();
                    // Create instance of Request ComplexType.
                    $complexTypeRequest = new $requestClassName;
                    // Maybe credentials and authentication details.
                    static::maybePopulateCredentialsAndClientDetail($complexTypeRequest);
                    // Initlize Version for fixed values.
                    $complexTypeRequest->Version;

                    return $complexTypeRequest;
                }
            }
        }

        throw new RequestMethodNotFoundException();
    }

    /**
     * Maybe populate Request object with authentication and client details if values are set in static variables.
     *
     * @param AbstractComplexType $request
     */
    protected static function maybePopulateCredentialsAndClientDetail(AbstractComplexType $request)
    {
        if (!is_a($request->WebAuthenticationDetail, AbstractComplexType::class)) {
            return;
        }

        if (!is_a($request->WebAuthenticationDetail->UserCredential, AbstractComplexType::class)) {
            return;
        }

        if (!is_a($request->ClientDetail, AbstractComplexType::class)) {
            return;
        }

        if (!empty(static::$key)) {
            $request->WebAuthenticationDetail->UserCredential->Key = static::$key;
        }

        if (!empty(static::$password)) {
            $request->WebAuthenticationDetail->UserCredential->Password = static::$password;
        }

        if (!empty(static::$accountNumber)) {
            $request->ClientDetail->AccountNumber = static::$accountNumber;
        }

        if (!empty(static::$meterNumber)) {
            $request->ClientDetail->MeterNumber = static::$meterNumber;
        }
    }
}
