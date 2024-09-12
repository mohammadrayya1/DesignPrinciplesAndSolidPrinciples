<?php

namespace SOLID\SOLIDMOHAMMADYAHIAH\SRP;

class Bus
{

    private $busNumber;

    private $doors;
    private $color;
    private $maxSpeed;

    /**
     * @var Driver
     */
    private  $driver;

    /**
     * @var array
     */
    private $routs=[];


    public function addRouts(Route $rout): void
    {
        $this->routs[] = $rout;
    }

    public function __construct($busNumber)
    {
        $this->setBusNumber($busNumber);
    }

    public function getDriver(): Driver
    {
        return $this->driver;
    }

    public function setDriver(Driver $driver): void
    {
        $this->driver = $driver;
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

    /**
     * @return mixed
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param mixed $color
     */
    public function setColor($color): void
    {
        $this->color = $color;
    }

    /**
     * @return mixed
     */
    public function getMaxSpeed()
    {
        return $this->maxSpeed;
    }

    /**
     * @param mixed $maxSpeed
     */
    public function setMaxSpeed($maxSpeed): void
    {
        $this->maxSpeed = $maxSpeed;
    }


    public function move()
    {
        if (!$this->driver) {
            echo "No driver assigned to this bus.\n";
            return;
        }

        foreach ($this->routs as $route) {
            echo "\nDriver: " . $this->driver->getName() . "\n";
            echo "Age: " . $this->driver->getAge() . "\n";
            echo "Route: From " . $route->getSource() . " to " . $route->getDestination() . "\n";
            echo "Distance: " . $route->getMaintances() . " km\n";
            echo "Max Speed: " . $this->getMaxSpeed() . " km/h\n";
            echo "-------------------------------------\n";
        }
    }
}