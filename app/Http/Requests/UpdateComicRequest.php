<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateComicRequest extends FormRequest
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
            'title' => [
                'required',
                Rule::unique('comics')->ignore($this->comic->id),
                'min:3',
                'max:255'
            ],
            'description' => 'required|min:20|max:10000',
            'thumb' => 'nullable',
            'price' => 'nullable|max:255',
            'series' => 'nullable|max:254',
            'sale_date' => 'nullable|max:10',
            'type' => 'nullable|max:254'
        ];
    }

    public function messages()
    {
        return [
            'title.unique' => 'Il titolo è già stato inserito',
            'title.required' => 'Il titolo è richiesto',
            'title.min' => 'Il titolo è troppo corto',
            'title.max' => 'Il titolo è troppo lungo',
            'description.required' => 'La descrizione è rischiesta',
            'description.max' => 'La descrizione è troppo lunga',
            'description.min' => 'La descrizione è troppo corta',
            'price.max' => 'Il prezzo è troppo lungo',
            'series.max' => 'La serie è troppo lunga',
            'sale_date.max' => 'La data è troppo lunga',
            'type.max' => 'Il tipo è troppo corto'
        ];
    }
}
