<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\OOP\PHP\Car;
use App\OOP\PHP\BMW;

use App\OOP\PHP\CarDashBoard;

$Car = new BMW('BMW', 'X5', '100km/h');

($Car->installDashBoard(new CarDashBoard( 10, 10, 10)));

var_dump($Car->carInfo());