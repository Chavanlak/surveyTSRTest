<?php

namespace App\Http\Controllers;
use App\Repository\QuestionRepository;
use App\Repository\QuestiontypeRepository;
use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    // public static function getQuestion($questionTypeId){
    //     // $question = QuestionRepository::getQuestionById($questionTypeId);
    //     // dd($question);
    //     // return view('testSurvey', compact('question'));
    //     $questionType = QuestiontypeRepository::getQuestiontypeById($questionTypeId);
    //     // $question = QuestionRepository::getQuestionById($questionType->questionTypeId);
    //     // $question = QuestionRepository::getAllQuestions()->where('questionTypeId', $questionType->questionTypeId);
    //     $question = QuestionRepository::getAllQuestions();
    //     return view('testSurvey', compact('questionType','question'));

    // }
    public static function getQuestion($questionTypeId,$questionId){
       
        $questionType = QuestiontypeRepository::getQuestiontypeById($questionTypeId);
        // $question = QuestionRepository::getAllQuestions()->where('questionTypeId', $questionTypeId);
        $question = QuestionRepository::getQuestionById($questionId);
        dd($question);
        // return view('testSurvey', compact('questionType','question'));

    }
    public static function getAllQuestions(){
        $question = QuestionRepository::getAllQuestions();
        return view('showalltype', compact('question'));
    }
    // public static function getQuestionWithQuestionType(Request $req,$questionTypeId){
    //     $question = QuestionRepository::getQuestionTypeById($questionTypeId);
    //     // dd($question);
    //     return view('showalltype', compact('question'));
    // }
    public function showQuestions(Request $request)
    {
        $questionTypeId = $request->input('questionTypeId');
        // $questions = QuestionRepository::getQuestionTypeIdWithQuestions($questionTypeId);
        $questions = QuestionRepository::getQuestionTypeIdWithQuestions($request->questionTypeId);
        
        return view('showalltype', compact('questions'));
    }
    public function getQuestionWithQuestionType(Request $req)
    {
        // ใช้ join เพื่อเชื่อมตาราง
        $questions = Question::join(
            'questiontype',
            'question.questionTypeId',
            '=',
            'questiontype.questionTypeId'
        )
        ->where('question.questionTypeId', $req->questionTypeId)
        ->get();

        return view('showalltype', compact('questions'));
    }
}
