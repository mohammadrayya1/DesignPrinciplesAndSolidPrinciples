<?php

namespace SOLID\SOLIDMOHAMMADYAHIAH\OCP;

class Bus extends  Vehcile implements Ivehcile
{

    private $busNumber;

    private $doors;


    public function __construct($busNumber)
    {
        $this->setBusNumber($busNumber);
    }



    /**
     * @return mixed
     */
    public function getBusNumber()
    {
        return $this->busNumber;
    }

    /**
     * @param mixed $busNumber
     */
    public function setBusNumber($busNumber): void
    {
        $this->busNumber = $busNumber;
    }

    /**
     * @return mixed
     */
    public function getDoors()
    {
        return $this->doors;
    }

    /**
     * @param mixed $doors
     */
    public function setDoors($doors): void
    {
        $this->doors = $doors;
    }




    public function move()
    {

    }
}