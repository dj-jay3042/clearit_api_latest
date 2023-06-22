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
class AttachTicketDocumentRequest extends BaseFormRequest
{
    /**
     * 
     * Get the validation rules that apply to the request.
     * 
     * @return array
     */
    public function rules(): array
    {
        return [
            'file' => "required|file",
            'ticketIdentifier' => "required|string",
            'documentType' => "required|string",
            'documentDescription' => "string",
            'invoiceNumber' => "string",
            'supplierName' => "string",
            'affiliateReference' => "string",
        ];
    }
}
