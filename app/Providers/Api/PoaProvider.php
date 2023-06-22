<?php

namespace App\Providers\Api;

use App\Http\Helpers\DbHelper;

class PoaProvider 
{
    public static function poaRequest($params) {
        return DbHelper::callProcedure(__FUNCTION__, $params);
    }

    public static function poaReset($params) {
        return DbHelper::callProcedure(__FUNCTION__, $params);
    }

    public static function saveAffiliatePoa($params) {
        return DbHelper::callProcedure(__FUNCTION__, $params);
    }

    public static function updateAffiliatePoa($params) {
        return DbHelper::callProcedure(__FUNCTION__, $params);
    }

}