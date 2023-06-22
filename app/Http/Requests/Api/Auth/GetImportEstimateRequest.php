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
 * @bodyParam shipping_method integer required Shipping Method:<br/>1 - Truck <br/> 2 - Ocean <br/> 3 - Air <br/> 4 - Courier
 * @bodyParam bond_type String required Bond Type:<br/>"S" - Single Entry <br/>"A" - Annual
 * 
 */
class GetImportEstimateRequest extends BaseFormRequest
{
    public function rules(): array
    {
        /**
         * Get the validation rules that apply to the request.
         *
         * @return array
         */
        return [
            'shipping_method' => "required|in:1,2,3,4",
            'shipment_value' => "required|double|between:0,999999.99",
            'hts_code' => "required|string",
            'quantity' => "required|integer",
            'bond_type' => "required|in:'A','S'",
        ];
    }
}
