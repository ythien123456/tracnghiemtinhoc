<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Accounts extends Model
{
    public $timestamps = false; //để không bị dính hai cột updated_at và created_at trong Laravel Eloquent
    public static function getSingleAccount($email,$password)
    {
        $user = Accounts::where('Email','=',$email)->where('Password','=',$password)->first();
        return $user;
    }

    public static function registerAccount($email, $password, $firstName, $lastName, $gender, $workPlace, $phoneNumber, $address)
    {
        $account = new Accounts;
        $account->Email = $email;
        $account->Password = $password;
        $account->FirstName = $firstName;
        $account->LastName = $lastName;
        $account->Gender = $gender;
        $account->WorkPlace = $workPlace;
        $account->PhoneNumber = $phoneNumber;
        $account->Address = $address;
        $checkEmail = Accounts::where("Email","=",$email);
        $checkPhoneNumber = Accounts::where("PhoneNumber","=",$phoneNumber);
        if($checkEmail->count()>0 || $checkPhoneNumber->count()>0)
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
}
