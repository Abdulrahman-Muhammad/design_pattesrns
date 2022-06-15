<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\OOP\PHP\ClientHTTP;
use App\OOP\PHP\Client;


$client = new ClientHTTP('localhost', 'http://');

var_dump($client->connect());
var_dump($client->run());
var_dump($client->go());
var_dump($client->discoonnect());


?>