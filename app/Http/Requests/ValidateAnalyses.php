<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateAnalyses extends FormRequest
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
            "status" => ["required", "min: 5", "max: 45"],
            "viewers" => ["required"],
            "id_document" => ["required"],
            "id_signature" => ["required"],
        ];
    }

    public function messages()
    {
        return [
            "status.required" => "O status é obrigatório.",
            "viewers.required" => "O viewers é obrigatório.",
            "id_document.required" => "O campo documento é obrigatório.",
            "id_signature.required" => "O campo assinatura é obrigatório.",
        ];
    }
}
