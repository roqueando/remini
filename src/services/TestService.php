<?php

namespace Remini\Services;

use Remini\Core\Service;

class TestService extends Service
{
    public function __construct(string $host)
    {
        parent::__construct($host);
        $this->setName("Test");
    }
}
