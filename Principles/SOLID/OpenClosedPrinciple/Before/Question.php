<?php

namespace SOLID\SOLID\OpenClosedPrinciple\Before;

class Question
{
    public $title;
    public $mark;

    public QuestionType $questionType;


    public $choices = [];
    public function __construct(string $title, int $mark, QuestionType $questionType, array $choices = [])
    {
        $this->title = $title;
        $this->mark = $mark;
        $this->questionType = $questionType;
        $this->choices = $choices;
    }
}