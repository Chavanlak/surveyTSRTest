<?php

namespace App\Http\Controllers;

use App\Repository\QuestiontypeRepository;
use Illuminate\Http\Request;

class QuestiontypeController extends Controller
{
    public static function Showallquestiontypes(){
        $typeList = QuestiontypeRepository::getAllQuestiontypes();
        return view('surveytsrform', compact('typeList'));
    }
}
