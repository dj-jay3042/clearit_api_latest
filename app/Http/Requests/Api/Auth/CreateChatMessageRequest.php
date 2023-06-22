<?php

namespace App\Http\Requests\Api\Auth;

use App\Http\Requests\Api\BaseFormRequest;

/**
 *
 * This endpoint is used to login a user to the system.
 *
 * @header Token string required
 * 
 * @bodyParam isMaster integer required <br/>1 - Incoming message (from an agent) <br/> 0 - Outcoming message (from customer)
 * 
 */
class CreateChatMessageRequest extends BaseFormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'ticketGuid' => "required|string",
            'message' => "required|string",
            'userIdentifier' => "string",
            'isMaster' => "in:0,1",
        ];
    }
}
