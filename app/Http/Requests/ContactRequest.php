<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Http\Controlles\ContactController;

class ContactRequest extends FormRequest
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
            'email' => 'required|email'
        ];
    }

    public function messages()
    {
      return [
        'email' => 'Անպայման գրել էլեկտրոնային փոստի հասցեն'
      ];
    }
}
//  "Անպայման գրել էլեկտրոնային փոստի հասցեն"
