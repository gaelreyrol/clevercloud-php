<?php

namespace CleverCloud;

use GuzzleHttp\Client;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Subscriber\Oauth\Oauth1;

class CleverCloud
{
    public Client $client;

    public function __construct(array $oauthConfig)
    {
        $stack = HandlerStack::create();

        $stack->push(new Oauth1($oauthConfig));

        $this->client = new Client([
            'base_uri' => 'https://api.clever-cloud.com/v2/',
            'handler' => $stack,
            'auth' => 'oauth',
            'headers' => [
                'Accept' => 'application/json',
                'Content-Type' => 'application/json',
            ],
        ]);
    }
}
