<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api\BaseApiController;
use App\Http\Helpers\DbHelper;
use App\Http\Helpers\LogHelper;
use App\Http\Requests\Api\Auth\CreateTicketRequest;
use App\Http\Requests\Api\Auth\AttachTicketDocumentRequest;
use App\Http\Requests\Api\Auth\CreateSoldToRequest;
use App\Http\Requests\Api\Auth\CreateVendorRequest;
use App\Http\Requests\Api\Auth\GetSoldToListRequest;
use App\Http\Requests\Api\Auth\GetDocumentUploadTypesRequest;
use App\Http\Requests\Api\Auth\GetTicketByAffiliateReferenceRequest;
use App\Http\Requests\Api\Auth\GetVendorListRequest;
use App\Http\Requests\Api\Auth\GetCustomerTicketsRequest;
use App\Http\Requests\Api\Auth\GetTicketInformationRequest;
use App\Http\Requests\Api\Auth\GetChatMessagesRequest;
use App\Http\Requests\Api\Auth\CreateChatMessageRequest;
use App\Http\Services\TicketService;
use App\Providers\Api\TicketProvider;
use Illuminate\Http\Response;
use PHPUnit\Framework\Attributes\Ticket;

class TicketController extends BaseApiController
{
    public function createTicket(CreateTicketRequest $request, Response $response)
    {

        $referenceId = LogHelper::saveLogRequest($request);
        $data = $request->validated();
        $result = TicketService::createTicket($data);
        
        LogHelper::saveLogResponse($referenceId, $response);
        return $result;
    }

    public function getDocumentUploadTypes(GetDocumentUploadTypesRequest $request, Response $response)
    {
        $referenceId = LogHelper::saveLogRequest($request);
        $data = $request->validated();
        $result = TicketService::getDocumentUploadType($data);
        
        LogHelper::saveLogResponse($referenceId, $response);
        return $result;
    }

    public function attachTicketDocument(AttachTicketDocumentRequest $request, Response $response)
    {
        $referenceId = LogHelper::saveLogRequest($request);
        $data = $request->validated();
        $result = TicketService::attachTicketDocument($data);
        
        LogHelper::saveLogResponse($referenceId, $response);
        return $result;
    }

    public function createSoldTo(CreateSoldToRequest $request, Response $response)
    {
        $referenceId = LogHelper::saveLogRequest($request);
        $data = $request->validated();
        return TicketService::createSoldTo($data);
        
        LogHelper::saveLogResponse($referenceId, $response);
    }

    public function createVendor(CreateVendorRequest $request, Response $response)
    {
        $referenceId = LogHelper::saveLogRequest($request);
        $data = $request->validated();
        $result = TicketService::createVendor($data);
        
        LogHelper::saveLogResponse($referenceId, $response);
        return $result;
    }

    public function getSoldToList(GetSoldToListRequest $request, Response $response)
    {
        $referenceId = LogHelper::saveLogRequest($request);
        $data = $request->validated();
        $result = TicketService::getSoldToList($data);
        
        LogHelper::saveLogResponse($referenceId, $response);
        return $result;
    }

    public function getTicketByAffiliateReference(GetTicketByAffiliateReferenceRequest $request, Response $response)
    {
        $referenceId = LogHelper::saveLogRequest($request);
        $data = $request->validated();
        $result = TicketService::getTicketByAffiliateReference($data);
        LogHelper::saveLogResponse($referenceId, $response);
        return $result;
    }

    public function getVendorList(GetVendorListRequest $request, Response $response)
    {
        $referenceId = LogHelper::saveLogRequest($request);
        $data = $request->validated();
        $result = TicketService::getVendorList($data);       
        LogHelper::saveLogResponse($referenceId, $response);
        return $result;
    }

    public function getCustomerTickets(GetCustomerTicketsRequest $request, Response $response)
    {
        $referenceId = LogHelper::saveLogRequest($request);
        $data = $request->validated();
        $result = TicketService::getCustomerTickets($data);        
        LogHelper::saveLogResponse($referenceId, $response);
        return $result;
    }

    public function getTicketInformation(GetTicketInformationRequest $request, Response $response)
    {
        $referenceId = LogHelper::saveLogRequest($request);
        $data = $request->validated();
        $result = TicketService::getTicketInformation($data);        
        LogHelper::saveLogResponse($referenceId, $response);
        return $result;
    }

    public function getChatMessages(GetChatMessagesRequest $request, Response $response)
    {
        $referenceId = LogHelper::saveLogRequest($request);
        $data = $request->validated();
        $result = TicketService::getChatMessages($data);        
        LogHelper::saveLogResponse($referenceId, $response);
        return $result; 
    }

    public function createChatMessage(CreateChatMessageRequest $request, Response $response)
    {
        
        $referenceId = LogHelper::saveLogRequest($request);
        $data = $request->validated();
        $result = TicketService::createChatMessage($data);        
        LogHelper::saveLogResponse($referenceId, $response);
        return $result;
    }
}
