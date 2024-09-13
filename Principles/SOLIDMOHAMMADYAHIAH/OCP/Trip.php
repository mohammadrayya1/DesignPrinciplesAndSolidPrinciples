<?php

namespace SOLID\SOLIDMOHAMMADYAHIAH\OCP;

class Trip
{
    private $tripnumber;

    private $tripPrice;
    private $duration;

    /**
     * @var Ivehcile
     */
    private $ivehcile;

    /**
     * @param $tripnumber
     * @param $tripPrice
     * @param $duration
     * @param Ivehcile $ivehcile
     */
    public function __construct($tripnumber, $tripPrice, $duration, Ivehcile $ivehcile)
    {
      $this->setTripnumber($tripnumber);
        $this->setTripPrice($tripPrice);
        $this->setDuration($duration);
        $this->setIvehcile($ivehcile);
    }


    /**
     * @return mixed
     */
    public function getTripnumber()
    {
        return $this->tripnumber;
    }

    /**
     * @param mixed $tripnumber
     */
    public function setTripnumber($tripnumber): void
    {
        $this->tripnumber = $tripnumber;
    }

    /**
     * @return mixed
     */
    public function getTripPrice()
    {
        return $this->tripPrice;
    }

    /**
     * @param mixed $tripPrice
     */
    public function setTripPrice($tripPrice): void
    {
        $this->tripPrice = $tripPrice;
    }

    /**
     * @return mixed
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * @param mixed $duration
     */
    public function setDuration($duration): void
    {
        $this->duration = $duration;
    }

    public function getIvehcile(): Ivehcile
    {
        return $this->ivehcile;
    }

    public function setIvehcile(Ivehcile $ivehcile): void
    {
        $this->ivehcile = $ivehcile;
    }

    public function move()
    {
        return $this->ivehcile->move();
    }


}