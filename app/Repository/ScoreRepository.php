<?php
namespace App\Repository;
use App\Models\Score;
use Illuminate\Support\Facades\DB;


class ScoreRepository
{
 public static function getScoreById($scoreValueId){
   return Score::where('scoreValueId', $scoreValueId)->orderBy('scoreValueId', 'ASC')->get();
}
 public static function getAllScores(){
   return Score::all();
}
}
?>
