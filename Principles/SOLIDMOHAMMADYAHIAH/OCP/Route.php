<?php

namespace SOLID\SOLIDMOHAMMADYAHIAH\OCP;

class Route
{

    private $source;
    private $destination;

    /**
     * @var int
     */
    private $maintances;

    /**
     * @param $source
     * @param $destination
     * @param $maintances
     */
    public function __construct($source, $destination, $maintances)
    {
        $this->source = $source;
        $this->destination = $destination;
        $this->maintances = $maintances;
    }


    /**
     * @return mixed
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * @param mixed $source
     */
    public function setSource($source): void
    {
        $this->source = $source;
    }

    /**
     * @return mixed
     */
    public function getDestination()
    {
        return $this->destination;
    }

    /**
     * @param mixed $destination
     */
    public function setDestination($destination): void
    {
        $this->destination = $destination;
    }

    /**
     * @return int
     */
    public function getMaintances()
    {
        return $this->maintances;
    }

    /**
     * @param mixed $maintances
     */
    public function setMaintances($maintances): void
    {
        $this->maintances = $maintances;
    }



}