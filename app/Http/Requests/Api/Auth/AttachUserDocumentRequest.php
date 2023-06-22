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
class AttachUserDocumentRequest extends BaseFormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * 
     * @return array
     */
    public function rules(): array
    {
        return [
            'file' => "required|file",
            'userIdentifier' => "required|string",
            'documentDescription' => "string",
        ];
    }
}
