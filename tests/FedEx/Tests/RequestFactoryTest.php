<?php

namespace FedEx\Tests;

use FedEx\Exception\RequestMethodNotFoundException;
use FedEx\RequestFactory;

class RequestFactoryTest extends TestCase
{
    /**
     * Tests that the RequestFactory returns the expected ComplexType object needed for specified Request.
     *
     * @throws \FedEx\Exception\RequestMethodNotFoundException
     * @throws \ReflectionException
     */
    public function testRequestFactoryReturnsCorrectPopulatedObject()
    {
        foreach ($this->getAllRequestObjects() as $request) {
            $reflectionClass = new \ReflectionClass($request);

            // Get all public methods defined in the base Request class.
            foreach ($reflectionClass->getMethods(\ReflectionMethod::IS_PUBLIC) as $method) {
                if ($method->getDeclaringClass()->getName() !== $reflectionClass->getName()) {
                    continue;
                }

                // Ensure that the request object returned from the factory is object needed for Request method.
                $factoryRequestObject = RequestFactory::createRequest($request, $method->getName());
                $this->assertInstanceOf((string) $method->getParameters()[0]->getType(), $factoryRequestObject);
            }
        }
    }

    /**
     * Tests that the RequestFactory returns a ComplexType object with Version data prepopulated.
     *
     * @throws \FedEx\Exception\RequestMethodNotFoundException
     * @throws \ReflectionException
     */
    public function testRequestFactoryReturnsObjectsWithVersionDataPrepopulated()
    {
        foreach ($this->getAllRequestObjects() as $request) {
            $reflectionClass = new \ReflectionClass($request);

            // Get all public methods defined in the base Request class.
            foreach ($reflectionClass->getMethods(\ReflectionMethod::IS_PUBLIC) as $method) {
                if ($method->getDeclaringClass()->getName() !== $reflectionClass->getName()) {
                    continue;
                }

                // Ensure that Version fixed values are set.
                $factoryRequestObject = RequestFactory::createRequest($request, $method->getName());
                $this->assertNotEmpty($factoryRequestObject->Version->ServiceId);
                $this->assertNotEmpty($factoryRequestObject->Version->Major);
                $this->assertNotNull($factoryRequestObject->Version->Intermediate);
                $this->assertNotNull($factoryRequestObject->Version->Minor);
            }
        }
    }

    /**
     * Ensure that requesting an invalid method name from RequestFactory throws the expected exception.
     *
     * @throws RequestMethodNotFoundException
     * @throws \ReflectionException
     */
    public function testRequestFactoryThrowsExceptionForInvalidRequestMethod()
    {
        $this->expectException(RequestMethodNotFoundException::class);
        foreach ($this->getAllRequestObjects() as $request) {
            RequestFactory::createRequest($request, 'invalidMethodName');
        }
    }

    /**
     * Test that objects returned from RequestFactory are preopulated with credentials and client details, if set.
     *
     * @throws RequestMethodNotFoundException
     * @throws \ReflectionException
     */
    public function testRequestFactoryPrepopulatesCredentialsAndClientDetails()
    {
        foreach ($this->getAllRequestObjects() as $request) {
            $reflectionClass = new \ReflectionClass($request);

            // Get all public methods defined in the base Request class.
            foreach ($reflectionClass->getMethods(\ReflectionMethod::IS_PUBLIC) as $method) {
                if ($method->getDeclaringClass()->getName() !== $reflectionClass->getName()) {
                    continue;
                }

                // Ensure that credentials and client details aren't set.
                $factoryRequestObject = RequestFactory::createRequest($request, $method->getName());
                $this->assertNull($factoryRequestObject->WebAuthenticationDetail->UserCredential->Key);
                $this->assertNull($factoryRequestObject->WebAuthenticationDetail->UserCredential->Password);
                $this->assertNull($factoryRequestObject->ClientDetail->AccountNumber);
                $this->assertNull($factoryRequestObject->ClientDetail->MeterNumber);
            }
        }

        // Set credentials in RequestFactory static params and ensure they match the values from the returned objects.
        RequestFactory::$key = 'key';
        RequestFactory::$password = 'password';
        RequestFactory::$accountNumber = 'account number';
        RequestFactory::$meterNumber = 'meter number';

        foreach ($this->getAllRequestObjects() as $request) {
            $reflectionClass = new \ReflectionClass($request);

            // Get all public methods defined in the base Request class.
            foreach ($reflectionClass->getMethods(\ReflectionMethod::IS_PUBLIC) as $method) {
                if ($method->getDeclaringClass()->getName() !== $reflectionClass->getName()) {
                    continue;
                }

                // Ensure that credentials and client details aren't set.
                $factoryRequestObject = RequestFactory::createRequest($request, $method->getName());
                $this->assertEquals($factoryRequestObject->WebAuthenticationDetail->UserCredential->Key, RequestFactory::$key);
                $this->assertEquals($factoryRequestObject->WebAuthenticationDetail->UserCredential->Password, RequestFactory::$password);
                $this->assertEquals($factoryRequestObject->ClientDetail->AccountNumber, RequestFactory::$accountNumber);
                $this->assertEquals($factoryRequestObject->ClientDetail->MeterNumber, RequestFactory::$meterNumber);
            }
        }
    }
}
