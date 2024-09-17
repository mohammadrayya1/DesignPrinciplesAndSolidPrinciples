<?php

namespace SOLID\SOLIDMOHAMMADYAHIAH\LSP;

class Rectangle implements Shape
{

    public $width;
    public $height;



    public function area()
    {
        return $this->width * $this->height;

    }
}