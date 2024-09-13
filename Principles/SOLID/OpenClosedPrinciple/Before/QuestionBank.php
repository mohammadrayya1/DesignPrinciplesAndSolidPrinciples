<?php

namespace SOLID\SOLID\OpenClosedPrinciple\Before;

class QuestionBank
{

    public static function generate(): array
    {
        return [
            new Question(
                "What are the four pillars of OOP?  \t ",
                8,
                QuestionType::WH
            ),
            new Question(
                "Which of the following are value types?    ",
                6,
                QuestionType::MULTIPLECHOICE,
                ["A: Integer", "B: Array", "C: Single", "D: String", "E: Long"]
            ),
            new Question(
                "Earth is Bigger than sun?   ",
                4,
                QuestionType::TRUEFALSE
            ),
            new Question(
                "Which of the following is an 8-byte Integer?     ",
                6,
                QuestionType::MULTIPLECHOICE,
                ["A. Char", "B. Long", "C. Short", "D. Byte", "E. Integer"]
            )
        ];
    }
}