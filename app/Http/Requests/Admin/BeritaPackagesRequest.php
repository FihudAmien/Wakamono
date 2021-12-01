<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class BeritaPackagesRequest extends FormRequest
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

    public function messages()
    {
        return [
            'title.required' => 'Jangan Lupa di isi Judulnya',
            'content.required'  => 'Konten nya belum di isi',
            'thumbnails'  => 'Pastikan Ukuran,Format File sudah benar'
        ];
    }

    public function rules()
    {
        return [
            'title' => 'required|max:255',
            'content' => 'required|max:10000',
            'thumbnails' => 'required|mimes:jpeg,jpg,png,gif,svg|max:100000|dimensions:width=540,height=360',
        ];
        
    }
}
