<?php

namespace Remini\Core;

use Remini\Core\Server;
use Remini\Core\Contracts\Service as ServiceContract;

class Service extends Server implements ServiceContract
{
    protected $ignore = false;
    protected $name = '';

    public function ignore(): void
    {
        $this->ignore = true;
    }

    public function connectManager(int $port) {
        $manager = stream_socket_client("tcp://{$this->host}:{$port}"); 
        stream_socket_sendto($manager, "{$this->name} has connected");
        return $this;
    }

    protected function setName($name) {
        $this->name = $name;
    }
}
