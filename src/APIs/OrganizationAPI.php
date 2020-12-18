<?php

namespace CleverCloud\APIs;

use CleverCloud\CleverCloud;
use Psr\Http\Message\ResponseInterface;

class OrganizationAPI
{
    private CleverCloud $client;

    public function __construct(CleverCloud $cleverCloud)
    {
        $this->client = $cleverCloud;
    }

    public function reDeployApplication(string $organizationId, string $applicationId, string $commit = null, bool $useCache = null): ResponseInterface
    {
        $params = [];

        if (is_null($commit)) {
            $params['commit'] = $commit;
        }

        if (is_null($useCache)) {
            $params['useCache'] = $useCache;
        }

        return $this->client->http->request('GET', "/organisations/{$organizationId}/applications/{$applicationId}/instances", [
            'query' => $params,
        ]);
    }
}
