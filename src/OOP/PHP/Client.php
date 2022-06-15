<?php

namespace App\OOP\PHP;

class Client
{

    protected string $source;
    protected string $port;


    public function __construct(string $port, string $source)
    {
        $this->source = $source;
        $this->port = $port;
    }

    public function connect(): string
    {
        return $this->source . " " . $this->port;
    }

    public function run()
    {
        return 'I am Connection to ' . $this->source;
    }

    public function discoonnect()
    {
        return true;
    }
}
