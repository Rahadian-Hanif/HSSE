<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class DataPegawaiRequest extends FormRequest
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

    // Preparing any of data before it being validate
    protected function prepareForValidation()
    {
        $this->merge([
            'divisi' => ucwords(strtolower($this->divisi)),
            'password' => bcrypt('123456'),
        ]);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $regexxx = 'regex:/^[^(\|\]~`!%^&*=}";:?>+-<’)]*$/';
        return [
            'nama' => ['bail', 'required', 'max:50', $regexxx],
            'email' => ['required', 'email:rfc,dns', 'unique:users,email',],
            'password' => 'required',
            'username' => ['bail', 'required', 'max:50', $regexxx],
            'divisi' => ['bail', Rule::in(['Pegawai', 'Pengawas', 'Supervisor']), 'required', 'max:50', $regexxx],
            'level' =>  ['bail', 'required', $regexxx],
            'alamat' => ['bail', 'required', 'max:255', $regexxx],
            'tlp' => 'numeric'
        ];
    }
}
