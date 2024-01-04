<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            //alpha can check on the data whether name is valid or not
            //min length is username required length
            'name' => ['required', 'alpha', 'min:5'],
            'email' => ['required', 'email'],
            'password' => 'required'
        ];
    }

    public function messages()
    {
        return  [
            //this is change the error message use rules.params
            'name.required' => 'The user name  field is required!!!!!',
            'name.alpha' => 'User name should only contain letters!!!!',
            'email.email' => 'This is not email format',
        ];
    }
}
