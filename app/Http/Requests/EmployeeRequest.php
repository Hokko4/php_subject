<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeRequest extends FormRequest
{
    use ConfirmRequestTrait;
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
            'lastName'      => 'required',
            'firstName'     => 'required',
            'lastNameKana'  => 'required',
            'firstNameKana' => 'required',
        ];
    }

    public function messages()
    {
        return [
          'lastName.required' => '名字は必須項目です',
          'firstName.required' => '名前は必須項目です',
        ];
    }

    public function attributes()
    {
        return [
            'lastName' => '社員氏名（名字）',
            'firstName' => '社員氏名（名前）',
            'lastNameKana' => '社員カナ（名字）',
            'firstNameKana' => '社員カナ（名前）',
        ];
    }
}
