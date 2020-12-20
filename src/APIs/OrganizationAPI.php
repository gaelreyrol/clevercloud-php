<?php

namespace CleverCloud\APIs;

use Psr\Http\Message\ResponseInterface;

class OrganizationAPI extends API
{
    public function reDeployApplication(
        string $organizationId,
        string $applicationId,
        string $commit = null,
        bool $useCache = null
    ): ResponseInterface {
        $params = [];

        if (is_null($commit)) {
            $params['commit'] = $commit;
        }

        if (is_null($useCache)) {
            $params['useCache'] = $useCache;
        }

        return $this->cleverCloud->client->request(
            'GET',
            "organisations/{$organizationId}/applications/{$applicationId}/instances",
            [
                'query' => $params,
            ]
        );
    }
}
