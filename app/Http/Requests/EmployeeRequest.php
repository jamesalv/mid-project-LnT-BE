<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|string|min:5|max:20',
            'age' => 'required|numeric|min:21',
            'address' => 'required|string|min:10|max:40',
            // phone should start with '08' and have 9-12 digits
            'phone' => 'required|regex:/^08[0-9]{7,10}$/',
        ];
    }
}
