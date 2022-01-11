<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateSignature extends FormRequest
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
            "q_signature_characters" => ["required"],
            "default_subscription" => ["required", "min: 2", "max: 151"],
            "subscription_usage" => ["required"],
        ];
    }

    public function messages()
    {
        return [
            "q_signature_characters.required" => "O quantidade de assinatura é obrigatório.",
            "default_subscription.required" => "O assinatura padão é obrigatório.",
            "subscription_usage.required" => "O uso de assintura é obrigatório.",
        ];
    }
}
