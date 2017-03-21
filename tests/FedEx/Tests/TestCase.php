<?php

namespace FedEx\Tests;

class TestCase extends \PHPUnit\Framework\TestCase
{

    /**
     * Run assertions that determine if an endpoint URL is valid
     *
     * @param $url
     */
    public function validateUrl($url)
    {
        //send CURL requests
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_NOBODY, true);
        curl_setopt($ch, CURLOPT_HEADER, true);
        $responseHeaders = curl_exec($ch);
        $info = curl_getinfo($ch);
        curl_close($ch);

        $this->assertNotEmpty($responseHeaders);
        $this->assertEquals(500, $info['http_code']);
    }
}
