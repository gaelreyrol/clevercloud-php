<?php

namespace CleverCloud\APIs;

use Psr\Http\Message\ResponseInterface;

class SelfAPI extends API
{
    public function getSelf(): ResponseInterface
    {
        return $this->cleverCloud->client->request('GET', 'self');
    }
}
