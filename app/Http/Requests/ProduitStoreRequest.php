<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProduitStoreRequest extends FormRequest
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
            'nom' => ['required', 'max:255', 'string'],
            'image' => ['nullable'],
            'prix' => ['required', 'max:255'],
            'poids' => ['required', 'max:255'],
            'categorie_id' => ['required', 'exists:categories,id'],
        ];
    }
}
