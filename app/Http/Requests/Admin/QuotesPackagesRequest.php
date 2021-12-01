<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class QuotesPackagesRequest extends FormRequest
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
            'titlequotes' => 'required|max:255',
            'contentquotes' => 'required|max:10000',
            'thumbnailsquotes' => 'required|mimes:jpeg,jpg,png,gif,svg|max:100000'
        ];
    }
}
