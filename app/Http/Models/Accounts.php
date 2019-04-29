<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Accounts extends Model
{
    protected $primaryKey = 'AccountID';
    public $fillable = ['Email','FirstName','LastName','WorkPlace','PhoneNumber','Address','Gender','Role'];
    public function scores() {
        return $this->hasMany('App\Http\Models\Scores');
    }

    public function roles() {
        return $this->hasOne('App\Http\Models\Roles');
    }

    public function posts() {
        return $this->hasMany('App\Http\Models\Posts');
    }

    public $timestamps = false; //để không bị dính hai cột updated_at và created_at trong Laravel Eloquent
    public static function getSingleAccount($email,$password)
    {
        $user = Accounts::where('Email','=',$email)->where('Password','=',$password)->first();
        return $user;
    }

    public static function store($email, $password, $firstName)
    {
        $account = new Accounts;
        $account->Email = $email;
        $account->Password = $password;
        $account->FirstName = $firstName;
        $checkEmail = Accounts::where("Email","=",$email);
        if($checkEmail->count()>0)
            return false;
        $account->save();
        return true;
    }

    public static function checkEmailAvailable($email)
    {
        $checkResult = Accounts::where("Email","=",$email)->count();
        if($checkResult>0)
            return false;
        return true;
    }

    public static function getAccountInfo($AccountID)
    {
        $infos = Accounts::where('AccountID',$AccountID)->first();
        return $infos;
    }
}
