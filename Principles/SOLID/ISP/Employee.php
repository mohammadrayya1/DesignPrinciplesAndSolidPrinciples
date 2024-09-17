<?php

namespace SOLID\SOLID\ISP;

abstract class Employee
{

    public $EmployeeNo;
    public $Name;
    public $Salary;

    protected abstract function CalculateNetSalary();
    public abstract function PrintSalarySlip();

}