<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required|min:3|max:255',
            'description' => 'required|min:20|max:10000',
            'thumb' => 'required',
            'price' => 'required|min:3|max:255',
            'series' => 'min:1|max:254',
            'sale_date' => 'required|min:10|max:10',
            'type' => 'required|min:3|max:254',
        ];
    }
}
