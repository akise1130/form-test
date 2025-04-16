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
    public function rules()
    {
        return [
            'last_name' => ['required','string'],
            'first_name' => ['required','string'],
            'gender' => ['required'],
            'email' => ['required','digits_between:1,5','numeric'],
            'tel' => ['required','digits_between:1,5','numeric'],
            'address' => ['required'],
            'building' => ['required'],
            'category_id' =>['required'],
            'content' => ['required','max:120']
        ];
    }

    public function messages()
    {
        return [
        'last_name.required' => '姓を入力してください',
        'first_name.required' => '名を入力してください',
        'gender.required' => '性別を選択してください',
        'email.email' => 'メールアドレスはメール形式で入力してください',
        'email.required' => 'メールアドレスを入力してください',
        'tel.required' => '電話番号を入力してください',
        'address',
        'building',
        'category_id',
        'content'
        ]
    }
}
