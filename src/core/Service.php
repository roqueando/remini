<?php

namespace Remini\Core;

use Remini\Core\Server;
use Remini\Core\Contracts\Service as ServiceContract;

class Service extends Server implements ServiceContract
{
    protected $ignore = false;

    public function ignore(): void
    {
        $this->ignore = true;
    }
}
