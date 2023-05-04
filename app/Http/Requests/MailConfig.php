<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MailConfig extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
           'mail_server' => 'required|max:255',
           'gate' => 'required|max:255',
           'email' => 'required|email',
           'password' => 'required|max:255',
        ];
    }
}
