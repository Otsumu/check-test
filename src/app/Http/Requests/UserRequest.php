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
        if ($this->is('register')) {
            return [
                'name' => ['required', 'string'],
                'email' => ['required', 'email'],
                'password' => ['required', 'string'],
            ];
        } elseif ($this->is('login')) {
            return [
                'email' => ['required', 'email'],
                'password' => ['required', 'string'],
            ];
        }
    }

    public function messages()
    {
        return [
            'name.required' => 'お名前を入力してください。',
            'email.required' => 'メールアドレスを入力してください。',
            'email.email' => 'メールアドレスは「ユーザー名@ドメイン」形式で入力してください。',
            'password.required' => 'パスワードを入力してください。',
        ];
    }
}