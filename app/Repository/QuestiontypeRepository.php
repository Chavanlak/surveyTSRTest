<?php
namespace App\Repository;
use App\Models\Questiontype;
use Illuminate\Support\Facades\DB;


class QuestiontypeRepository
{
   public static function getAllQuestiontypes()
   {
       return Questiontype::get();
   }
   public static function getQuestiontypeById($questionTypeId)
   {
    return Questiontype::where('questionTypeId',$questionTypeId)->first();
   }


}
?>
