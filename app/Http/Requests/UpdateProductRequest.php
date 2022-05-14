<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRequest extends FormRequest
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
            'name'=>'required',
            'description'=>'required',
            'is_approved'=>'nullable|boolean',
            'category_id'=>'nullable|exists:categories,id',
            'user_id'=>'nullable|exists:users,id',
            'image' => 'nullable|image|mimes:png,jpg,jpeg'
        ];
    }
}
