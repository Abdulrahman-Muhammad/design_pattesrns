<?php

namespace App\OOP\PHP;

class OrganizationSalary extends Salary
{


    protected float $organizationTax;

    public function __construct(float $salary, float $tax, float $netSalary, int $absent, int $overTime, int $overTimeRate, int $absentRate, float $organizationTax)
    {


        Parent::__construct($salary, $tax, $netSalary, $absent, $overTime, $overTimeRate, $absentRate);
          
        $this->organizationTax = $organizationTax;
    }

    public function calcSalary(): float
    {
        return $this->salary - ($this->salary * $this->tax) - ($this->salary * $this->organizationTax);
    }
}
