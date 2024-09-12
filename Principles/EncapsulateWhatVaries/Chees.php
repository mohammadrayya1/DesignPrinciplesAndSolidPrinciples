<?php

namespace SOLID\EncapsulateWhatVaries;

class Chees extends Pizza
{


    public  function __construct()
    {
        $this->Title=$this->getClassName();
        $this->Price=$this->Price + 3;
    }

}