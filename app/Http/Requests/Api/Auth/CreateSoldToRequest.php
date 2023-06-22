<?php

namespace App\Http\Requests\Api\Auth;

use App\Http\Requests\Api\BaseFormRequest;

/** 
 *
 * Get the validation rules that apply to the request.
 * 
 * @header Token string required
 *
 */
class CreateSoldToRequest extends BaseFormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @header Token string required
     * 
     * @return array
     */
    public function rules(): array
    {
        return [
            'userIdentifier' => "required|string",
            'firstname' => "required|string",
            'lastname' => "required|string",
            'legalBusinessName' => "string",
            'streetAddress' => "required|string",
            'city' => "required|string",
            'country' => "required|string",
            'stateIdentifier' => "required|string",
            'postalCode' => "required|string",
            'phoneNumber' => "required|string",
            'faxNumber' => "string",
            'importerNumber' => "string",
            'email' => "string",
        ];
    }
}
