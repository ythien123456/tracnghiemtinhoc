<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    public $primaryKey = 'RoleID';
    public $fillable = ['RoleTitle','RoleDescription'];
    public $timestamps = false;
}
