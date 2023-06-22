<?php

namespace App\Http\Helpers;

use App\Models\Log;
use Illuminate\Log\Logger;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\File\Stream;

class LogHelper {
   
    protected static $logger;
    /**
     * Generate Globally Unique Identifier (GUID)
     * E.g. 2EF40F5A-ADE8-5AE3-2491-85CA5CBD6EA7
     *
     * @param boolean $include_braces Set to true if the final guid needs
     *                                to be wrapped in curly braces
     * @return string
     */
    public static function generateGuid($include_braces = false) {
        $lastId = DB::table('log')->select('id')->max('id');
        return $lastId + 1;
    }

    public static function saveLogRequest($request, $userId = null) {
        $guid = self::generateGuid();
        $requestContent = $request->getContent();
        if (empty($requestContent) && $request->isPost()) {
            $requestContent = $request->getPost()->toString();
        }
        if( DB::table("log")->insert([
            'requestUri'=>$request->getRequestUri(),
            'requestMethod'=>$request->getMethod(),
            'requestBody'=>$requestContent,
            'ipaddress'=>$request->ip(),
            'userid'=>$userId,
            'guid'=>$guid
        ]) ) {
            return $guid;
        }
        return false;
    }

    public static function saveLogResponse($logGuid, $response) {
        $log = Log::where('guid', $logGuid)->first();
        DB::table("log")->where('id', $log['id'])->update(['responseBody'=>$response->getContent(), 'responseStatusCode' => $response->getStatusCode()]);
        if( $log ) {
            return $log['guid'];
        }
        return false;
    }
}