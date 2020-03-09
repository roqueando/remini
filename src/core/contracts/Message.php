<?php

namespace Remini\Core\Contracts;

interface Message
{
    public function send();
    public function receive();
    public function getManagerConnection();
}
