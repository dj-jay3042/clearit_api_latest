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
class CreateUserBondApplicationRequest extends BaseFormRequest
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
            'firstname' => "string",
            'lastname' => "string",
            'phone' => "string",
            'busname' => "string",
            'tradename' => "string",
            'yearsInBusiness' => "integer",
            'physicalAddress' => "string",
            'physicalCity' => "string",
            'physicalCountry' => "string",
            'physicalState' => "string",
            'physicalZip' => "string",
            'mailingAddress' => "string",
            'mailingCity' => "string",
            'mailingCountry' => "string",
            'mailingState' => "string",
            'mailingZip' => "string",
            'isBondOnFile' => "integer",
            'isTerminationSent' => "integer",
            'terminationDate' => "date|date_format:Y-m-d",
            'hasSuretyLoss' => "integer",
            'hasPrincipalSanctions' => "integer",
            'merchandiseDesc' => "string",
            'manufacturerCountries' => "string",
            'hasCountervailingDuties' => "integer",
            'requireReconciliationRider' => "integer",
            'valueMerchandiseImportedLast12Months' => "integer",
            'estimatedTaxesLast12Months' => "integer",
            'numberOfEntriesLast12Months' => "integer",
            'valueMerchandiseImportedNext12Months' => "integer",
            'estimatedTaxesNext12Months' => "integer",
            'numberOfEntriesNext12Months' => "integer",
        ];
    }
}
