<?php

namespace App\Providers\Api;

use App\Http\Helpers\DbHelper;

class UserProvider {

    public static function createUser($params) {
        return DbHelper::callProcedure(__FUNCTION__, $params);
    }

    public static function updateUser($params) {
        return DbHelper::callProcedure(__FUNCTION__, $params);
    }

    public static function getUser($params) {
        return DbHelper::callProcedure(__FUNCTION__, $params);
    }

    public static function createUserBondApplication($params) {
        return DbHelper::callProcedure(__FUNCTION__, $params);
    }

    public static function saveUserBondReference($params) {
        return DbHelper::callProcedure(__FUNCTION__, $params);
    }

    public static function attachUserDocument($params) {
        return DbHelper::callProcedure(__FUNCTION__, $params);
    }

}