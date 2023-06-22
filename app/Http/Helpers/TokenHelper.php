<?php

namespace App\Http\Helpers;

use App\Models\Data;
use App\Models\Token;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;

class TokenHelper
{

    public static function validateToken($token)
    {
        //get token created time difference
        $tokenTimeDiff = DB::select("SELECT TIMESTAMPDIFF(MINUTE, createdOn, NOW()) AS time_difference FROM token WHERE token = '" . $token . "'");
        if (is_null($tokenTimeDiff[0]) || $tokenTimeDiff[0]->time_difference > 5)
            return false;
        return true;
    }

    public static function generateToken($email, $password)
    {
        //current datetime
        $currentDateTime = Date::now()->format('Y-m-d H:i:s');
        //create new token
        $token = sha1($email . $password . $currentDateTime);
        //update token
        DB::table('token')->whereRaw("userId=(SELECT id FROM user WHERE email='" . $email . "' AND password='" . sha1($password) . "')")->update(['token' => $token, 'createdOn' => $currentDateTime]);
        return $token;
    }

    public static function getToken($email, $password)
    {
        //get token from database
        $token = DB::table('token')->select('token')->whereRaw("userId=(SELECT id FROM user WHERE email='" . $email . "' AND password='" . sha1($password) . "')")->get()->first()->token;
        //validate and generate new token
        if (self::validateToken($token))
            return $token;
        else
            return self::generateToken($email, $password);
    }
}
