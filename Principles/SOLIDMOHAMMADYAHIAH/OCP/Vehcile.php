<?php

namespace SOLID\SOLIDMOHAMMADYAHIAH\OCP;

class Vehcile implements Ivehcile
{
    private $maxSpeed;
    private $color;
    /**
     * @var Driver
     */
    private  $driver;

    /**
     * @var array
     */
    private $routs=[];

    /**
     * @var Imove
    */
    private $move;

    public function getRouts(): array
    {
        return $this->routs;
    }

    public function setRouts(array $routs): void
    {
        $this->routs = $routs;
    }

    public function getMove(): Imove
    {
        return $this->move;
    }

    public function setMove(Imove $move): void
    {
        $this->move = $move;
    }

    public function getDriver(): Driver
    {
        return $this->driver;
    }

    public function setDriver(Driver $driver): void
    {
        $this->driver = $driver;
    }

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
    public function addRouts(Route $rout): void
    {
        $this->routs[] = $rout;
    }

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
        return $this->getMove()->move();
    }
}