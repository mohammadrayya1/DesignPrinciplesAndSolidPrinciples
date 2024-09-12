<?php

namespace SOLID\CompositionInheritance;

class GreenPaper implements ITopping
{

    public $title ;
    public $price;

    public function __construct()
    {

        $this->title = basename(str_replace('\\', '/', static::class));
        $this->price = 15;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getPrice(): float
    {
        return $this->price;
    }
}