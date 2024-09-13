<?php

namespace SOLID\SOLID\OpenClosedPrinciple\After;



class Quiz
{
    /**
     * @var Question[]
    */
    public array $questions ;

    public function __construct(array $questions)
    {
        $this->questions = $questions;
    }

    public function print()
    {
        foreach ($this->questions as $q) {

            $q->print();
            echo "<br>";
        }
    }
}