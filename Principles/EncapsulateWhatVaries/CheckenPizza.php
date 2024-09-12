<?php

namespace SOLID\EncapsulateWhatVaries;

class CheckenPizza extends Pizza
{

    public function __construct()
    {
        $this->Title = $this->getClassName();
        $this->Price = $this->Price + 5;

    }

}