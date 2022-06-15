<?php

namespace App\OOP\PHP;

class ClientHTTP extends Client
{
    public function connect(): string
    {
        return 'I am Connection to ' . $this->source . ' ' . $this->port;
    }

    public function go()
    {
        return 'I am going to ' . $this->source;
    }
}
