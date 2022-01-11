<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateDocument extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "title" => ["required", "min: 5", "max: 200"],
            "subscription_numbers" => ["required"],
            "signature_responsible" => ["required"],
            "number_page" => ["required"],
            "document_size" => ["required"],
        ];
    }

    public function messages()
    {
        return [
            "title.required" => "O titulo é obrigatório.",
            "subscription_numbers.required" => "O números de assinaturas é obrigatório.",
            "signature_responsible.required" => "O assinatura do responsável é obrigatório.",
            "number_page.required" => "O número é obrigatório.",
            "document_size.required" => "O tamanho do documento é obrigatório.",
        ];
    }
}
