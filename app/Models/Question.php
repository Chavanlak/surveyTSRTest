<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'questionId';
    protected $table = 'question';
    public function questionType()
    {
        // Define the inverse relationship to the QuestionType model.
        // The second parameter is the foreign key on the 'questions' table.
        // The third parameter is the primary key on the 'questiontypes' table.
        return $this->belongsTo(QuestionType::class, 'questionTypeId', 'questionTypeId');
    }
    use HasFactory;
}
