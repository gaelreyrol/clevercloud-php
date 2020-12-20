<?php

namespace CleverCloud\APIs;

use CleverCloud\CleverCloud;

abstract class API
{
    public CleverCloud $cleverCloud;

    public function __construct(CleverCloud $cleverCloud)
    {
        $this->cleverCloud = $cleverCloud;
    }
}
