<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComentStoreRequest extends FormRequest
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
            'name' =>'required',
            'short_content' =>'required|min:10',
            'work' =>'required|max:15',
            'img' => 'required|mimes:png,jpg',
        ];
    }
    public function  message()
    {
        return[
            'name.required' => 'sarlavha bolishi shart !',
            'work.max' => 'Eng kamida 5 ta belgi bplishi kerak !',
            'img.mimes' => 'Rasm png yoki jpg formatda kiritilsin'
        ];
    }
}
