<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Modules extends Model
{
    public $timestamps = false;
    public $primaryKey = 'ModuleID';
    public $fillable = ['ModuleName','ModuleDescription'];

    public function questions() {
        return $this->hasMany('App\Http\Models\Questions');
    }

    public function posts() {
        return $this->hasMany('App\Http\Models\Posts');
    }

    public static function getModuleInfo($ModuleID)
    {
        return Modules::where('ModuleID',$ModuleID)->first();
    }
}
