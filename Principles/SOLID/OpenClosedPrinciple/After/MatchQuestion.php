<?php

namespace SOLID\SOLID\OpenClosedPrinciple\After;

class MatchQuestion extends Question
{

    public $dictioner=[];
    public function __construct($title, $mark ,$dictioner)
    {
        $this->title = $title;
        $this->mark = $mark;
        $this->dictioner=$dictioner;
    }

    public function print()
    {
        echo "$this->title   &emsp;&emsp;&emsp;  [$this->mark] <br>";
        foreach ($this->dictioner as $key=> $value) {
            echo " $key    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;       $value <br>";
        }
    }
}