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
 * @bodyParam requiresDelivery integer required Requires delivery:<br/>1 - Yes <br/>0 - No
 * @bodyParam deliverySelection integer required Delivery selection:<br/>1 - Commercial <br/>2 - Residential <br/>3 - Amazon
 * 
 */
class CreateTicketRequest extends BaseFormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'transport' => "required|in:1,2,3,4",
            'userIdentifier' => "required|string",
            'soldToId' => "required|integer",
            'vendorId' => "required|integer",
            'carrier' => "string",
            'trackingNumber' => "string",
            'requiresDelivery' => "in:0,1",
            'deliverySelection' => "in:1,2,3",
            'deliveryAddress' => "string",
            'affiliateReference' => "string",
        ];
    }
}
