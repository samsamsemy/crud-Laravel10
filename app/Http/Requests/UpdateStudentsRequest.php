<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateStudentsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'txtfullname' => 'required',
            'txtgender' => 'required',
            'txtemail' => [
                'required',
                Rule::unique('students', 'emailaddress')->ignore($this->txtid,'idstudents'),
                'email'
            ],
            'txtphone' => 'required|numeric',
            'txtaddress' => 'required',
        ];
    }

    public function messages(): array
    {
        return [
            'txtfullname' => ':attribute tidak boleh kosong',
            'txtgender' => ':attribute tidak boleh kosong',
            'txtemail' => ':attribute tidak boleh kosong',
            'txtphone' => ':attribute tidak boleh kosong',
            'txtaddress' => ':attribute tidak boleh kosong',
        ];
    }
    public function attributes(): array
    {
        return [
            'txtid' => 'ID students',
            'txtfullname' => 'Nama',
            'txtgender' => 'Gender',
            'txtemail' => 'Email',
            'txtphone' => 'Nomor telepon',
            'txtaddress' => 'Alamat',
        ];
    }
}