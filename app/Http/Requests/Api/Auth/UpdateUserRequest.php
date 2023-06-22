<?php

namespace App\Http\Requests\Api\Auth;

use App\Http\Requests\Api\BaseFormRequest;

/**
 *
 * This endpoint is used to login a user to the system.
 *
 * @header Token string required
 * 
 * @bodyParam accountType integer required Account type:<br/>1 - Presonal <br/> 2 - Business <br/> 3 - NRI
 * @bodyParam businessStructureType integer Business Structure Type:<br/>1 - Corporation <br/> 2 - Sole Proprietorship <br/> 3 - LLC <br/> 4 - Partnership
 * @bodyParam signingOfficerType integer Signing officer type:<br/>1 - Single signing officer<br/> 2 - Co-signing officer
 * @bodyParam haveBond integer required Does the user have a bond<br/>1 - Yes <br/> 0 - No
 * @bodyParam bondType integer Bond type:<br/> 1 - Single entry<br/> 2 - Annual
 */
class UpdateUserRequest extends BaseFormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'email' => 'required|email',
            'accountType' => 'required|integer|in:1,2,3',
            'businessStructureType' => 'integer|in:1,2,3,4',
            'signingOfficerType' => 'integer|in:1,2',
            'legalBusinessName' => 'string',
            'tradeName' => 'string',
            'importerNumber' => 'string',
            'streetAddress' => 'required|string',
            'city' => 'required|string',
            'country' => 'required|string',
            'stateIdentifier' => 'required|string',
            'postalCode' => 'required|string',
            'contactFirstName' => 'required|string',
            'contactLastName' => 'required|string',
            'phoneNumber' => 'required|string|size:10',
            'faxNumber' => 'string',
            'birthDate' => 'required|date|date_format:Y-m-d',
            'haveBond' => 'required|integer|in:0,1',
            'bondReferenceNumber' => 'string',
            'bondExpirationYear' => 'string|size:4',
            'bondExpirationMonth' => 'string|size:2',
            'bondExpirationDay' => 'string|size:2',
            'bondType' => 'integer|in:1,2',
            'affiliateReference' => 'string',
            'affiliateShipmentNumber' => 'string',
            'createdByUserId' => 'integer',
            'jurisdictionState' => 'string',
            'verificationUserId' => 'integer',
        ];
    }
}
