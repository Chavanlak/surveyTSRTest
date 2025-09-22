<?php
namespace App\Repository;
use App\Models\Surveytsrform;
use Illuminate\Support\Facades\DB;


class SurveytsrformRepository
{
   public static function getallSurveyTsr(){
    return Surveytsrform::all();
   }
public static function getAllSurveyTsrById($surveyId)
{
    return Surveytsrform::where('surveyId', '=', $surveyId)->get();
}
public static function saveSurveyTsr($comments)
{
    $surveytsrform = new Surveytsrform();
    $surveytsrform ->comments = $comments;

    $surveytsrform->save();
    return $surveytsrform;


}
}

?>
