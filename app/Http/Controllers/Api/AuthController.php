<?php

namespace App\Http\Controllers\Api;

use App\Helpers\Http\HttpStatuses;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Api\BaseApiController;
use App\Http\Requests\Api\Auth\LoginRequest;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\UnauthorizedException;

class AuthController extends BaseApiController
{

    public function login(LoginRequest $request)
    {
        $data = $request->validated();
        // dd($data);
        // return $data['password'];

        $results = DB::table('affiliate_agent_status_display')
            ->where('id', '1')
            ->update(['statusName' => 'Pending']);
        dump($results);
        return $data;

        return $results;
        // try {
        //     // $loginInfo = $this->authService->login($data, $request->ip());
        //     $loginInfo = ['kkk' => 123];
        //     return $this->respond($loginInfo);
        // } catch (ModelNotFoundException $e) {
        //     return $this->respond(null, HttpStatuses::HTTP_NOT_FOUND, "User not found!");
        // } catch (UnauthorizedException $e) {
        //     return $this->respond(null, HttpStatuses::HTTP_UNAUTHORIZED, $e->getMessage());
        // } catch (\Exception $e) {
        //     return $this->respond(null, HttpStatuses::HTTP_BAD_REQUEST, "Something went wrong!.");
        // }
    }

    public function users(Request $request)
    {
        // echo '<pre>';
        // print_r($request);
        // die;
        // return json_encode(['kkk' => 123]);
        return true;
    }
}
