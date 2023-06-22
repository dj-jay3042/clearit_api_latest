<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api\BaseApiController;
use App\Http\Helpers\LogHelper;
use App\Http\Requests\Api\Auth\GetImportEstimateRequest;
use App\Http\Requests\Api\Auth\GetEstimateRequest;
use App\Http\Requests\Api\Auth\GetHTSCodeRequirementRequest;
use App\Http\Requests\Api\Auth\LookupHTSCodeRequest;
use App\Http\Requests\Api\Auth\SearchHTSCodeRequest;
use App\Http\Services\EstimateService;
use Illuminate\Http\Response;

class EstimateController extends BaseApiController
{

    public function getImportEstimate(GetImportEstimateRequest $request, Response $response)
    {
        $referenceId = LogHelper::saveLogRequest($request);
        $data = $request->validated();
        $result = EstimateService::getImportEstimate($data);        
        LogHelper::saveLogResponse($referenceId, $response);
        return $result;
    }

    public function getEstimate(GetEstimateRequest $request, Response $response)
    {
        $referenceId = LogHelper::saveLogRequest($request);
        $data = $request->validated();
        $result = EstimateService::getEstimate($data);        
        LogHelper::saveLogResponse($referenceId, $response);
        return $result;
    }

    public function getHTSCodeRequirement(GetHTSCodeRequirementRequest $request, Response $response)
    {
        $referenceId = LogHelper::saveLogRequest($request);
        $data = $request->validated();
        $result = EstimateService::getHTSCodeRequirement($data);        
        LogHelper::saveLogResponse($referenceId, $response);
        return $result;
    }

    public function lookupHTSCode(LookupHTSCodeRequest $request, Response $response)
    {
        $referenceId = LogHelper::saveLogRequest($request);
        $data = $request->validated();
        $result = EstimateService::lookupHTSCode($data);        
        LogHelper::saveLogResponse($referenceId, $response);
        return $result;
    }

    public function searchHTSCode(SearchHTSCodeRequest $request, Response $response)
    {
        $referenceId = LogHelper::saveLogRequest($request);
        $data = $request->validated();
        $result = EstimateService::searchHTSCode($data);        
        LogHelper::saveLogResponse($referenceId, $response);
        return $result;
    }
}
