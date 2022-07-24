<?php

namespace App\OOP\PHP\Relationships;


class Teacher
{


    private $string;

    public function sayWelcome()
    {

        $this->string = 'Welcome to the class';
        return $this->string;
    }

    private function WelcomeInHtml()
    {

        return "<h1>Welcome to the school</h1>";
    }
}
