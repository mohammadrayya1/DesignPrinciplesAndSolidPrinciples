<?php

namespace SOLID\SOLID\OpenClosedPrinciple\After;

class TrueFalseQuestion extends Question
{
    public function __construct($title, $mark)
    {
        $this->title = $title;
        $this->mark = $mark;
    }
    public function print()
    {
        echo "$this->title   &emsp;&emsp;&emsp; [$this->mark] <br>";
        echo "  1. T<br>";
        echo "  2. F<br>";
    }
}