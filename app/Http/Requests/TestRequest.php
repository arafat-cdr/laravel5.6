<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TestRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        #return false; #Need to authorized 

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
            'name' => 'required | alpha'
        ];
    }

    public function messages() {

        return [

            'name.required' => 'Field :attribute cannot be Left Blank ',
            'name.alpha' => 'Field :attribute Must be alpha Numeric ...',
        ];
    }
}
