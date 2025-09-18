<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Questiontype extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'questionTypeId';
    protected $table = 'questiontype';
    use HasFactory;
    // public function questions() {
    //     return $this->hasMany(Question::class, 'questionTypeId', 'questionTypeId');
    // }
}
