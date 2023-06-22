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
class CreateVendorRequest extends BaseFormRequest
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
            'name' => "required|string",
            'address' => "required|string",
            'city' => "required|string",
            'stateIdentifier' => "required|string",
            'country' => "required|string",
            'postalCode' => "string",
            'carrierRef' => "string",
            'phoneNumber' => "required|string",
            'fax' => "string",
            'email' => "string",
            'contactName' => "string",
        ];
    }
}
