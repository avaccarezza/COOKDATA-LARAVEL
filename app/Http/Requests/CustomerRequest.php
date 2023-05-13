<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AppRequest extends FormRequest
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
            'customer' => ['required', 'max:255'],           
            
            
        ];
    }

    /*public function withValidator($validator)
    {
        $validator->after(function ($validator) {
            if ($this->status == 'available' && $this->stock == 0) {
                $validator->errors()->add('stock', 'If available must have stock');
            }
        });
    }*/
}
