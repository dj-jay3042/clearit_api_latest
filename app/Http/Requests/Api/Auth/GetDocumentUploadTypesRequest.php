<?php

namespace App\Http\Requests\Api\Auth;

use App\Http\Requests\Api\BaseFormRequest;

/**
 *
 * This endpoint is used to login a user to the system.
 *
 * @header Token string required
 *
 * 
 * @bodyParam transport integer required Transport:<br/>1 - Truck <br/> 2 - Ocean <br/> 3 - Air <br/> 4 - Courier
 * 
 */
class GetDocumentUploadTypesRequest extends BaseFormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'transport' => "required|in:1,2,3,4"
        ];
    }
}
