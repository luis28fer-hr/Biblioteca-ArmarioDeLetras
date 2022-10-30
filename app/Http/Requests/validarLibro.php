<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validarLibro extends FormRequest
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
            'isbn' => 'required|numeric|digits:1',
            'titulo' => 'required',
            'autor' => 'required',
            'paginas' => 'required|integer',
            'editotial' => 'required',
            'email' => 'required|email'
        ];
    }
}
