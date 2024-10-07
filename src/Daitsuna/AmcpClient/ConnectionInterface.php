<?php

namespace Daitsuna\AmcpClient;

interface ConnectionInterface
{
    public function connect(): bool;
    public function disconnect(): bool;
    public function sendCommand(string $command): bool;

    
}