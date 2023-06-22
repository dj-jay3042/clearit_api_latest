<?php

namespace App\Http\Services;

use App\Core\Model\Core;
use App\Mail\sendEmailFreightosLink;
use App\Providers\Api\TicketProvider;
use Illuminate\Support\Facades\Mail;

class TicketService
{
    public static function createTicket(array $data)
    {
        try {
            $transport = $data["transport"];
            $userIdentifier = $data["userIdentifier"];
            $soldToId = $data["soldToId"];
            $vendorId = $data["vendorId"];
            $carrier = $data["carrier"];
            $trackingNumber = $data["trackingNumber"];
            $requiresDelivery = $data["requiresDelivery"];
            $deliverySelection = $data["deliverySelection"];
            $deliveryAddress = $data["deliveryAddress"];
            $affiliateReference = $data["pAffiliateReference"];

            $params = [
                $transport,
                $userIdentifier,
                $soldToId,
                $vendorId,
                $carrier,
                $trackingNumber,
                $requiresDelivery,
                $deliverySelection,
                $deliveryAddress,
                $affiliateReference
            ];

            $emailConfig = Core::getEmailConfig();
            $email = $emailConfig->ticketsEmail;
            if ($email) {
                $variables['info_email'] = $emailConfig->emailMain;
                $fromEmail = $emailConfig->freightosEmail;
                $freightosRef = empty($variables['freightosRef']) ? '' : $variables['freightosRef'];
                $msg = new sendEmailFreightosLink($fromEmail);

            }
            Mail::to($email)->send($msg);
            return TicketProvider::createTicket($params);
        } catch (\Exception $th) {
            return response()->json(['error' => '!!! No Data Found !!! Try Again!'], 401);
        }
    }

    public static function getDocumentUploadType(array $data)
    {
        try {
            $transport = $data["transport"];

            $params = [
                $transport
            ];
            $result = TicketProvider::getDocumentUploadType($params);

            return $result;
        } catch (\Exception $th) {
            return response()->json(['error' => '!!! No Data Found !!! Try Again!'], 401);
        }
    }

    public static function attachTicketDocument(array $data)
    {
        try {
            $file = $data["file"];
            $ticketIdentifier = $data["ticketIdentifier"];
            $documentType = $data["documentType"];
            $documentDescription = $data["documentDescription"];
            $invoiceNumber = $data["invoiceNumber"];
            $supplierName = $data["supplierName"];
            $affiliateReference = $data["affiliateReference"];

            $params = [
                $ticketIdentifier,
                $documentType,
                $documentDescription,
                $invoiceNumber,
                $supplierName,
                $affiliateReference,
            ];
            $result = TicketProvider::attachTicketDocument($params);

            return $result;
        } catch (\Exception $th) {
            return response()->json(['error' => '!!! No Data Found !!! Try Again!'], 401);
        }
    }

    public static function createSoldTo(array $data)
    {
        try {
            $userIdentifier = $data["userIdentifier"];
            $firstname = $data["firstname"];
            $lastname = $data["lastname"];
            $legalBusinessName = $data["legalBusinessName"];
            $streetAddress = $data["streetAddress"];
            $city = $data["city"];
            $country = $data["country"];
            $stateIdentifier = $data["stateIdentifier"];
            $postalCode = $data["postalCode"];
            $phoneNumber = $data["phoneNumber"];
            $faxNumber = $data["faxNumber"];
            $importerNumber = $data["importerNumber"];
            $email = $data["email"];

            $params = [
                $userIdentifier,
                $firstname,
                $lastname,
                $legalBusinessName,
                $streetAddress,
                $city,
                $country,
                $stateIdentifier,
                $postalCode,
                $phoneNumber,
                $faxNumber,
                $importerNumber,
                $email,
            ];
            $result = TicketProvider::createSoldTo($params);

            return $result;
        } catch (\Exception $th) {
            return response()->json(['error' => '!!! No Data Found !!! Try Again!'], 401);
        }
    }

    public static function createVendor(array $data)
    {
        try {
            $userIdentifier = $data["userIdentifier"];
            $name = $data["name"];
            $address = $data["address"];
            $city = $data["city"];
            $stateIdentifier = $data["stateIdentifier"];
            $country = $data["country"];
            $postalCode = $data["postalCode"];
            $carrierRef = $data["carrierRef"];
            $phoneNumber = $data["phoneNumber"];
            $fax = $data["fax"];
            $email = $data["email"];
            $contactName = $data["contactName"];

            $params = [
                $userIdentifier,
                $name,
                $address,
                $city,
                $stateIdentifier,
                $country,
                $postalCode,
                $carrierRef,
                $phoneNumber,
                $fax,
                $email,
                $contactName,
            ];
            $result = TicketProvider::createVendor($params);

            return $result;
        } catch (\Exception $th) {
            return response()->json(['error' => '!!! No Data Found !!! Try Again!'], 401);
        }
    }

    public static function getSoldToList(array $data)
    {
        try {
            $userIdentifier = $data["userIdentifier"];
            $pageNumber = $data["pageNumber"];

            $params = [
                $userIdentifier,
                $pageNumber
            ];
            $result = TicketProvider::getSoldToList($params);

            return $result;
        } catch (\Exception $th) {
            return response()->json(['error' => '!!! No Data Found !!! Try Again!'], 401);
        }
    }

    public static function getTicketByAffiliateReference(array $data)
    {
        try {
            $affiliateReference = $data["affiliateReference"];

            $params = [
                $affiliateReference,
            ];
            $result = TicketProvider::getTicketByAffiliateReference($params);

            return $result;
        } catch (\Exception $th) {
            return response()->json(['error' => '!!! No Data Found !!! Try Again!'], 401);
        }
    }

    public static function getVendorList($data)
    {
        try {
            $userIdentifier = $data["userIdentifier"];
            $pageNumber = $data["pageNumber"];

            if ($pageNumber <= 0) {
                $pageNumber = 1;
            }
            $offset = ($pageNumber - 1) * 50;

            $params = [
                $userIdentifier,
                $$offset
            ];
            $result = TicketProvider::getVendorList($params);

            return $result;
        } catch (\Exception $th) {
            return response()->json(['error' => '!!! No Data Found !!! Try Again!'], 401);
        }
    }

    public static function getCustomerTickets($data)
    {
        try {
            $userId = $data["userId"];
            $pageNumber = $data["pageNumber"];

            if ($pageNumber <= 0) {
                $pageNumber = 1;
            }
            $offset = ($pageNumber - 1) * 50;

            $params = [
                $userId,
                $offset
            ];
            $result = TicketProvider::getCustomerTickets($params);

            return $result;
        } catch (\Exception $th) {
            return response()->json(['error' => '!!! No Data Found !!! Try Again!'], 401);
        }
    }

    public static function getTicketInformation($data)
    {
        try {
            $userId = $data["userId"];
            $pageNumber = $data["pageNumber"];

            if ($pageNumber <= 0) {
                $pageNumber = 1;
            }
            $offset = ($pageNumber - 1) * 50;

            $params = [
                $userId,
                $offset
            ];
            $result = TicketProvider::getTicketInformation($params);

            return $result;
        } catch (\Exception $th) {
            return response()->json(['error' => '!!! No Data Found !!! Try Again!'], 401);
        }
    }

    public static function getChatMessages($data)
    {
        try {
            $ticketGuid = $data["ticketGuid"];
            $pageNumber = $data["pageNumber"];

            if ($pageNumber <= 0) {
                $pageNumber = 1;
            }
            $offset = ($pageNumber - 1) * 50;

            $params = [
                $ticketGuid,
                $offset
            ];
            $result = TicketProvider::getChatMessages($params);

            return $result;
        } catch (\Exception $th) {
            return response()->json(['error' => '!!! No Data Found !!! Try Again!'], 401);
        }
    }

    public static function createChatMessage($data)
    {
        try {
            $ticketGuid = $data["ticketGuid"];
            $message = $data["message"];
            $userIdentifier = $data["userIdentifier"];
            $isMaster = $data["isMaster"];

            $params = [
                $ticketGuid,
                $message,
                $userIdentifier,
                $isMaster,
            ];
            $result = TicketProvider::createChatMessage($params);

            return $result;
        } catch (\Exception $th) {
            return response()->json(['error' => '!!! No Data Found !!! Try Again!'], 401);
        }
    }
}
