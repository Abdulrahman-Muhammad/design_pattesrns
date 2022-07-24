<?php

namespace App\OOP\PHP;


class SalarayEmployee
{
    private string $name;
    private int $age;
    private int $salary;

    public function __construct(string $name, int $age, Salary $salary)
    {
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getAge(): int
    {
        return $this->age;
    }

    public function getSalary(): int
    {
        return $this->salary;
    }

}
