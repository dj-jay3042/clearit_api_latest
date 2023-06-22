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
class SaveUserBondReferenceRequest extends BaseFormRequest
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
            'userId' => "required|integer",
            'bondReferenceNumber' => "string",
            'bondExpiration' => "date|date_format:Y-m-d",
        ];
    }
}
