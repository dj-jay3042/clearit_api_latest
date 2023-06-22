<?php

namespace App\Http\Services;

use App\Providers\Api\PoaProvider;

class PoaService
{
    public static function poaRequest($data) {
        try {
            $userIdentifier = $data["userIdentifier"];
            $signEmail = $data["signEmail"];
            $signFirstName = $data["signFirstName"];
            $signLastName = $data["signLastName"];
            $signAddress = $data["signAddress"];
            $signCity = $data["signCity"];
            $signState = $data["signState"];
            $signZip = $data["signZip"];
            $signTaxid = $data["signTaxid"];
            $signBusname = $data["signBusname"];
            $signTradename = $data["signTradename"];
            $witnessEmail = $data["witnessEmail"];
            $witnessFirstName = $data["witnessFirstName"];
            $witnessLastName = $data["witnessLastName"];
            $coSignEmail = $data["coSignEmail"];
            $coSignFirstName = $data["coSignFirstName"];
            $coSignLastName = $data["coSignLastName"];

            $params = [
                $userIdentifier,
                $signEmail,
                $signFirstName,
                $signLastName,
                $signAddress,
                $signCity,
                $signState,
                $signZip,
                $signTaxid,
                $signBusname,
                $signTradename,
                $witnessEmail,
                $witnessFirstName,
                $witnessLastName,
                $coSignEmail,
                $coSignFirstName,
                $coSignLastName,
            ];
            return PoaProvider::poaRequest($params);
        } catch (\Exception $th) {
            return response()->json(['error' => '!!! No Data Found !!! Try Again!'], 401);
        }
    }

    public static function poaReset($data) {
        try {
            $userIdentifier = $data["userIdentifier"];

            $params = [ $userIdentifier ];
            return PoaProvider::poaReset($params);
        } catch (\Exception $th) {
            return response()->json(['error' => '!!! No Data Found !!! Try Again!'], 401);
        }
    }

    public static function saveAffiliatePoa($data) {
        try {
            $queryString = $data["queryString"];
            $affiliateUserIdentifier = $data["affiliateUserIdentifier"];

            $params = [
                $queryString,
                $affiliateUserIdentifier
            ];
            return PoaProvider::saveAffiliatePoa($params);
        } catch (\Exception $th) {
            return response()->json(['error' => '!!! No Data Found !!! Try Again!'], 401);
        }
    }

    public static function updateAffiliatePoa($data) {
        try {
            $AffiliatePoaLogId = $data["AffiliatePoaLogId"];
            $Response = $data["Response"];

            $params = [
                $AffiliatePoaLogId,
                $Response
            ];
            return PoaProvider::updateAffiliatePoa($params);
        } catch (\Exception $th) {
            return response()->json(['error' => '!!! No Data Found !!! Try Again!'], 401);
        }
    }

}