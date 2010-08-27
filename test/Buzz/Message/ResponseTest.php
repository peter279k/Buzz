<?php

namespace Buzz\Message;

require_once __DIR__.'/../../../lib/Buzz/ClassLoader.php';
\Buzz\ClassLoader::register();

class ResponseTest extends \PHPUnit_Framework_TestCase
{
    public function testGetProtocolVersionReturnsTheProtocolVersion()
    {
        $response = new Response();

        $this->assertEquals($response->getProtocolVersion(), null);

        $response->addHeader('1.0 200 OK');

        $this->assertEquals($response->getProtocolVersion(), 1.0);
    }

    public function testGetStatusCodeReturnsTheStatusCode()
    {
        $response = new Response();

        $this->assertEquals($response->getStatusCode(), null);

        $response->addHeader('1.0 200 OK');

        $this->assertEquals($response->getStatusCode(), 200);
    }

    public function testGetReasonPhraseReturnsTheReasonPhrase()
    {
        $response = new Response();

        $this->assertEquals($response->getReasonPhrase(), null);

        $response->addHeader('1.0 200 OK');

        $this->assertEquals($response->getReasonPhrase(), 'OK');
    }
}
