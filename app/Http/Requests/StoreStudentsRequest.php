<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreStudentsRequest extends FormRequest
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
            'txtid' => 'required|unique:students,idstudents|min:10|max:11',
            'txtfullname' => 'required',
            'txtgender' => 'required',
            'txtemail' => 'required|email|unique:students,emailaddress',
            'txtphone' => 'required|numeric',
            'txtaddress' => 'required',
        ];
    }

    public function messages(): array
    {
        return [
            'txtid.required' => ':attribute tidak boleh kosong',
            'txtid.unique' => ':attribute sudah ada di dalam tabel',
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