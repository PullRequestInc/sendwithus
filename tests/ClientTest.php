<?php
namespace PullRequestInc\sendwithus\Tests;

use GrahamCampbell\TestBench\AbstractTestCase as AbstractTestBenchTestCase;
use PullRequestInc\sendwithus\Client;

class ClientTest extends AbstractTestBenchTestCase
{
    /**
     * We make sure we can get a client
     */

    private $options = ['default_api_key' => 'testing', 'api_key_testing' => 'THIS_IS_A_TEST_API_KEY', 'api_key_production' => 'THIS_IS_A_TEST_API_KEY', 'options' => ['debug' => false]];


    public function testGetClient()
    {
        $client = new Client($this->options);

        $this->assertInstanceOf(Client::class, $client);
    }

    /**
     * We make sure we can change a mode
     */

    public function testChangeMode()
    {
        $client = new Client($this->options);

        $this->assertTrue($client->setMode('production'));

        $this->assertTrue(($client->getMode() === 'production'));
    }

    /**
     * Verifies setting a bad mode will result in a false return
     */

    public function testBadMode()
    {
        $client = new Client($this->options);
        $this->assertFalse($client->setMode('mittens'));
        $this->assertTrue($client->getMode() === 'testing');
    }

    /**
     * Let's try to make a call to the sendwithus API
     *
     * We'll call for a list of emails and verify they're an array from their api
     *
     *
     */


    public function testMagicCall()
    {
        $client = new Client($this->options);
        $emails = $client->emails();

        $this->assertTrue(is_array($emails));
    }

}
