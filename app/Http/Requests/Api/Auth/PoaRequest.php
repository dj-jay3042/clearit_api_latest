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
class PoaRequest extends BaseFormRequest
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
            'signEmail' => "required|string",
            'signFirstName' => "required|string",
            'signLastName' => "required|string",
            'signAddress' => "required|string",
            'signCity' => "required|string",
            'signState' => "required|string",
            'signZip' => "required|string",
            'signTaxid' => "string",
            'signBusname' => "string",
            'signTradename' => "string",
            'witnessEmail' => "string",
            'witnessFirstName' => "string",
            'witnessLastName' => "string",
            'coSignEmail	' => "string",
            'coSignFirstName' => "string",
            'coSignLastName' => "string",
        ];
    }
}
