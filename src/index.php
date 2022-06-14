<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\OOP\PHP\BMW;
use App\OOP\PHP\Car;
use App\OOP\PHP\Mercedes;
use App\OOP\PHP\Application;


$bmw = new BMW('BMW', 'X5', '100');
$mercedes = new Mercedes('Mercedes', 'C300', '100');



$order1 = new Application('cairo', 'alexandria', 30);

var_dump($order1->deliverOrder($bmw));


?>