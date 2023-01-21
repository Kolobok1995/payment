<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderFormRequest extends FormRequest
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
    
    protected function prepareForValidation()
    {
        $this->merge([
            'phone' => $this->phone,
        ]);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'phone'     => 'required',
            'name'     => 'max:30|regex:/^[А-ЯЁ][а-яё][[:print:]]*$/ui|nullable',
            "email"     => 'email|required'
        ];
    }

    /**
     * Get the validation attributes that apply to the request.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            //
        ];
    }

    /**
     * Get the validation messages that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'phone.required' => 'Поле телефон обязательно к заполнению',
            'name.max' => 'Поле имя не должно быть длиннее 30 символов',
            'name.regex' => 'Поле должно содержать только русские буквы',
            'email.email' => 'Недопустимы формат email',
        ];
    }
}
