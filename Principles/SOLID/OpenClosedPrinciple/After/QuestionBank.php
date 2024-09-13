<?php

namespace SOLID\SOLID\OpenClosedPrinciple\After;

use SOLID\SOLID\OpenClosedPrinciple\Before\Question;
use SOLID\SOLID\OpenClosedPrinciple\Before\QuestionType;

class QuestionBank
{

    public static function generate(): array
    {
        return [
            new WHQuestion(
                "What are the four pillars of OOP?  \t ",
                8,
            ),
            new TrueFalseQuestion(
                "Which of the following are value types?    ",
                6,

            ),

            new MultipleChoiceQuestion(
                "Which of the following is an 8-byte Integer?     ",
                6,
                ["A. Char", "B. Long", "C. Short", "D. Byte", "E. Integer"]
            ),
            new MatchQuestion("Match Column One values with single choice from 2nd Column?",10,[
                         "A"=> "b" ,
                         "B"=> "c" ,
                         "C"=>"a" ,
                         "D"=>"e" ,
                         "E"=>"d" ])
        ];
    }
}