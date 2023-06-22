<?php

namespace App\Http\Services;

use App\Http\Helpers\DbHelper;
use App\Providers\Api\PoaProvider;
use Illuminate\Http\Request;

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
            
            $request = new Request();
            $Token = $request->header("Token");
            $userData = DbHelper::callProcedure("getUser", [$Token, $userIdentifier]);
            $user = $userData[0];
            $hasCoSigner = "";
            if (isset($user['corporate']) && isset($user['corporatetype'])) {
                $hasCoSigner = $user['corporate'] == 2 || $user['corporatetype'] == 4;
            }
            $hasWitness = $user['status'] == 3 && $user['corporate'] == 2;

            if ($hasWitness) {
                DbHelper::callProcedure("createSigner", [
                    $userIdentifier,
                    $witnessFirstName,
                    $witnessLastName,
                    $witnessEmail,
                    'witness']
                );
            }
            if ($hasCoSigner) {
                DbHelper::callProcedure("createSigner", [
                    $userIdentifier,
                    $coSignFirstName,
                    $coSignLastName,
                    $coSignEmail,
                    'Officer_2']
                );
            }

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