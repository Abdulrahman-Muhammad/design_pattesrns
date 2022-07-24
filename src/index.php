<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\OOP\PHP\Employee;
use App\OOP\PHP\OrganizationSalary;


$mohamed = new App\OOP\PHP\Employee( 
    'Mohamed',
    25,
    new App\OOP\PHP\OrganizationSalary(
        4500,
        0.2,
        1000,
        2,
        30,
        75,
        20,
        0.1
    )
);


var_dump($mohamed->getSalary()->calcSalary());