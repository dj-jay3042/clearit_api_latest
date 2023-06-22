<?php

namespace App\Http\Requests\Api;

class GetTokenRequest extends BaseFormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'email' => "required|email",
            'password' => "required|string"
        ];
    }
}
