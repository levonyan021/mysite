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
            'email' => 'required|email',
            'name' => 'required|min: 2|max: 30',
            'message' => 'required|min: 5|max: 30'
        ];
    }

    public function messages()
    {
      return [
        'email.email' => 'Անպայման գրել էլեկտրոնային փոստի հասցեն',
        'email.required' => 'Անպայման գրել էլեկտրոնային փոստի հասցեն',
        'name.required' => 'Օգտատիրոջ անվան դաշտը պարտադիր լրացված պետք է լինի',
        'message.required' => 'Նամակի դաշտը պետք է լինի լրացված',
        'message.min' => 'Նամակի դաշտը շատ կարճ է'
      ];
    }
}
//  "Անպայման գրել էլեկտրոնային փոստի հասցեն"
