<?php

namespace SOLID\SOLID\OpenClosedPrinciple\Before;

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
            echo "{$q->title}"."\t \t"."[{$q->mark}]"." <br>";

            switch ($q->questionType) {
                case QuestionType::WH:
                    echo "  _____________________________<br>";
                    echo "  _____________________________<br>";
                    echo "  _____________________________<br>";
                    break;
                case QuestionType::TRUEFALSE:
                    echo "  1. T<br>";
                    echo "  2. F<br>";
                    break;
                case QuestionType::MULTIPLECHOICE:
                    foreach ($q->choices as $choice) {
                        echo "  $choice<br>";
                    }
                    break;
                default:
                    break;
            }
            echo "<br><br>";
        }
    }
}