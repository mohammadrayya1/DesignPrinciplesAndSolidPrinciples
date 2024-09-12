<?php

namespace SOLID\SOLIDMOHAMMADYAHIAH\SRP;

class Driver
{
    private $name;
    private $age;
    private $address;
    private $insuranceNumber;

    public function __construct($name, $age, $insuranceNumber)
    {
        $this->setName($name);
        $this->setAge($age);
        $this->setInsuranceNumber($insuranceNumber);
    }


    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age): void
    {
        $this->age = $age;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address): void
    {
        $this->address = $address;
    }

    /**
     * @return mixed
     */
    public function getInsuranceNumber()
    {
        return $this->insuranceNumber;
    }

    /**
     * @param mixed $insuranceNumber
     */
    public function setInsuranceNumber($insuranceNumber): void
    {
        $this->insuranceNumber = $insuranceNumber;
    }


}