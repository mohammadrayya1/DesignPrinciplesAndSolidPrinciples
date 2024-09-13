<?php

namespace SOLID\SOLID\OpenClosedPrinciple\After;

class MultipleChoiceQuestion extends Question
{

    public  $choices=[];

    public function __construct($title, $mark,$choices)
    {
        $this->title = $title;
        $this->mark = $mark;
        $this->choices=$choices;
    }
    public function print()
    {
        echo "$this->title   &emsp;&emsp;&emsp;  [$this->mark] <br>";


        foreach ($this->choices as $choice) {
            echo "  $choice<br>";
        }
    }



}