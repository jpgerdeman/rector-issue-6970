<?php

declare(strict_types=1);

namespace App\Tests;

use ApiPlatform\Core\Bridge\Symfony\Bundle\Test\ApiTestCase;
use ApiPlatform\Core\Util\ClientTrait;
use PHPUnit\Framework\TestCase;

class ExampleTest extends ApiTestCase
{
    /**
     * @var \ApiPlatform\Core\Bridge\Symfony\Bundle\Test\Client|mixed
     */
    public $client;

    protected function setUp(): void
    {
        parent::setUp();
        $this->client = static::createClient();
    }

    public function testExample(): void
    {
        $this->client->withOptions([]);
        $this->assertTrue( true );
    }
}
