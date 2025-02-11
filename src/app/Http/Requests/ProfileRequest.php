<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
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
            'image' => 'nullable|mimes:jpeg,png|max:2048',
            'postal_code' => 'required|regex:/^\d{3}-\d{4}$/',
            'address' => 'required|string|max:255',
            'building' => 'nullable|string|max:255',
        ];
    }

    public function messages()
    {
        return [
            'postal_code.regex' => '郵便番号は「XXX-XXXX」の形式で入力してください。',
            'image.mimes' => 'プロフィール画像はJPEGまたはPNG形式でアップロードしてください。',
            'image.max' => '画像サイズは2MB以内である必要があります。',
        ];
    }
}
