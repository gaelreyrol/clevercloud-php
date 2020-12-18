<?php

namespace CleverCloud;

use GuzzleHttp\Client;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Subscriber\Oauth\Oauth1;

class CleverCloud
{
    public Client $http;

    public function __construct(array $config)
    {
        $stack = HandlerStack::create();

        $stack->push(new Oauth1($config));

        $this->http = new Client([
            'base_uri' => 'https://api.clever-cloud.com/v2',
            'handler' => $stack,
            'auth' => 'oauth',
        ]);
    }
}
