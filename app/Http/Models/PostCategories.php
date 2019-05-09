<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class PostCategories extends Model
{
    protected $table = 'postcategories';
    public $primaryKey = 'CategoryID';
    public $timestamps = false;
    public $fillable = ['CategoryName','CategoryDescription'];
}
