<?php

namespace App\Http\Controllers;

use App\Repository\QuestionRepository;
use App\Repository\QuestiontypeRepository;
use Illuminate\Http\Request;

class SurveytsrformController extends Controller
{
    public static function GetSurveyTsrForm($questionTypeId){
       $questionType = QuestiontypeRepository::getQuestiontypeById($questionTypeId);
       $questionList = QuestionRepository::getQuestionTypeWithId($questionTypeId);
       dd($questionList);
    //    return view('surveytsrform', compact('questionType','questionList'));
        
    }
    public static function ShowSurveyTsrForm(){
        return view('surveytsrform');
    }

    public static function submitSurveyTsrFrom(Request $req){
        // $questionType = QuestiontypeRepository::getQuestiontypeById($req->questionTypeId);
        $question = QuestionRepository::getQuestionTypeWithId($req->questionTypeId);
        $questionList = QuestionRepository::getAllQuestions();
        // $questionId = $req->input('questionId');
        dd($req->all());
        // return view('submitsurveytsrform', compact('questionType','question','questionId'));
  
}
public static function gatall(){
    $typeList = QuestiontypeRepository::getAllQuestiontypes();
    // $questionType = QuestionRepository::getQuestionTypeWithId($questionTypeId);
    $questionList = QuestionRepository::getAllQuestions();
    // dd($questionList);
    return view('surveytsrform', compact('questionList','typeList'));
}
}
