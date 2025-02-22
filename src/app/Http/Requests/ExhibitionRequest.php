<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ExhibitionRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'category_ids' => 'required|array',
            'category_ids.*' => 'exists:categories,id',
            'description' => 'required|string|max:255',
            'price' => 'required|numeric|min:1',
            'brand' => 'nullable|string|max:255',
            'image' => 'nullable|mimes:jpeg,png|max:2048',
            'condition' => 'required|string|max:255',
        ];
    }
}
