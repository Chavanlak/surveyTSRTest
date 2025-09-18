<?php

namespace App\Http\Controllers;

use App\Repository\QuestiontypeRepository;
use Illuminate\Http\Request;

class QuestiontypeController extends Controller
{
    public static function Showallquestiontypes(){
        $type = QuestiontypeRepository::getAllQuestiontypes();
        return view('showalltype', compact('type'));
    }
}
