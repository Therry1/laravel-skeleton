<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormationRegistrationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'identifier'        => 'required',
            'email'             => 'required|email',
            'password'          => 'required',
            'formation_mode'    => 'required|int',
            'formation_city'    => 'required|int',
            'formation_option'  => 'required|int',
            'formation_level'   => 'required|int',
            'round_input'       => 'required',
            'payment_mode'      => 'required|int',
            'output_account'    => 'required|int|digits:9',
            'amount_paid'       => 'required|int',
        ];
    }
}
