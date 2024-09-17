<?php

namespace SOLID\SOLID\ISP;

class Repositiry
{

    public static function LoadEmployees()
    {

            return [
                (function() {
                    $staff = new Staff();
                    $staff->EmployeeNo = '2017-FI-1343';
                    $staff->Name = 'Cochran Cole';
                    $staff->Salary = 1000;
                    return $staff;
                })(),
                (function() {
                    $consultant = new Consultant();
                    $consultant->EmployeeNo = '2018-FI-1755';
                    $consultant->Name = 'Jaclyn Wolfe';
                    $consultant->Salary = 1000;
                    return $consultant;
                })(),
                (function() {
                    $daylabourer = new Daylabourer();
                    $daylabourer->EmployeeNo = '2016-IT-1441';
                    $daylabourer->Name = 'Cochran Cole';
                    $daylabourer->Salary = 1000;
                    return $daylabourer;
                })(),
            ];




    }
}