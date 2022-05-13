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
            'price'=>'required|numeric',
            'description'=>'required',
            'is_approved'=>'nullable|boolean',
            'category_id'=>'required|exists:categories,id',
            'user_id'=>'required|exists:users,id',
            'image' => 'nullable|image|mimes:png,jpg,jpeg'
        ];
    }
}
