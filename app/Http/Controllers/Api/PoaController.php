<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api\BaseApiController;
use App\Http\Helpers\LogHelper;
use App\Http\Requests\Api\Auth\PoaRequest;
use App\Http\Requests\Api\Auth\PoaResetRequest;
use App\Http\Requests\Api\Auth\SaveAffiliatePoaRequest;
use App\Http\Requests\Api\Auth\UpdateAffiliatePoaRequest;
use App\Http\Services\PoaService;
use Illuminate\Http\Response;

class PoaController extends BaseApiController
{

    public function poaRequest(PoaRequest $request, Response $response)
    {
        $referenceId = LogHelper::saveLogRequest($request);
        $data = $request->validated();
        $result = PoaService::poaRequest($data);        
        LogHelper::saveLogResponse($referenceId, $response);
        return $result;
    }

    public function poaReset(PoaResetRequest $request, Response $response)
    {
        $referenceId = LogHelper::saveLogRequest($request);
        $data = $request->validated();
        $result = PoaService::poaReset($data);        
        LogHelper::saveLogResponse($referenceId, $response);
        return $result;
    }

    public function saveAffiliatePoa(SaveAffiliatePoaRequest $request, Response $response)
    {
        $referenceId = LogHelper::saveLogRequest($request);
        $data = $request->validated();
        $result = PoaService::saveAffiliatePoa($data);        
        LogHelper::saveLogResponse($referenceId, $response);
        return $result;
    }

    public function updateAffiliatePoa(UpdateAffiliatePoaRequest $request, Response $response)
    {
        $referenceId = LogHelper::saveLogRequest($request);
        $data = $request->validated();
        $result = PoaService::updateAffiliatePoa($data);        
        LogHelper::saveLogResponse($referenceId, $response);
        return $result;
    }
}
