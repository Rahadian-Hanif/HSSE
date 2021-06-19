<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LaporanPelanggaranRequest extends FormRequest
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
            'tgl' => date('Y-m-d', strtotime($this->tgl)),
            'id_user' => auth()->user()->id,
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
            'id_user' => 'required',
            'kepada' => 'required',
            'bagian' => 'required',
            'tgl' => 'required',
            'pelanggaran' => 'required',
            'deskripsi' => 'required'
        ];
    }
}
