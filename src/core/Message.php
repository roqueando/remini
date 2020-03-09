<?php

namespace Remini\Core;

use Remini\Core\Contracts\Message as MessageContract;

class Message implements MessageContract
{
    public $service;
    public $action;
    public $data;

    public function __construct(string $service, string $action, $data)
    {
        $this->service = $service;
        $this->action = $action;
        $this->data = $data;
        return $this;
    }

    protected function send()
    {
        echo "Sending message to {$this->service}";
    }

    protected function receive()
    {
    }

    protected function getManagerConnection()
    {
    }
}
