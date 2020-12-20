<?php

namespace CleverCloud\Tests;

use CleverCloud\CleverCloud;
use Dotenv\Dotenv;
use GuzzleHttp\Client;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Subscriber\Oauth\Oauth1;
use PHPUnit\Framework\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    protected CleverCloud $cleverCloud;

    public function setUp(): void
    {
        parent::setUp();

        $this->loadEnvironmentVariables();

        $oauthConfig = [
            'consumer_key' => $_ENV['CLEVER_CONSUMER_KEY'],
            'consumer_secret' => $_ENV['CLEVER_CONSUMER_SECRET'],
            'token' => $_ENV['CLEVER_TOKEN'],
            'token_secret' => $_ENV['CLEVER_SECRET'],
        ];

        $this->cleverCloud = new CleverCloud($oauthConfig);

        $stack = HandlerStack::create();

        $stack->push(new Oauth1($oauthConfig));

        $this->cleverCloud->client = new Client([
            'base_uri' => 'https://api.clever-cloud.com/v2/',
            'handler' => $stack,
            'auth' => 'oauth',
            'http_errors' => false,
            'headers' => [
                'Accept' => 'application/json',
                'Content-Type' => 'application/json',
            ],
        ]);
    }

    protected function loadEnvironmentVariables(): void
    {
        if (! file_exists(__DIR__ . '/../.env')) {
            return;
        }

        $dotEnv = Dotenv::createImmutable(__DIR__ . '/..');

        $dotEnv->load();
    }
}
