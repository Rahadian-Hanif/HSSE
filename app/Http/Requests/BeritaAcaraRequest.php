<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BeritaAcaraRequest extends FormRequest
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
            'waktu' => date('Y-m-d', strtotime($this->waktu)),
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
        $regexxx = 'regex:/^[^(\|\]~`!%^&*=}";:?>+-<’)]*$/';
        return [
            'id_user' => 'required',
            'bukti' => 'required|mimes:jpeg,png,jpg,pdf,docx|max:2048',
            'jenis' => 'required',
            'waktu' => 'required',
            'tempat' => ['bail', 'required', $regexxx],
            'kronologi' => 'required',
            'korban' => 'required'
        ];
    }
}
