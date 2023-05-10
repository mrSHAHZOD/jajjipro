<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GroupStoreRequest extends FormRequest
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
            'title' => 'required|min:15',
            'short_content' =>'required|min:20',
            'age' => 'required|max:5',
            'seat' => 'required|max:10',
            'payment' => 'required|max: 50',
            'img'=>'required|mimes:png,jpg',
        ];
    }
}
