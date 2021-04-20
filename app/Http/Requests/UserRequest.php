<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'name' => 'required|max:255',
            'email' => 'required|max:255',
            'password' => 'required|min:8'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Bạn chưa nhập tên!',
            'email.required' => 'Bạn chưa nhập email!',
            'password.required' => 'Bạn chưa nhập mật khẩu!',
            'password.min' => 'Mật khẩu quá nhắn',
        ];
    }
}
