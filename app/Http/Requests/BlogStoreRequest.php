<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BlogStoreRequest extends FormRequest
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
            'title' =>'required|min:10',
            'name' => 'required|min:4',
            'short_content'=>'required|min:15',
            'img' => 'required|mimes:png,jpg'
        ];
    }
    public function message()
    {
        return[
            'title.required' => 'sarlavha bolishi shart !',
            'title.min ' => 'Eng kamida 5 ta belgi bplishi kerak !',
            'name.min' => 'eng kamida 4 ta harf bolishi kerak ',
            'img.mimes' => 'Rasm png yoki jpg formatda kiritilsin'
        ];
    }
}
