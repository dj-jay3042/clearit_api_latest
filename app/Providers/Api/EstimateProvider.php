<?php

namespace App\Providers\Api;

use App\Http\Helpers\DbHelper;

class EstimateProvider 
{
    public static function getImportEstimate($params) {
        return DbHelper::callProcedure(__FUNCTION__, $params);
    }

    public static function getEstimate($params) {
        return DbHelper::callProcedure(__FUNCTION__, $params);
    }

    public static function getHTSCodeRequirement($params) {
        return DbHelper::callProcedure(__FUNCTION__, $params);
    }

    public static function lookupHTSCode($params) {
        return DbHelper::callProcedure(__FUNCTION__, $params);
    }

    public static function searchHTSCode($params) {
        return DbHelper::callProcedure(__FUNCTION__, $params);
    }


}