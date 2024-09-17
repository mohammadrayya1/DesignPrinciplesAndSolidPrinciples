<?php

namespace SOLID\SOLID\ISP;

class Daylabourer extends Employee implements  IHealthInsuranceEntitlement, ITransportationReimbursementEntitlement
{


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
        return $this->Salary +$this->CalculateHealthInsurance()+$this->CalculateTransportationReimbursement();
    }


    public function PrintSalarySlip()
    {
        return "<br> --- " . get_class($this) . " ---" .
            "<br>  No.: " . $this->EmployeeNo .
            "<br>  Name: " . $this->Name .
            "<br> Basic Salary: $" . number_format($this->Salary, 2) .
            "<br>  Health Insurance: $" . number_format($this->CalculateHealthInsurance(), 2) .
            "<br>Transportation Reimbursement ".$this->CalculateTransportationReimbursement() .
            "<br> ----------------------------------------------" .
            "<br>  NetSalary: $" . number_format($this->CalculateNetSalary(), 2);
    }

}