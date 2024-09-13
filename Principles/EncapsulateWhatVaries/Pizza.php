<?php

namespace SOLID\EncapsulateWhatVaries;
ob_start();

class Pizza
{

    public $Title;
    public $Price = 10;


    public static function create($entity)
    {
        if (is_subclass_of($entity, Pizza::class)) {
            $element = new $entity();
            return $element;

        } else return false;

    }

    public static function order($entity)
    {

        if ($element = self::create($entity)) {
            self::prepare();
            self::cook();
            self::cut();

            return $element;
        } else {
            return "Error: The entity must be a subclass of Pizza.";
        }


    }

    public static function prepare()
    {
        echo "preparing..  ";
        flush();
        ob_flush();
        sleep(1);
        echo " completed";
        flush();
        ob_flush();
    }

    public static function cook()
    {
        echo " cooking..  ";
        flush();
        ob_flush();
        sleep(1);
        echo " completed";
        flush();
        ob_flush();
    }

    public static function cut()
    {
        echo " cutting and boxing..  ";
        flush();
        ob_flush();
        sleep(1);
        echo " completed";
        flush();
        ob_flush();
    }

    public function __toString()
    {
        return "  Title is " . $this->getClassName() . " and Pricing is $this->Price";

    }

    public function getClassName()
    {

        return basename(str_replace('\\', '/', static::class));
    }
}