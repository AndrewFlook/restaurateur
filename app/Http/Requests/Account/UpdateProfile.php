<?php

namespace App\Http\Requests\Account;

use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;

class UpdateProfile extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::user()->id;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name_first' => ['required', 'min:2', 'max:255', 'alpha'],
            'name_last' => ['required', 'min:2', 'max:255', 'alpha'],
            'email' => ['required', 'min:6', 'max:255', 'email', Rule::unique('users')->ignore(Auth::user()->id)],
        ];
    }

    /**
     * Configure the validator instance.
     * @param   \Illuminate\Validation\Validator    $validator
     * @return void
     */
    public function withValidator($validator)
    {
        //
    }

    /**
     * Get custom attributes for validator errors.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            'name_first' => 'first name',
            'name_last' => 'last name',
            'email' => 'email address',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name_first.alpha' => 'Your :attribute may only contain alphabetic characters.',
            'name_first.required' => 'Your :attribute is required.',
            'name_first.min' => 'Your :attribute must be at least :min characters.',
            'name_first.max' => 'Your :attribute cannot be longer than :max characters.',
            'name_last.alpha' => 'Your :attribute may only contain alphabetic characters.',
            'name_last.required' => 'Your :attribute is required.',
            'name_last.min' => 'Your :attribute must be at least :min characters.',
            'name_last.max' => 'Your :attribute cannot be longer than :max characters.',
            'email.required' => 'An :attribute is required.',
            'email.min' => 'Your :attribute must be at least :min characters.',
            'email.max' => 'Your :attribute cannot be longer than :max characters.',
            'email.email' => 'Your :attribute must match standard email formats.',
            'email.unique' => 'That :attribute is already in use. Please use another.',
        ];
    }
}