<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api\BaseApiController;
use App\Http\Helpers\LogHelper;
use App\Http\Helpers\TokenHelper;
use App\Http\Requests\Api\Auth\CreateUserRequest;
use App\Http\Requests\Api\Auth\UpdateUserRequest;
use App\Http\Requests\Api\Auth\GetUserRequest;
use App\Http\Requests\Api\Auth\CreateUserBondApplicationRequest;
use App\Http\Requests\Api\Auth\SaveUserBondReferenceRequest;
use App\Http\Requests\Api\Auth\AttachUserDocumentRequest;
use App\Http\Requests\Api\GetTokenRequest;
use App\Http\Services\UserService;
use Illuminate\Http\Response;

class UserController extends BaseApiController
{
    /**
     * 
     *
     * 
     * @authenticated
     * 
     */
    public function createUser(CreateUserRequest $request, Response $response)
    {
        $referenceId = LogHelper::saveLogRequest($request);
        $data = $request->validated();
        $result = UserService::createUser($data);
        LogHelper::saveLogResponse($referenceId, $response);
        return $result;
    }

    public function updateUser(UpdateUserRequest $request, Response $response)
    {
        $referenceId = LogHelper::saveLogRequest($request);
        $data = $request->validated();
        $result = UserService::updateUser($data);
        LogHelper::saveLogResponse($referenceId, $response);
        return $result;
    }

    public function getUser(GetUserRequest $request, Response $response)
    {
        $referenceId = LogHelper::saveLogRequest($request);
        $data = $request->validated();
        $result = UserService::getUser($data);
        LogHelper::saveLogResponse($referenceId, $response);
        return $result;
    }

    public function createUserBondApplication(CreateUserBondApplicationRequest $request, Response $response)
    {
        $referenceId = LogHelper::saveLogRequest($request);
        $data = $request->validated();
        $result = UserService::createUserBondApplication($data);
        LogHelper::saveLogResponse($referenceId, $response);
        return $result;
    }

    public function saveUserBondReference(SaveUserBondReferenceRequest $request, Response $response)
    {
        $referenceId = LogHelper::saveLogRequest($request);
        $data = $request->validated();
        $result = UserService::saveUserBondReference($data);
        LogHelper::saveLogResponse($referenceId, $response);
        return $result;
    }

    public function attachUserDocument(AttachUserDocumentRequest $request, Response $response)
    {
        $referenceId = LogHelper::saveLogRequest($request);
        $data = $request->validated();
        $result = UserService::attachUserDocument($data);
        LogHelper::saveLogResponse($referenceId, $response);
        return $result;
    }


    /*
     *
     * no Token required for this request endpoint
     * no header required
     * 
     */
    public function getToken(GetTokenRequest $request) {
        $data = $request->validated();
        return TokenHelper::getToken($data["email"], $data["password"]);
    }
}
