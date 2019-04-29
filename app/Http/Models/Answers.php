<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Answers extends Model
{
    public $timestamps = false;
    public $fillable = ['QuestionID','A','B','C','D','CorrectAnswers','AnswerExplain'];
    public $primaryKey = 'QuestionID';

    public function questions()
    {
        return $this->belongsTo('App\Http\Models\Questions');
    }
}
