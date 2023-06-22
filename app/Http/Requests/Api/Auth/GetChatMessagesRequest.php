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
class GetChatMessagesRequest extends BaseFormRequest
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
            'ticketGuid' => "required|string",
            'pageNumber' => "required|integer"
        ];
    }
}
