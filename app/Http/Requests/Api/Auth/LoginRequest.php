<?php

namespace App\Http\Requests\Api\Auth;

use App\Http\Requests\Api\BaseFormRequest;

/**
 * @doc This endpoint allows users to update their profile information.
 *
 * @bodyParam username string required The name of the user. Example: John Doe. 
 * @bodyParam password string required The email address of the user. Example: john.doe@example.com.
 */
class LoginRequest extends BaseFormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @header Token string required
     * 
     * @return array
     */
    public function rules()
    {
        return [
            'username' => 'required|string',
            'password' => 'required|integer',
            'otherDetail' => '',
        ];
    }

    public function attributes()
    {
        return [
            'username' => 'User Name',
            'email' => 'Email',
        ];
    }
}
