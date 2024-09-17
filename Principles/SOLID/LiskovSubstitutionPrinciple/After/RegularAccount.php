<?php

namespace SOLID\SOLID\LiskovSubstitutionPrinciple\After;

abstract  class RegularAccount extends Account
{


    abstract public function withdraw($amount);

}