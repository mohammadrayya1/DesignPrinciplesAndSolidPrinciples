<?php

namespace SOLID\SOLIDMOHAMMADYAHIAH\LSP;

class Square implements Shape
{
    public $size;


    public function area()
    {
        return $this->size *$this->size;

    }

}