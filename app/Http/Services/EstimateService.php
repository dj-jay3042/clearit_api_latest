<?php

namespace App\Http\Services;

use App\Providers\Api\EstimateProvider;

class EstimateService
{
    public static function getImportEstimate($data)
    {
        try {
            $shipping_method = $data["shipping_method"];
            $shipment_value = $data["shipment_value"];
            $hts_code = $data["hts_code"];
            $quantity = $data["quantity"];
            $bond_type = $data["bond_type"];

            $params = [
                $shipping_method,
                $shipment_value,
                $hts_code,
                $quantity,
                $bond_type
            ];
            return EstimateProvider::getImportEstimate($params);
        } catch (\Exception $th) {
            return response()->json(['error' => '!!! No Data Found !!! Try Again!'], 401);
        }
    }

    public static function getEstimate($data)
    {
        try {
            $estimateGuid = $data["estimateGuid"];

            $params = [$estimateGuid];
            return EstimateProvider::getEstimate($params);
        } catch (\Exception $th) {
            return response()->json(['error' => '!!! No Data Found !!! Try Again!'], 401);
        }
    }

    public static function getHTSCodeRequirement($data)
    {
        try {
            $hts_code = $data["hts_code"];

            $params = [$hts_code];
            return EstimateProvider::getHTSCodeRequirement($params);
        } catch (\Exception $th) {
            return response()->json(['error' => '!!! No Data Found !!! Try Again!'], 401);
        }
    }

    public static function lookupHTSCode($data)
    {
        try {
            $hts_code = $data["hts_code"];

            $params = [$hts_code];
            return EstimateProvider::getHTSCodeRequirement($params);
        } catch (\Exception $th) {
            return response()->json(['error' => '!!! No Data Found !!! Try Again!'], 401);
        }
    }

    public static function searchHTSCode($data)
    {
        try {
            $search = $data["search"];

            $params = [$search];
            return EstimateProvider::searchHTSCode($params);
        } catch (\Exception $th) {
            return response()->json(['error' => '!!! No Data Found !!! Try Again!'], 401);
        }
    }
}
