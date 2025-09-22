<?php

namespace App\Http\Controllers;

use App\Repository\QuestionRepository;
use App\Repository\QuestiontypeRepository;
use App\Repository\ScoreRepository;
use App\Repository\SurveytsrformRepository;
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
//ใช้อันนี้
public static function getallSurveyTsr(){
    $typeList = QuestiontypeRepository::getAllQuestiontypes();
    // $questionType = QuestionRepository::getQuestionTypeWithId($questionTypeId);
    // $questionList = QuestionRepository::getAllQuestions();
    $scoreList = ScoreRepository::getAllScores();
    // dd($scoreList);
    $questionList = [];
    foreach($typeList as $type){
       array_push($questionList, $type->questions);
    }
    // dd($questionList);
    return view('surveytsrform', compact('questionList','typeList','scoreList'));
}
public static function submitall(Request $req){
    // $surveyTsrform = SurveytsrformRepository::saveSurveyTsr($req->comments); //ส่งไปที่name
    // dd($surveyTsrform);
    dd($req->all());
    // return view('submitsurveytsrform');
}
}
