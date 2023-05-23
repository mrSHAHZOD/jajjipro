<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InfoStoreRequest extends FormRequest
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
            'title' => 'required|min:5|max:30',
            'content' => 'required',
            'icon' => 'required|mimes:png,jpg'
        ];
    }

    public function  message()
    {
        return[
            'title.required' => 'sarlavha bolishi shart !',
            'title.min ' => 'Eng kamida 5 ta belgi bplishi kerak !',
            'icon.mimes' => 'Rasm png yoki jpg formatda kiritilsin'
        ];
    }
}
