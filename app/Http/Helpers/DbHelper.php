<?php

namespace App\Http\Helpers;

use Illuminate\Support\Facades\DB;

class DbHelper
{

    public static function callProcedure(string $name, array $params = [])
    {
        try {
        $query = sprintf("CALL `%s`(%s);", $name, implode(", ", array_fill(0, count($params), '?')));
        $result = DB::select($query, $params);
        return json_encode($result[0]);}
        catch (\Exception $ex) {
            return response()->json(['error' => '!!! Invalid Data(credentials) !!! Try Again!'], 401);
        }
    }
}
