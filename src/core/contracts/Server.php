<?php

namespace Remini\Core\Contracts;

use Remini\Core\Server as ServerClass;

interface Server
{
    const HTTP = 'http';
    const NODE = 'node';

    public function __construct(string $host);

    public function setType(string $type): ServerClass;

    public function getType(): string;

    public function run(int $port = null): void;
}
