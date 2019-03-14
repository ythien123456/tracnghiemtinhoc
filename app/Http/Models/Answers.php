<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Answers extends Model
{
    public function questions()
    {
        return $this->belongsTo('App\Http\Models\Questions','QuestionID','QuestionID');
    }
}
