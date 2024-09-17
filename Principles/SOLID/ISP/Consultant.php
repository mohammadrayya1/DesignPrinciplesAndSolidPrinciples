<?php

namespace SOLID\SOLID\ISP;

class Consultant extends Employee implements IBonusesEntitlement, IHealthInsuranceEntitlement, ITransportationReimbursementEntitlement
{



    public function CalculateBonuses()
    {
        return $this->Salary * 0.05;
    }

    public function CalculateHealthInsurance()
    {
        return 300;
    }

    public function CalculateTransportationReimbursement()
    {
        return 150;
    }

    protected function CalculateNetSalary()
    {
        return $this->Salary + $this->CalculateBonuses()+$this->CalculateHealthInsurance()+$this->CalculateTransportationReimbursement();
    }

    public function PrintSalarySlip()
    {
        return "<br> --- " . get_class($this) . " ---" .
            "<br>  No.: " . $this->EmployeeNo .
            "<br>  Name: " . $this->Name .
            "<br>  Basic Salary: $" . number_format($this->Salary, 2) .
            "<br>  Bonuses: $" . number_format($this->CalculateBonuses(), 2) .
            "<br>  Health Insurance: $" . number_format($this->CalculateHealthInsurance(), 2) .
            "<br>  Transportation Reimbursement: $" . number_format($this->CalculateTransportationReimbursement(), 2) .
            "<br>  ----------------------------------------------" .
            "<br>  NetSalary: $" . number_format($this->CalculateNetSalary(), 2);
    }


}