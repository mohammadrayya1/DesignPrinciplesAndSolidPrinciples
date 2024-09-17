<?php

namespace SOLID\SOLID\ISP;

class Staff extends Employee implements IHealthInsuranceEntitlement, IPensionEntitlement, IRentalSubsidyEntitlement, IBonusesEntitlement
{

    public function CalculateBonuses()
    {
        return $this->Salary * 0.05;

    }

    public function CalculateHealthInsurance()
    {
        return 300;

    }

    public function CalculatePension()
    {
        return $this->Salary * 0.25;
    }

    public function CalculateRentalSubsidy()
    {
        return 150;
    }
    public function PrintSalarySlip()
    {

        return "<br> --- " . get_class($this) . " ---" .
               "<br>  No.: " . $this->EmployeeNo .
               "<br>  Name: " . $this->Name .
               "<br>  Basic Salary: $" . number_format($this->Salary, 2) .
               "<br>  Bonuses: $" . number_format($this->CalculateBonuses(), 2) .
               "<br>  Pension: $" . number_format($this->CalculatePension(), 2) .
               "<br>  Health Insurance: $" . number_format($this->CalculateHealthInsurance(), 2) .
               "<br>  Rental Subsidy: $" . number_format($this->CalculateRentalSubsidy(), 2) .
               "<br>  ----------------------------------------------" .
               "<br>  NetSalary: $" . number_format($this->CalculateNetSalary(), 2);


    }

    protected function CalculateNetSalary()
    {

        return $this->Salary + $this->CalculateBonuses() + $this->CalculatePension()+$this->CalculateHealthInsurance()+$this->CalculateRentalSubsidy();
    }


}