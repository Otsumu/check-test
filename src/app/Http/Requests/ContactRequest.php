<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
    public function rules() {
        return [
            'first_name' => ['required', 'string'],
            'last_name' => ['required', 'string'],
            'gender' => ['required'],
            'email' => ['required','string','email'],
            'tel' => ['string'],
            'address' => ['required','string'],
            'contact_type' => ['string'],
            'contact_content' => ['string'],
        ];
    }    
    public function messages() {
        return [
            'first_name.required' => '名を入力してください',
            'last_name.required' => '姓を入力してください',
            'gender.required' => '性別を選択してください',
            'email.required' => 'メールアドレスを入力してください',
            'email.email' => 'メールアドレスはメール形式で入力してください',
            'tel.required' => '電話番号を入力してください',
            'address.required' => '住所を入力してください',
            'contact_type.required' => 'お問い合わせの種類を選択してください',
            'message.required' => 'お問い合わせ内容を入力してください',
            'message.max'=> 'お問い合わせ内容は120文字以内で入力してください',
        ];
    }
}
