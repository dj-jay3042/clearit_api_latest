<?php

namespace App\Providers\Api;

use App\Http\Helpers\DbHelper;

class TicketProvider {

    public static function createTicket($params) {
        return DbHelper::callProcedure(__FUNCTION__, $params);
    }

    public static function getDocumentUploadType($params) {
        return DbHelper::callProcedure(__FUNCTION__, $params);
    }

    public static function attachTicketDocument($params) {
        return DbHelper::callProcedure(__FUNCTION__, $params);
    }

    public static function createSoldTo($params) {
        return DbHelper::callProcedure(__FUNCTION__, $params);
    }

    public static function createVendor($params) {
        return DbHelper::callProcedure(__FUNCTION__, $params);
    }

    public static function getSoldToList($params) {
        return DbHelper::callProcedure(__FUNCTION__, $params);
    }

    public static function getTicketByAffiliateReference($params) {
        return DbHelper::callProcedure(__FUNCTION__, $params);
    }

    public static function getVendorList($params) {
        return DbHelper::callProcedure(__FUNCTION__, $params);
    }

    public static function getCustomerTickets($params) {
        return DbHelper::callProcedure(__FUNCTION__, $params);
    }

    public static function getTicketInformation($params) {
        return DbHelper::callProcedure(__FUNCTION__, $params);
    }

    public static function getChatMessages($params) {
        return DbHelper::callProcedure(__FUNCTION__, $params);
    }

    public static function createChatMessage($params) {
        return DbHelper::callProcedure(__FUNCTION__, $params);
    }

}