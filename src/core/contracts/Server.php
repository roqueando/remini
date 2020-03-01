<?php

namespace Remini\Core\Contracts;

interface Server
{
    const HTTP = 'http';
    const NODE = 'node';

    public function __construct(string $host);

    public function setType(string $type): void;

    public function getType(): string;

    public function run(int $port = null): void;
}
