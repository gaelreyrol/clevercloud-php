<?php

namespace CleverCloud\APIs;

use Psr\Http\Message\ResponseInterface;

class OrganizationAPI extends API
{
    public function reDeployApplication(
        string $organizationId,
        string $applicationId,
        bool $useCache = true,
        string $commit = null
    ): ResponseInterface {
        $params = [];

        if ($useCache === false) {
            $params['useCache'] = 'no';
        }

        if (is_null($commit)) {
            $params['commit'] = $commit;
        }

        return $this->cleverCloud->client->request(
            'POST',
            "organisations/{$organizationId}/applications/{$applicationId}/instances",
            [
                'query' => $params,
            ]
        );
    }
}
