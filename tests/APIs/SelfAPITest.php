<?php

namespace CleverCloud\Tests\APIs;

use CleverCloud\APIs\SelfAPI;
use CleverCloud\Tests\TestCase;

/**
 * @coversDefaultClass \CleverCloud\APIs\SelfAPI
 */
class SelfAPITest extends TestCase
{
    private SelfAPI $api;

    public function setUp(): void
    {
        parent::setUp();

        $this->api = new SelfAPI($this->cleverCloud);
    }

    /**
     * @test
     * @covers ::getSelf
     */
    public function should_get_self_successfully(): void
    {
        $response = $this->api->getSelf();

        self::assertEquals(200, $response->getStatusCode());
    }
}
