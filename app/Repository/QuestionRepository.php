<?php

namespace App\Repository;

use App\Models\Question;
use App\Models\QuestionType;
use Illuminate\Support\Facades\DB;


class QuestionRepository
{
    public static function getQuestionById($questionId)
    {
        return Question::where('questionId', $questionId)->first();
    }
    public static function getAllQuestions()
    {
        return Question::get();
    }
    public static function getQuestionTypeWithId($questionTypeId)
    {
        return Question::where('questionTypeId', $questionTypeId)
        ->get();
        // return Question::with('question.questionType')
        //     ->where('questionTypeId', $questionTypeId)
        //     ->get();
        // $question = Question::where('question.questionTypeId','=',$questionTypeId)
        // ->orderBy('question.questionId','ASC')->get();
        // return $question;
        //  Question::where('question.questionTypeId','=',$questionTypeId)
        // ->orderBy('question.questionId','ASC')->get();
       
    }
    // public static function getQuestionTypeById($questionTypeId)
    // {
    //     return QuestionType::with('questions')->find($questionTypeId);
    // }
    public static function getQuestionTypeIdWithQuestions($questionTypeId)
    {
        return Question::join(
            'questiontype',
            'question.questionTypeId',
            '=',
            'questiontype.questionTypeId'
        )
            ->where('question.questionTypeId', $questionTypeId)
            ->get();
    }
}
