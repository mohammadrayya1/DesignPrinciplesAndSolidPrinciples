<?php

namespace SOLID\SOLIDMOHAMMADYAHIAH\OCPMo;

 class Player
{

    private $name;
    private $age;
    private $type;

    /**
     * @param $name
     * @param $age
     * @param $type
     */
    public function __construct($name, $age, Iplay $type)
    {
        $this->setName($name);
        $this->setAge($age);
        $this->setType($type);
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
    public function getType():Iplay
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type): void
    {
        $this->type = $type;
    }







}