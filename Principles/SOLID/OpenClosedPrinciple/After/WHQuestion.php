<?php

namespace SOLID\SOLID\OpenClosedPrinciple\After;

class WHQuestion extends Question
{
    public function __construct($title, $mark)
    {
        $this->title = $title;
        $this->mark = $mark;
    }

    public function print()
    {
        echo "$this->title   &emsp;&emsp;&emsp; [$this->mark] <br>";
        echo "  _____________________________<br>";
        echo "  _____________________________<br>";
        echo "  _____________________________<br>";

    }


}